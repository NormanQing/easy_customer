

@extends('backend.layout')

@section('content')
    <div class="zurb-full">
        <div class="new-row zurb-row">
            <div class="zurb-div-sm-12">
                <div class="hide-bread float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">用户管理</a></li>
                        <li class="breadcrumb-item">访客管理</li>
                    </ol>
                </div>
                <h4 class="page-title">访客管理</h4>
            </div>
        </div>
        <div class="new-row zurb-row">
            <div class="card m-b-20 table-responsive">
                <div class="card-header">
                    <div class="row">
                        <div class="m-t-10">
                            <button id="listDelete" type="button" class="btn btn-outline-danger  waves-effect waves-primary m-b-5"><i class="fa fa-trash"></i> 删除</button>
                        </div>
                    </div>
                </div>

                <div class="layui-card-body">
                    <div class="row">
                        <table id="dataTable" lay-filter="dataTable" class="layui-table">
                        </table>
                        <script type="text/html" id="options">
                            <a class="btn btn-icon btn-xs btn-outline-info  waves-effect waves-info" lay-event="edit"><i class="fa fa-edit (alias)"></i> 编辑</a>
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        layui.use(['layer', 'table'], function(){
            var layer = layui.layer;
            var table = layui.table;

            //表格初始化
            var dataTable = table.render({
                elem: '#dataTable'
                , height: 500
                , url: "{{url(config('app.backend_route_prefix').'/guest/data')}}" //数据接口
                , page: true //开启分页
                , cols: [[ //表头
                    {checkbox: true, fixed: true}
                    , {field: 'id', title: 'ID', sort: true, width: 80, align: 'center'}
                    , {field: 'name', title: '姓名', templet: function(d){
                        if(!d.name) {
                            return '无名'
                        }
                        return d.name
                        }}
                    , {field: 'guest_status_format', title: '状态',escape:false}
                    , {field: 'grade', title: '意向分'}
                    , {field: 'login_times', title: '登录次数'}
                    , {field: 'groud', title: '客服组',templet: function(d){
                        return d.group.name;
                        }}
                    , {field: 'admin_id', title: '最后服务', templet: function(d){
                        return d.admin.nick_name
                        }}
                    , {field: 'browser', title: '浏览器'}
                    , {field: 'from_url', title: '页面来源'}
                    , {field: 'last_ip', title: '归属地(IP)',templet: function(d){
                        return d.ip_zone + '(' + d.last_ip + ')';
                        }}
                    , {field: 'last_login', title: '最后登录'}
                    , {fixed: 'right', width: 90, align: 'center', toolbar: '#options'}
                ]]
            });

            //监听工具条
            table.on('tool(dataTable)', function (obj) { //注：tool是工具条事件名，dataTable是table原始容器的属性 lay-filter="对应的值"
                var data = obj.data //获得当前行数据
                    , layEvent = obj.event; //获得 lay-event 对应的值
               if (layEvent === 'edit') {
                    layer.open({
                        type: 2,
                        title: '编辑',
                        btn: ['提交', '关闭'], //可以无限个按钮
                        btnAlign: 'c',
                        area: ['650px', '90%'],
                        content: '{{url(config('app.backend_route_prefix').'/guest/edit')}}/'+data.id, //这里content是一个DOM，注意：最好该元素要存放在body最外层，否则可能被其它的相对元素所影响
                        yes: function (index, layero) {
                            var submit = layero.find('iframe').contents().find('#submitBtn');
                            submit.click(); // 按钮提交表单

                            return false;
                        },
                        btn2: function (index, layero) {
                            layer.close(index)
                        }
                    });
                }

            });

            //按钮批量删除
            $("#listDelete").click(function () {
                var ids = []
                var hasCheck = table.checkStatus('dataTable')
                var hasCheckData = hasCheck.data
                if (hasCheckData.length > 0) {
                    $.each(hasCheckData, function (index, element) {
                        ids.push(element.id)
                    })
                }
                if (ids.length > 0) {
                    layer.confirm('确认删除吗？', function (index) {
                        $.post("{{url(config('app.backend_route_prefix').'/guest/destroy')}}", {
                            _method: 'delete',
                            ids: ids
                        }, function (result) {
                            if (result.code == 0) {
                                var searchName = $('input[name="search_name"]').val();
                                var searchGroup = $('input[name="search_group"]').val();
                                var searchTime = $('input[name="search_time"]').val();
                                table.reload('dataTable', {
                                    url: "{{url(config('app.backend_route_prefix').'/guest/data')}}" //数据接口
                                    , where: {username: searchName, group_id: searchGroup,search_time:searchTime}
                                })
                            }
                            layer.close(index);
                            layer.msg(result.msg, {icon: 6})
                        });
                    })
                } else {
                    layer.msg('请选择删除项', {icon: 5})
                }
            });

            $('#doSearch').click(function () {
                var searchName = $('input[name="search_name"]').val();
                var searchGroup = $('select[name="search_group"]').val();
                var searchTime = $('input[name="search_time"]').val();

                table.reload('dataTable', {
                    url: "{{url(config('app.backend_route_prefix').'/guest/data')}}" //数据接口
                    , where: {search_name: searchName, search_group: searchGroup,search_time:searchTime}
                })
            });

            $('#resetSearch').click(function(){

                var searchName = $('input[name="search_name"]').val('');
                var searchGroup = $('select[name="search_group"]').val('');
                var searchTime = $('input[name="search_time"]').val('');
                table.reload('dataTable', {
                    url: "{{url(config('app.backend_route_prefix').'/guest/data')}}" //数据接口
                    , where: {search_name: '', search_group: '',search_time:''}
                })
            });


        });
    </script>
@endsection

@extends('backend.base')

@section('content')
    <div class="zurb-full">
        <div class="card p-t-15">
            <div class="card-body" style="padding-top:16px;">
                @include('backend.admin._form')
            </div>
        </div>
        </div>
    </div>
    <script>
    </script>
@endsection

@section('script')
<script>
    layui.use([ 'form'], function () {
        var $ = layui.jquery
            , form = layui.form

        form.on('submit(submitBtn)', function (data) {
            var loading = layer.msg('正在保存', {icon: 16, shade: 0.3, time: 0});

            if(!data.field.type){
                layer.msg('请选择类型');
                return false;
            }

            $.ajax({
                method: 'POST',
                url: '{{url(config('app.backend_route_prefix').'/customer/store')}}',
                data: data.field,
                dataType: 'json',
                success: function (res) {
                    if (res.code == 0) {
                        var index = parent.layer.getFrameIndex(window.name);
                        parent.layer.close(index);
                        parent.layer.msg(res.msg, {icon: 6});
                        parent.layui.table.reload('dataTable')
                    } else {
                        layer.msg(res.msg, {icon: 5});
                        return false;
                    }
                },
                error: function (res) {

                    if('responseJSON' in res){
                        var result = res.responseJSON
                        if ('errors' in result) {
                            var errors = result.errors;
                            var str = '';
                            for (var val in errors) {
                                var error = errors[val]
                                for (v in error) {
                                    var tmp = error[v] + '<br />';
                                    str += tmp;
                                }
                            }
                            layer.close(loading);
                            layer.msg(str, {icon: 5});
                            return;
                        }
                    }

                    layer.close(loading);
                    layer.msg('操作失败', {icon: 5});
                }
            });

            return false;
        });

    });
</script>
@endsection

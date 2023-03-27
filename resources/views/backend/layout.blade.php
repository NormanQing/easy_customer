<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>管理后台</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="/static/backend/theme/eon/css/chartist.min.css">
    <link href="/static/backend/theme/eon/css/style.css" rel="stylesheet" type="text/css">
    <link href="/static/backend/theme/eon/css/jquery.dialogbox.css" rel="stylesheet" type="text/css">
    <link href="/static/backend/layui//css/layui.css" rel="stylesheet" type="text/css">
    <script src="/static/backend/layui/layui.js"></script>

</head>

<body id="body-main">
<header>
    <div id="topnav">
        <div class="top-header-animation">
            <div id="particles-js" class="zindex1"></div>
        </div>
        <div class="added-element-header">
            <div class="topbar-main relative">
                <div class="zurb-full">
                    <div class="logo">
                        <a href="/{{config('app.backend_route_prefix')}}" class="logo">
                            Easy Customer
                            {{--<img src="./Dashboard 5_files/logo-sm.png" alt="" height="26" class="logo-small">
                            <img style="width: 32px;" src="/static/backend/images/logo.png" alt="" class="logo-large">
                     --}}   </a>
                    </div>
                    <div class="menu-other topbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="m-t-15 m-r-10">
                                <a href="#" class="btn btn-icon btn-purple waves-effect waves-light w-md"> <i class="fa fa-desktop"></i> <span>进入客服</span></a>
                            </li>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="/static/backend/images/r.png" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a href="#" class="dropdown-item notify-item">
                                        <i class="ti-user m-r-5"></i> 修改资料
                                    </a>
                                    <a id="edit-pwd" href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-settings m-r-5"></i> 修改密码
                                    </a>
                                    <a href="/{{config('app.backend_route_prefix')}}/logout" class="dropdown-item notify-item">
                                        <i class="ti-power-off m-r-5"></i> 退出 </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="navbar-custom navbar-checker">
                <div class="zurb-full">
                    <div id="navigation">
                        <ul class="navigation-menu">
                            <li class="">
                                <a href="/{{config('app.backend_route_prefix')}}"><i class="ti-home"></i> <span> 首页 </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="ti-files"></i> <span> 用户管理</span> </a>
                                <ul class="submenu">
                                    <li><a href="/{{config('app.backend_route_prefix')}}/admin">客服管理</a></li>
                                    <li><a href="/{{config('app.backend_route_prefix')}}/group">客服组管理</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="ti-files"></i><span> 记录 </span> </a>
                                <ul class="submenu">
                                    <li><a href="#">对话记录管理</a></li>
                                    <li><a href="#">客服管理</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="ti-files"></i><span> 智能 </span> </a>
                                <ul class="submenu">
                                    <li><a href="#">对话记录管理</a></li>
                                    <li><a href="#">客服管理</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="ti-files"></i> <span> 系统 </span> </a>
                                <ul class="submenu">
                                    <li><a href="#">系统设置</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="spinner" style="display: none;">
        <div class="loader">
            <div class="bounce loader1 "></div>
            <div class="bounce loader2 "></div>
        </div>
    </div>
</section>
<div id="mask-edit-pwd"></div>
<div class="wrapper">
    @yield('content')
</div>
<footer class="footer">
    <div class="zurb-contents">
        <div class="new-row zurb-row">
            <div class="zurb-div-12 text-center"> Easy Customer © 2022-2023. All Rights Reserved By: <strong> <a href="">Norman</a></strong>
            </div>
        </div>
    </div>
</footer>
<a href="#body-main" id="goTop"><i class="fa fa-chevron-up"></i></a>
<script src="/static/backend/theme/eon/js/jquery.min.js"></script>
<script src="/static/backend/theme/eon/js/popper.min.js"></script>
<script src="/static/backend/theme/eon/js/bootstrap.min.js"></script>
<script src="/static/backend/theme/eon/js/waves.js"></script>
<script src="/static/backend/theme/eon/js/jquery.slimscroll.js"></script>
<script src="/static/backend/theme/eon/js/modernizr.min.js"></script>
<script src="/static/backend/theme/eon/js/particles.js"></script>
<script src="/static/backend/theme/eon/js/particlesapp_direction.js"></script>
<script src="/static/backend/theme/eon/js/jquery.waypoints.min.js"></script>
<script src="/static/backend/theme/eon/js/jquery.counterup.min.js"></script>
<script src="/static/backend/theme/eon/js/jquery.dialogBox.js"></script>

<script src="/static/backend/theme/eon/js/jquery.knob.js"></script>
<script src="/static/backend/theme/eon/js/equalize.min.js"></script>
<script src="/static/backend/theme/eon/js/jquery.core.js"></script>
<script src="/static/backend/theme/eon/js/jquery.app.js"></script>

<script>
    $('#edit-pwd').on("click", function(e) {
        $('#mask-edit-pwd').dialogBox({
            hasClose: true,
            hasBtn: true,
            confirmValue: '保存',
            confirm: function() {
                alert('this is callback function');
            },
            cancelValue: '取消',
            title: 'Dialog title',
            content: 'This Admin Dashboard Allowed Or not'
        });
    })
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('script')
</body></html>

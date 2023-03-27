<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sample 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="/static/backend/theme/eon/css/chartist.min.css">
    <link href="/static/backend/theme/eon/css/style.css" rel="stylesheet" type="text/css">
    <link href="/static/backend/theme/eon/css/jquery.dialogbox.css" rel="stylesheet" type="text/css">
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
                                    <li><a href="#">客服组管理</a></li>
                                    <li><a href="#">客服管理</a></li>
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
    <div class="zurb-full">
        <div class="new-row zurb-row">
            <div class="zurb-div-sm-12">
                <div class="hide-bread float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
        <div class="new-row zurb-row">
            <div class="zurb-div-md-3 zurb-div-lg-3">
                <div class="card m-b-20">
                    <div class="new-row zurb-row">
                        <div class="zurb-div-12">
                            <div class="bg-primary p-t-10 p-b-10 position-relative">
                                <div class="text-center text-white display-6">
                                    <i class="fa fa-user-o"></i> 访客
                                    <div class="badge badge-success position-absolute" style="bottom:3px;right: 5px">今日</div>
                                </div>
                            </div>
                            <div class="card-body mt-0">
                                <div class="align-items-center widget-user">
                                    <h2 class="text-danger" data-plugin="counterup">1567</h2>
                                    <div class="d-flex justify-content-between">
                                        <h5>总计</h5>
                                        <h5 class="m-b-0">6376363</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zurb-div-md-3 zurb-div-lg-3">
                <div class="card m-b-20">
                    <div class="new-row zurb-row">
                        <div class="zurb-div-12">
                            <div class="bg-info p-t-10 p-b-10 position-relative">
                                <div class="text-center text-white display-6">
                                    <i class="fa fa-wechat (alias)"></i> 会话
                                    <div class="badge badge-success position-absolute" style="bottom:3px;right: 5px">今日</div>
                                </div>
                            </div>
                            <div class="card-body mt-0 widget-user">
                                <div class="align-items-center">
                                    <h2 class="text-secondary" data-plugin="counterup">1234</h2>                                    <div class="d-flex justify-content-between">
                                        <h5>总计</h5>
                                        <h5 class="m-b-0">6376363</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zurb-div-md-3 zurb-div-lg-3">
                <div class="card m-b-20">
                    <div class="new-row zurb-row">
                        <div class="zurb-div-12">
                            <div class="bg-gradient-dark p-t-10 p-b-10 position-relative">
                                <div class="text-center text-white display-6">
                                    <i class="fa fa-android"></i> 机器人无解
                                    <div class="badge badge-success position-absolute" style="bottom:3px;right: 5px">今日</div>
                                </div>
                            </div>
                            <div class="card-body mt-0">
                                <div class="align-items-center">
                                    <h2 class="text-info" data-plugin="counterup">324</h2>                                    <div class="d-flex justify-content-between">
                                        <h5>总计</h5>
                                        <h5 class="m-b-0">6376363</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zurb-div-md-3 zurb-div-lg-3">
                <div class="card m-b-20">
                    <div class="new-row zurb-row">
                        <div class="zurb-div-12">
                            <div class="bg-secondary p-t-10 p-b-10 position-relative">
                                <div class="text-center text-white display-6">
                                    <i class="fa fa-file-image-o"></i> 图片总计
                                </div>
                            </div>
                            <div class="card-body mt-0">
                                <div class="align-items-center">
                                    <h2 class="text-custom" data-plugin="counterup">324</h2>                                    <div class="d-flex justify-content-between">
                                        <h5>文件总计</h5>
                                        <h5 class="m-b-0">6376363</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-row zurb-row">
            <div class="zurb-div-xl-12">
                <div class="card project-box m-b-20">
                    <h5 class="card-header">技术</h5>
                    <div class="card-body">
                        <div id="accordion" role="tablist" aria-multiselectable="true" class="mb-0">
                            <div class="card b-b0">
                                <div class="accor bg_gray" role="tab" id="headingOne">
                                    <h5 class="mb-0 mt-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="text-dark collapsed" aria-expanded="false" aria-controls="collapseOne"> 系统版本 </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="card-body">
                                       Version: 1.0.0
                                    </div>
                                </div>
                            </div>
                            <div class="card b-b0">
                                <div class="accor bg_gray" role="tab" id="headingOne">
                                    <h5 class="mb-0 mt-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="text-dark collapsed" aria-expanded="false" aria-controls="collapseOne"> PHP </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="card-body">
                                        <p>laravel6.20框架</p>
                                        <p>基于workerman的gatewayworker</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card b-b0">
                                <div class="accor bg_gray" role="tab" id="headingTwo">
                                    <h5 class="mb-0 mt-0">
                                        <a class="text-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 服务器 </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" style="">
                                    <div class="card-body">
                                        <p>Linux</p>
                                        <p>Nginx</p>
                                        <p>php7.2以上</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="accor bg_gray" role="tab" id="headingThree">
                                    <h5 class="mb-0 mt-0">
                                        <a class="text-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">前端</a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" style="">
                                    <div class="card-body">
                                        <p>layjs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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


<!--[if IE]>
<script  type="text/javascript" src="js/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
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

</body></html>

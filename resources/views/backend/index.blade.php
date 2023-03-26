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
                        <a href="/{{config('app.backend_router_prefix')}}" class="logo">
                            Easy Customer
                            {{--<img src="./Dashboard 5_files/logo-sm.png" alt="" height="26" class="logo-small">
                            <img style="width: 32px;" src="/static/backend/images/logo.png" alt="" class="logo-large">
                     --}}   </a>
                    </div>
                    <div class="menu-other topbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list notification-box">
                                <a class="nav-link dropdown-toggle waves-effect waves-light notification-box nav-user" data-toggle="dropdown" href="http://www.dmaku.com/demo/moban/2019091654100509/index5.html#" role="button" aria-haspopup="false" aria-expanded="false"> <i class="mdi mdi-bell-outline noti-icon"></i> </a>
                                <div class="noti-dot">
                                    <span class="dot"></span>
                                    <span class="pulse"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                    <ul class="list-group list-no-border user-list notify-item">
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="/static/backend/images/r.png" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Gordon Lewis</span>
                                                    <span class="desc">Someone mentioned you!</span>
                                                    <span class="time">1 hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-info">
                                                    <i class="mdi mdi-account"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Company Registered Forms</span>
                                                    <span class="desc">Sign up to all users</span>
                                                    <span class="time">1 day ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-pink">
                                                    <i class="mdi mdi-comment"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">New Messages</span>
                                                    <span class="desc">Send the messages</span>
                                                    <span class="time">5 day ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="./Dashboard 5_files/avatar-3.jpg" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Sophie White</span>
                                                    <span class="desc">Hey! upload my new template</span>
                                                    <span class="time">1 hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item ">
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-warning">
                                                    <i class="mdi mdi-settings"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Settings</span>
                                                    <span class="desc">There will changes new upadation</span>
                                                    <span class="time">2 minutes ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown notification-list notification-box">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-email-outline"></i>
                                </a>
                                <div class="noti-dot">
                                    <span class="dot"></span>
                                    <span class="pulse"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                    <ul class="list-group list-no-border user-list notify-item">
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-primary">
                                                    <i class="mdi mdi-comment-processing-outline"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">New Message</span>
                                                    <span class="desc">typing the message</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-success">
                                                    <i class="mdi mdi-comment-text-outline"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">New Message</span>
                                                    <span class="desc">Send the message</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-danger">
                                                    <i class="mdi mdi-alert-box"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">New Messages</span>
                                                    <span class="desc">Not send the message</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="/static/backend/images/r.png" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a href="http://www.dmaku.com/demo/moban/2019091654100509/profile.html" class="dropdown-item notify-item">
                                        <i class="ti-user m-r-5"></i> Profile </a>
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-settings m-r-5"></i> Settings </a>
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-anchor m-r-5"></i> Recent Activity </a>
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-email m-r-5"></i>View Inbox </a>
                                    <a href="http://www.dmaku.com/demo/moban/2019091654100509/page-login.html" class="dropdown-item notify-item">
                                        <i class="ti-lock m-r-5"></i>Sign in </a>
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ti-power-off m-r-5"></i> Logout </a>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
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
                                <div class="align-items-center">
                                    <h3 class="font-medium">1</h3>
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
                            <div class="card-body mt-0">
                                <div class="align-items-center">
                                    <h3 class="font-medium">1</h3>
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
                            <div class="bg-gradient-dark p-t-10 p-b-10 position-relative">
                                <div class="text-center text-white display-6">
                                    <i class="fa fa-android"></i> 机器人无解
                                    <div class="badge badge-success position-absolute" style="bottom:3px;right: 5px">今日</div>
                                </div>
                            </div>
                            <div class="card-body mt-0">
                                <div class="align-items-center">
                                    <h3 class="font-medium">1</h3>
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
                            <div class="bg-secondary p-t-10 p-b-10 position-relative">
                                <div class="text-center text-white display-6">
                                    <i class="fa fa-file-image-o"></i> 图片总计
                                    <div class="badge badge-success position-absolute" style="bottom:3px;right: 5px">今日</div>
                                </div>
                            </div>
                            <div class="card-body mt-0">
                                <div class="align-items-center">
                                    <h3 class="font-medium">1</h3>
                                    <div class="d-flex justify-content-between">
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
<!--[if IE]>
<script  type="text/javascript" src="js/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="/static/backend/theme/eon/js/jquery.knob.js"></script>
<script src="/static/backend/theme/eon/js/equalize.min.js"></script>
<script src="/static/backend/theme/eon/js/jquery.core.js"></script>
<script src="/static/backend/theme/eon/js/jquery.app.js"></script>

</body></html>

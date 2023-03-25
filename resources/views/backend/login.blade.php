<!DOCTYPE html>
<html lang="zh-CN"><head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/static/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/static/fonts/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/static/backend/css/util.css">
    <link rel="stylesheet" type="text/css" href="/static/backend/css/login.css">
</head>

<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('/static/backend/images/bg-01.jpeg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="/{{ config('app.backend_route_prefix') }}/login" method="post">
                {{csrf_field () }}
                <span class="login100-form-title p-b-49">登录</span>

                <div class="wrap-input100 validate-input m-b-23" data-validate="请输入用户名">
                    <span class="label-input100">用户名</span>
                    <input class="input100" type="text" name="username" value="{{old('username')}}" placeholder="请输入用户名" autocomplete="off">
                    <span class="focus-input100" data-symbol=""></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="请输入密码">
                    <span class="label-input100">密码</span>
                    <input class="input100" type="password" name="password" placeholder="请输入密码">
                    <span class="focus-input100" data-symbol=""></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="验证码">
                    <span class="label-input100">验证码</span>
                    <input class="input100" style="width: 59%;" type="text" name="vercode" placeholder="请输入验证码">
                    <span class="focus-input100" data-symbol=""></span>
                    <img style="position: absolute;bottom: 4px;right: 0;" title="点击刷新" src="{{ captcha_src('flat') }}" onclick="this.src='{{ captcha_src('flat') }}?'+Math.random();">

                </div>

                <div class="text-right p-t-8 p-b-31">
                    <a href="javascript:">忘记密码？</a>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">登 录</button>
                    </div>
                </div>

                <div class="txt1 text-center p-t-54 p-b-20">
                    <span>@Easy Customer客服系统</span>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/static/js/jquery-3.2.1.min.js"></script>
{{--
<script src="/static/backend/js/login.js"></script>
--}}

<script>
    //表单提示信息
    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    alert("{{$error}}",{icon:5});
    @break
    @endforeach
    @endif

    //正确提示
    @if(session('success'))
    alert("{{session('success')}}",{icon:6});
    @endif
</script>

</body></html>

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
<section>
    <div class="spinner" style="display: none;">
        <div class="loader">
            <div class="bounce loader1 "></div>
            <div class="bounce loader2 "></div>
        </div>
    </div>
</section>
<div class="wrapper" style="padding-top: 44px;">
    @yield('content')
</div>
<script src="/static/backend/theme/eon/js/jquery.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('script')

</body></html>

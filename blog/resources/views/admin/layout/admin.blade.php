<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台</title>
    <link rel="stylesheet" href="/css/pure-min.css">
    <link rel="stylesheet" href="/css/grids-responsive-min.css">
    <link rel="stylesheet" href="/css/side-menu.css">
    <script src="/js/jquery.min.js"></script>
    <style>
        .content{
            padding-top: 50px;
        }
    </style>
</head>
<body>
<div id="layout">
    <div id="menu">
        <div class="pure-menu">
            {{--pure-menu-selected--}}
            <ul class="pure-menu-list">
                <li class="pure-menu-item {{ $home_class or '' }} "><a href="/" target="_blank" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item {{ $host_class or '' }}"><a href="/gabe/host/index" class="pure-menu-link">服务器</a></li>
                <li class="pure-menu-item {{ $host_create_class or '' }}"><a href="/gabe/host/create" class="pure-menu-link">创建服务器</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        @yield('main')
    </div>
</div>



</body>
</html>
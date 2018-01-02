<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="baidu-site-verification" content="6YzHBUGcGj" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content='@yield('keywords')'    name='Keywords'>
    <meta content='@yield('description')' name='Description'>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/pure-min.css">
    <link rel="stylesheet" href="/css/grids-responsive-min.css">
    <link rel="stylesheet" href="/css/blog.css?t=12">
    <style>
        .pricing-table-header{
            padding: 40px;
            cursor: pointer;
        }
        .disN{
            display: none;
        }
    </style>
    @section('googleanalytics')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111758600-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-111758600-1');
        </script>
        @show
</head>
<body>

@section('menu')
    <div class="pure-menu pure-menu-horizontal">
        <a href="/" class="pure-menu-heading">免费ssr账号分享</a>
        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="/" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="/soft" class="pure-menu-link">SSR客户端</a></li>
        </ul>
    </div>
@show
@yield('content')
</body>
</html>



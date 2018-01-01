<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content='免费ssr账号,shadowsocks,VPS,翻墙,梯子' name='Keywords'>
    <meta content='免费ssr账号分享,shadowsocks,翻墙,梯子'name='Description'>
    <title>免费ssr账号</title>
    <link rel="stylesheet" href="/css/pure-min.css">
    <link rel="stylesheet" href="/css/grids-responsive-min.css">
    <link rel="stylesheet" href="/css/blog.css?t=12">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/js/jquery.fancybox-1.3.4.css">
    <script type="text/javascript" src="/js/jquery.fancybox-1.3.4.js"></script>
    <style>
        .pricing-table-header{
            padding: 40px;
            cursor: pointer;
        }
        .disN{
            display: none;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111758600-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-111758600-1');
    </script>
</head>
<body>
<div class="pure-menu pure-menu-horizontal">
    <a href="#" class="pure-menu-heading">免费ssr账号分享</a>
    <ul class="pure-menu-list">
        {{--<li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>--}}
        {{--<li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Pricing</a></li>--}}
        {{--<li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>--}}
    </ul>
</div>
<div class="banner">
    <h1 class="banner-head">
        Across the Great Wall <br/>we can reach every corner in the world
    </h1>
</div>



<div class="l-content">
    <div class="pricing-tables pure-g">

        @foreach($model as $host)
        <div class="pure-u-1 pure-u-md-1-4 pricing-table-wrap">
            <div></div>
            <div class="pricing-table pricing-table-free">
                <div class="pricing-table-header">
                    <a  href="{{ $host->ssr }}">
                        <img alt="example1" src="{{ url('qr',['id'=>$host->id]) }}">
                    </a>
                    <div style="display: none;">
                        <div id="host_{{ $host->id }}">
                            <img alt="example1" src="{{ url('qr',['id'=>$host->id]) }}" style="width: 90%;margin: 0 auto;display: block">
                        </div>
                    </div>
                   
                </div>
                <div class="ssr-link">
                    @if($host->status == 0)
                        <p style="text-decoration: line-through">{{ $host->ssr }}</p>
                    @else
                        <p>{{ $host->ssr }}</p>
                    @endif
                </div>
                <button class="button-choose pure-button btn-copy" data-clipboard-text="{{ $host->ssr }}" >复制</button>
                <button class="button-choose pure-button">打赏</button>
            </div>
        </div>
        @endforeach



    </div> <!-- end pricing-tables -->

    {{--<div class="information pure-g">--}}
        {{--<div class="pure-u-1 pure-u-md-1-2">--}}
            {{--<div class="l-box">--}}
                {{--<h3 class="information-head">Get started today</h3>--}}
                {{--<p>--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="pure-u-1 pure-u-md-1-2">--}}
            {{--<div class="l-box">--}}
                {{--<h3 class="information-head">Pay monthly or annually</h3>--}}
                {{--<p>--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo--}}
                    {{--consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="pure-u-1 pure-u-md-1-2">--}}
            {{--<div class="l-box">--}}
                {{--<h3 class="information-head">24/7 customer support</h3>--}}
                {{--<p>--}}
                    {{--Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="pure-u-1 pure-u-md-1-2">--}}
            {{--<div class="l-box">--}}
                {{--<h3 class="information-head">Cancel your plan anytime</h3>--}}
                {{--<p>--}}
                    {{--Duis aute irure dolor in reprehenderit in voluptate velit esse--}}
                    {{--cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div> <!-- end information -->--}}
</div>
<script src="/js/clip.js"></script>
<script>
    $(".various1").fancybox({

    });
    var clipboard = new Clipboard('.btn-copy');
    clipboard.on('success', function(e) {
        alert('复制成功');
    });
</script>
</body>
</html>



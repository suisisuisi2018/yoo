@extends('layouts.home')
@section('keywords', '免费ssr账号,shadowsocks,VPS,翻墙,梯子')
@section('description', '免费ssr账号分享,shadowsocks,翻墙,梯子')
@section('title', '免费ssr账号')
@section('content')
    <div class="banner">
        <h1 class="banner-head">
            Across the Great Wall <br/>we can reach every corner in the world
        </h1>
    </div>

    <div class="l-content">
        <h3 style="text-align: center">pc/移动端可以直接点击二维码添加服务器</h3>
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
                                <div id="host_{{ $host->id }}" >
                                    <img alt="example1" src="{{ url('qr',['id'=>$host->id]) }}" style="width: 90%;margin: 0 auto;display: block">
                                </div>
                            </div>
                        </div>
                        <div class="ssr-link">
                            @if($host->status == 0)
                                <p style="text-decoration: line-through">{{ $host->remarks }}</p>
                            @else
                                <p>{{ $host->remarks }}</p>
                            @endif
                        </div>
                        <button class="button-choose pure-button btn-copy" data-clipboard-text="{{ $host->ssr }}" >复制</button>
                        <button class="button-choose pure-button">打赏</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="/js/clip.js"></script>
    <script>
        var clipboard = new Clipboard('.btn-copy');
        clipboard.on('success', function(e) {
            alert('复制成功');
        });
    </script>
@endsection



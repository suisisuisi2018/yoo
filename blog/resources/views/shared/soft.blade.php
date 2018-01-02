@extends('layouts.home')
@section('keywords', '免费ssr账号,ssr客户端,shadowsocks,VPS,翻墙,梯子')
@section('description', '免费ssr账号分享,ssr客户端,shadowsocks,翻墙,梯子')
@section('title', 'ssr客户端下载')

@section('content')
    <style>
        .pricing-tables{
            margin-top: 5em;
        }
        .pricing-table{
            padding: 0;
        }
        .pricing-table-header{
            padding: 80px 40px;
        }
        .pricing-table-header h2{
            padding-top: 0;
        }
        .pricing-table a{
            text-decoration: none;
        }
    </style>
    <div class="l-content">
        <div class="pricing-tables pure-g">
            <div class="pure-u-1 pure-u-md-1-4 pricing-table-wrap">
                <div class="pricing-table pricing-table-free">
                    <a href="http://a7.pc6.com/lyx6/ssrmianliu.apk">
                        <div class="pricing-table-header">
                            <h2>
                                安卓客户端
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-4 pricing-table-wrap">
                <div class="pricing-table pricing-table-biz ">
                    <a href="http://oss.shiyu.pro/SSR4.0.exe">
                        <div class="pricing-table-header">
                            <h2>
                                PC客户端
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection



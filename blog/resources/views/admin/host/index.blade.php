<?php
    $host_class = 'pure-menu-selected';
?>
@extends('admin/layout/admin')
@section('main')
    <style>
        .pure-table th{
            background: #1f8dd6;
            color: #fff;
            font-weight: normal;
        }
        .ssr_link{
            text-decoration: none;
        }
        a.active{
            color: green;
        }
        .content{
            width: 900px;
        }
        .pure-table, table{
            width: 900px;
        }
    </style>
    <div class="content">
        <table class="pure-table pure-table-horizontal">
            <thead>
            <tr>
                <th>#</th>
                <th>链接</th>
                <th>状态</th>
                <th>创建时间</th>
                <th>修改时间</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($model as $host)
            <tr>
                <td>{{ $host->id }}</td>
                <td><div style="width:200px;overflow:hidden;padding: 0;margin: 0">
                        <a class="ssr_link" href="{{ $host->ssr }}">{{ $host->ssr }}</a></div></td>
                <td >{{ $host->status }}</td>
                <td>{{ $host->created_at }}</td>
                <td>{{ $host->updated_at }}</td>
                @if($host->status == 1)
                    <td><a href="/gabe/host/delete" data-id="{{ $host->id }}" class="confirm_delete">可用</a></td>
                    @else
                    <td><a href="/gabe/host/delete" data-id="{{ $host->id }}" class="confirm_delete">不可用</a></td>
                @endif
            </tr>
            @endforeach


            </tbody>
        </table>




        {{--{{ session('message') }}--}}
        {{--<form  method="post" action="/host/create" class="pure-form pure-form-stacked">--}}

            {{--{{ csrf_field() }}--}}
            {{--<fieldset>--}}
                {{--<div>--}}
                    {{--<input type="text" value="" name="ssr" placeholder="ssr">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<input type="submit" value="提交">--}}
                {{--</div>--}}
            {{--</fieldset>--}}
        {{--</form>--}}
    </div>

    <form action="" method="post" style="display: none;" id="opt_form">
        <input type="hidden" value="" name="id">
        {{ csrf_field() }}
    </form>
    <script>
        $(function () {

            $(".ssr_link").click(function(){

                $(".ssr_link").removeClass('active');
                $(this).addClass('active');



            })


            $(".confirm_delete").click(function(e){
                e.preventDefault();
                $("#opt_form").attr('action',$(this).attr('href'));
                $("#opt_form").find("[name=id]").val($(this).attr('data-id'));
                $("#opt_form").submit();
            })
        })
    </script>
@stop
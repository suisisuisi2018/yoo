<?php
    $host_create_class = 'pure-menu-selected';
?>

@extends('admin.layout.admin')
@section('main')

<div class="content">
    {{ session('message') }}

    <div>
        <a href="" id="ssr_link"></a>
    </div>

    <form  method="post" action="/gabe/host/save" class="pure-form pure-form-stacked">
        {{ csrf_field() }}
        <fieldset>
            <div>
                <textarea id="ssr" name="ssr" cols="55" rows="5" placeholder="ssr"></textarea>
            </div>
            <div>
                <input type="submit" value="提交">
            </div>
        </fieldset>
    </form>
</div>

<script>
    $('#ssr').bind('input propertychange', function() {
        $("#ssr_link").attr('href',$.trim($('#ssr').val()))
        $("#ssr_link").text($.trim($('#ssr').val()))
    });
</script>

@stop
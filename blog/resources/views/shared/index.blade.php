<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content='免费ssr账号,vps,翻墙,访问google' name='Keywords'>
    <meta content='免费ssr账号分享,翻墙,访问google' name='Description'>
    <title>免费ssr账号</title>
    <link rel="stylesheet" href="/css/pure-min.css">
    <link rel="stylesheet" href="/css/grids-responsive-min.css">
    <link rel="stylesheet" href="/css/blog.css">
</head>
<body>
<div class="header">

</div>


@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif


<form action="/recaptcha" method="post">
    <div class="g-recaptcha" data-sitekey="6LfqjT4UAAAAAHX-JeaDzJYWaS3sPaMR_CSIoJTE"></div>
    <button type="submit" class="btn btn-default">提交</button>
</form>
<script src='https://www.google.com/recaptcha/api.js?hl=ch'></script>
</body>
</html>



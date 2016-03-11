<?php
/**
 * @Author: itcats
 * @Date:   2016-01-16 19:01:13
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-21 11:08:48
 *
 *用户登录页面 v1
 *
 */
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>S115代理商登录系统|Power by itcats</title>
<link href=" <?php echo base_url('static/login/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href=" <?php echo base_url('static/login/css/login.css') ?>" rel="stylesheet">
</head>

<body>

<div class="login">
    <div class="login-head"><img src=" <?php echo base_url('static/login/images/head.png') ?>" class="img-circle"></div>
    <form action=" <?php echo site_url('login/login_in') ?>" method="post" class="form-login" role="form">
        <input type="text" name="username" class="form-control" placeholder="用户名" required autofocus />
        <input type="password" name="passwd" class="form-control" placeholder="密码" required />
        <button class="btn btn-lg btn-warning btn-block" type="submit">登录</button>
    </form>
</div>

</body>
</html>

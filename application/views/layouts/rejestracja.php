<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multimedialny zeszyt obserwacji dziecka</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css'); ?>">
</head>

<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="<?= site_url() ?>"><b>Multimedialny zeszyt obserwacji dziecka</b></a>
    </div>
    <!-- /.register-logo -->
    <div class="register-box-body">
        <p class="register-box-msg">Zarejestruj się</p>

        <form action="<?= site_url(uri_string()) ?>" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="imie" value="" class="form-control" placeholder="Imię" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="nazwisko" value="" class="form-control" placeholder="Nazwisko" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email"  name="email" value="" class="form-control" placeholder="Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="haslo" value="" class="form-control" placeholder="Hasło" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <label>Typ konta</label>
                <select class="form-control" name="typ">
                    <option  value="rodzic">Rodzic</option>
                    <option  value="opiekun">Opiekun</option>
                </select>
            </div>    
            <div class="row">
                <div class="col-xs-7">
                </div>
                <!-- /.col -->
                <div class="col-xs-5">
                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Zarejestruj się</button>
                </div>
                <!-- /.col -->
                <a href="<?= site_url('autoryzacja/logowanie') ?>" class="text-center">Zaloguj się</a>
            </div>
           
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
</body>
</html>

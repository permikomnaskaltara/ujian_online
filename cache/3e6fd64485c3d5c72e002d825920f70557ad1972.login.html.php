<?php /*%%SmartyHeaderCode:1406557bb70ae51f968-76850171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e6fd64485c3d5c72e002d825920f70557ad1972' => 
    array (
      0 => 'templates\\back-end\\AdminLTE-2.3.6\\login.html',
      1 => 1472529901,
      2 => 'file',
    ),
    'a4ba2197082586dcb59d10faf968e033efac5cfb' => 
    array (
      0 => 'D:\\www\\pelaporan_pelanggaran\\templates\\back-end\\AdminLTE-2.3.6\\includes\\head.html',
      1 => 1470529822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406557bb70ae51f968-76850171',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57c5862b32acb6_35617962',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c5862b32acb6_35617962')) {function content_57c5862b32acb6_35617962($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Sekolah | Login Pengguna</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
    
  <!-- Theme style -->
  <link rel="stylesheet" href="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/css/AdminLTE.min.css">
  
    <!-- iCheck -->
  <link rel="stylesheet" href="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/iCheck/square/blue.css">
    
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <a href="http://192.168.1.100/pelaporan_pelanggaran"><b>Pelaporan Pelanggaran<br /></b>Disiplin ASN</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="text-center">
      <img src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/dist/img/logo.png" height="200px" /><br /><br />
    </div>
      
    <div class="alert alert-danger ">
           
        <span>Login tidak valid!<br /></span>
          </div>
      
    <p class="login-box-msg">Isi username dan password untuk masuk.</p>

    <form class="login-form" action="login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <!-- label>
              <input type="checkbox"> Remember Me
            </label -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div -->
    <!-- /.social-auth-links -->

    <!-- a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="http://192.168.1.100/pelaporan_pelanggaran/templates/back-end/AdminLTE-2.3.6/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
<?php }} ?>

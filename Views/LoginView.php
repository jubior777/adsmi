<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/Sof.png" type="image/x-icon">

    <title>Adsmimed </title>
    <!-- Bootstrap CSS -->
    <link href="Views/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="Views/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="Views/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="Views/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="Views/css/style.css" rel="stylesheet">
    <link href="Views/css/style-responsive.css" rel="stylesheet" />
    <script src="Views/css/assets/sweet/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="Views/css/assets/sweet/sweetalert2.css">

    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="Views/js/html5shiv.js"></script>
    <script src="Views/js/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/sweetalert.js"></script>

    <![endif]-->
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="../epiz_29731168_adsmimed/Controller/AccessUsers.php">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" name="usuario"   class="form-control" placeholder="Nombre de Usuario" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password"  name="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
    </form>
</div>
<script src="js/library.js"></script>

</body>
</html>
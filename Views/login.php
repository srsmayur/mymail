<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/css/style.css" />
</head>
<body>
<div id="formlogin">
<form method="post" action="login/runLogin">
    <div class="materialContainer">
        <div class="box">

            <div class="title">LOGIN</div>

            <input type="hidden" name="token" value="<?php echo $token; ?>" />
            <div class="input">
                <input type="text" name="username" id="username" placeholder="Username">
                <span class="spin"></span>
            </div>

            <div class="input">
                <input type="password" name="password" id="password" placeholder="Password">
                <span class="spin"></span>
            </div>

            <div class="button login">
                <button><span>GO</span> <i class="fa fa-check"></i></button>
            </div>

            <a href="" class="pass-forgot">Forgot your password?</a>
            <a href="#" class="pass-forgot">REGISTER</a>

        </div>
    </div>
</form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
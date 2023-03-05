<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="media/css/users.css">
    <link rel="stylesheet" href="media/admin/css/admin.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" /> 
</head>

<body>
    <section class="hold-transition login-page row justify-content-center align-items-center">
        <div class="login-box col-3">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b> The gioi do choi</a>
            </div>

            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form name="adminlogin" action="<?php echo vendor_app_util::url(
                                        array(
                                            'area' => 'admin',
                                            'ctl' => 'login'
                                        )
                                    ); ?>" method="POST">
                        <div class="input-group mb-3">
                            <input name="data[<?php echo $this->controller; ?>][email]" type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="data[<?php echo $this->controller; ?>][password]" type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button name="btn_submit" type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>

                        </div>
                    </form>
                    <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                    </div>

                    <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="register.html" class="text-center">Register a new membership</a>
                    </p>
                </div>

            </div>
        </div>
    </section>


    <script type="text/javascript" src="vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
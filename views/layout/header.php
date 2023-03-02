<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The gioi choi do</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Test ">
    <meta name="author" content="pacificsoftdev@gmail.com">
    <link rel="icon" type="image/x-icon" href="media/img/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo LibsREL; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo RootREL; ?>media/css/main.css" rel="stylesheet">
    <?php echo vendor_html_helper::_cssHeader(); ?>
</head>

<body>
    <header class="bg-dark">
        <section class="container">
            <nav class="navbar navbar-expand-md navbar-info d-flex flex-column">
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="<?php echo vendor_app_util::url('/'); ?>">
                        <img src="media/img/logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="<?php echo vendor_app_util::url('/'); ?>">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($this->categories as $k) { ?>
                                        <li><a class="dropdown-item" href="#"><?php echo $k; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>

                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-warning" type="submit">Search</button>
                        </form>

                        <div class="btn-login-group me-3 ms-5 d-flex align-items-center">
                            <?php if (!empty($_SESSION['auth'])) { ?>
                                <span class="me-2 text-light d-block">
                                    welcome,
                                    <a class="text-warning" href="<?php echo vendor_app_util::url(['ctl' => 'users']); ?>"><?php echo $_SESSION['auth']['name'] ?></a>
                                </span>
                                <a href="<?php echo vendor_app_util::url(['ctl' => 'users', 'act' => 'logout']); ?>" class="btn btn-custom-auth text-dark">Logout</a>
                                <?php if ($_SESSION['auth']['roles'] == '1') { ?>
                                    <a href="<?php echo vendor_app_util::url(['area' => 'admin', 'ctl' => 'login']); ?>" class="btn btn-custom-auth text-dark ms-2">Admin Login</a>
                                <?php } ?>
                            <?php } else { ?>
                                <a href="<?php echo vendor_app_util::url(['ctl' => 'login']); ?>" class="btn btn-custom-auth text-dark">Login</a>
                                <a href="<?php echo vendor_app_util::url(['ctl' => 'users', 'act' => 'signup']); ?>" class="btn btn-custom-auth text-dark ms-2">Sign up</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">

                </div>
            </nav>
        </section>
    </header>

    <main>
        <div class="container">
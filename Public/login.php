<?php include('includes/header.php') ?>
<title>EcoCyrus || Login</title>
<link rel="stylesheet" href="css/login.css">

</head>

<body>
    <!-- nav -->
    <?php include(INCLUDES_PATH . 'nav.php') ?>

    <?php
    if ($session->isLoggedIn()) redirect("admin");
    $message = "";

    if (isPost('login')) {
        $user = $database->lw_clean($_POST['user']);
        $password = $database->lw_clean($_POST['password']);

        $encrypted_password = sha1($password);

        if (Login::login_user($user, $encrypted_password)) {

            $message = "<div class='error'>Logged In</div>";
            // redirect("admin");
        } else {
            // session->error
            $message = "<div class='error'>Wrong password or username</div>";
        }
    }


    ?>

    <section class="login">
        <div class="login-container">
            <div class="login-photo">
                <i class="fas fa-user-circle"></i>
            </div>
            <form action="login.php" method="post" class="login-form">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fas fa-user "></i>
                    </div>
                    <input class="form-input" type="text" name="user" placeholder="Email or Username" required autocomplete="TRUE">
                </div>
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fas fa-key "></i>
                    </div>
                    <input class="form-input" type="password" name="password" id="pass" placeholder="Password" required>
                </div>
                <input class="form-submit" type="submit" value="Login" name="login">
            </form>
            <?php echo $message ?>
            <div class="info">
                <a href="#" class="forgot">Forgot Password?</a><br>
                <p>Don't have an account? <a href="#">Request Collaboration!</a></p>
            </div>
        </div>
    </section>


    <!-- chat bubble -->
    <?php include(INCLUDES_PATH . 'chat_bubble.php') ?>
    <!-- footer -->
    <?php include(INCLUDES_PATH . 'footer.php') ?>
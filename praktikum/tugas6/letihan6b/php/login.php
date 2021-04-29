<?php
session_start();
require 'function.php';
// Melakukan pengecekan apakah user sudah login jika sudah akan langsung di arahkan ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// login

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //mencocokan username dan password
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
        }
        if (hash('sha256', $row['id']) == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}

// registrasi
require 'registrasi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

<body>
    <div class="form">

        <ul class="tab-group">
            <li class="tab active"><a href="#signup">Sign Up</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
        </ul>

        <div class="tab-content">
            <div id="signup">
                <h1>Sign Up for Free</h1>

                <form method="post">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label for="firstname">
                                First Name<span class="req">*</span>
                            </label>
                            <input type="text" name="firstname" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label for="lastname">
                                Last Name<span class="req">*</span>
                            </label>
                            <input type="text" name="lastname" required autocomplete="off" />
                        </div>
                    </div>
                    <div class="field-wrap">
                        <label for="username">
                            Username<span class="req">*</span>
                        </label>
                        <input type="text" name="username" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label for="email">
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" name="email" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label for="password">
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" required autocomplete="off" />
                    </div>
                    <div class="field-wrap">
                        <div class="remember">
                            <label for="remember">Remember me</label>
                            <input type="checkbox" checked="checked" name="remember">
                        </div>
                    </div>

                    <button type="submit" name="register" class="button button-block" />Sign Up</button>

                </form>

            </div>

            <div id="login">
                <h1>Welcome Back!</h1>

                <form method="post">
                    <?php if (isset($error)) : ?>
                        <p style="color: red; font-style: italic;">Username atau Password anda salah</p>
                    <?php endif; ?>


                    <div class="field-wrap">
                        <label>
                            Username<span class="req">*</span>
                        </label>
                        <input type="text" name="username" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label for="password">
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" required autocomplete="off" />
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <div class="remember">
                                <label for="remember">Remember me</label>
                                <input type="checkbox" checked="checked" name="remember">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="field-wrap">
                            <p class="forgot"><a href="#">Forgot Password?</a></p>
                        </div>
                    </div>

                    <button type="submit" name="login" class="button button-block" />Log In</button>

                </form>

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/login.js"></script>
</body>

</html>
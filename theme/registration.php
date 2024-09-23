<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>
    <link rel="stylesheet" href="styles.css" />
    <script>
        function showAlert(message, type) {
            alert(message);
        }
    </script>
</head>
<body>
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <section>
        <div class="container" id="container">
            <?php
            session_start();
            if (isset($_SESSION['message']) && isset($_SESSION['message_type'])) {
                $message = $_SESSION['message'];
                $message_type = $_SESSION['message_type'];
                echo "<script>showAlert('$message', '$message_type');</script>";
                unset($_SESSION['message']);
                unset($_SESSION['message_type']);
            }
            ?>
            <div class="form-container sign-up-container">
                <form action="logreg.php" method="POST" onsubmit="return validateSignUpForm()" autocomplete="off">
                    <h1>Sign Up</h1>
                    <div class="social-container">
                        <a href="#" target="_blank" class="social"><i class="fab fa-google"></i></a>
                    </div>
                    <span>Or use your Email for registration</span>
                    <input type="text" name="name" placeholder="Name" required  autocomplete="off" />
                    <input type="email" name="email" placeholder="Email" required autocomplete="off" />
                    <input type="password" name="password" placeholder="Password" required autocomplete="off" />
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required autocomplete="off" />
                    <input type="text" name="mobile" placeholder="Mobile Number" required autocomplete="off" />
                    <button style="margin-top: 9px" type="submit">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="logreg.php" method="POST" onsubmit="return validateSignInForm()" autocomplete="off">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" target="_blank" class="social"><i class="fab fa-google"></i></a>
                    </div>
                    <span>Or sign in using E-Mail Address</span>
                    <input type="email" name="login_email" placeholder="Email" required autocomplete="off" />
                    <input type="password" name="login_password" placeholder="Password" required autocomplete="off" />
                    <a href="#">Forgot your password?</a>
                    <button type="submit">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Log in</h1>
                        <p>Sign in here if you already have an account 
                            <img src="http://localhost/quixlab-bootstrap-main%20(3)/quixlab-bootstrap-main/theme/images/logo%20rssmart.png" alt="" style="height: 160px" class="mt-5">
                        </p>
                        <button class="ghost mt-2" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Create, Account!</h1>
                        <p>Sign up if you still don't have an account 
                            <img src="http://localhost/quixlab-bootstrap-main%20(3)/quixlab-bootstrap-main/theme/images/logo%20rssmart.png" alt="" style="height: 160px"> </p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>
    <script src="script.js"></script>
</body>
</html>

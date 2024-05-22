<?php include("inc/loginheader.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Jayden" content="North Pole FM">
    <title>Login / North Pole FM</title>
</head>
<body>
<div class="container" id="container">
        <div class="form-container  sign-up-container">
            <form action="#">
                <div class="header">Sign Up</div>
                <div class="social__media__container">
                    <a href="#" target="_blank" class="social codepen">
                        <i class="fa fa-github" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="social google">
                        <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                    </a>
                    <a href="#" target="_blank" class="social twitter">

                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
                <span class="under__social">
                    <a href="#" class="link signin-link">or use your email for registration
                    </a>
                </span>

                <div class="button-input-group">
                    <div class="group input-group">
                        <input type="text" placeholder="Name" required>
                    </div>
                    <div class="group input-group">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="group input-group">
                        <input type="password" placeholder="Password" required pattern=".{8,}">
                    </div>
                    <div class="alert-text signup__alert">
                        <span class="help__text">At least 8 character</span>
                    </div>
                    <div class="group button-group">
                        <button class="signup-btn" onclick="return false;">Sign Up</button>
                    </div>
                    <div class="log__in___adata">
                        <h5 class="" onclick="myFunction___ad()"> LogIn this web</h5>
                    </div>
                </div>

            </form>
        </div>

        <div class="form-container  sign-in-container" id="sign__in">
            <form action="#">
                <div class="header">Sign In</div>
                <div class="social__media__container">
                    <a href="#" target="_blank" class="social codepen">
                        <i class="fa fa-github" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="social google">
                        <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                    </a>
                    <a href="#" target="_blank" class="social twitter">

                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
                <span class="under__social">
                    <a href="#" class="link signup-link">or use your account</a>
                </span>

                <div class="button-input-group">
                    <div class="group input-group">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="group input-group">
                        <input type="password" placeholder="Password" required pattern=".{8,}">
                    </div>
                    <div class="alert-text signup__alert">
                        <span class="help__text">At least 8 character</span>
                    </div>
                    <div class="form-link forgot">
                        <a href="#" class="login-link">Forgot your password?</a>
                    </div>
                    <div class="group button-group">
                        <button class="signin-btn" onclick="return false;">Sign in</button>
                    </div>

                    <div class="log__in___adata">
                        <h5 class="" onclick="myFunction___hi()"> SignUp this web</h5>
                    </div>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back! Jayden</h1>
                    <p>Please login using your personal info</p>

                    <div class="group button-group">
                        <button class="ghost" id="signIn">Sign in</button>
                    </div>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>Hello, User!</h1>
                    <p>If you don't have an account yet, sign up here</p>

                    <div class="group button-group">
                        <button class="ghost" id="signUp">Sign up</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div id="bg" style="background-image:url(./media/img/background.avif);" class="bg"></div>
</body>
</html>


<?php include("inc/footer.php"); ?>
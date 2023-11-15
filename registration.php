<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave - Login/Signup</title>
    <link rel="stylesheet" href="registration.css">
    <script src="https://kit.fontawesome.com/4f40e8708a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="square" style="--i:0;"></div>
        <div class="square" style="--i:1;"></div>
        <div class="square" style="--i:2;"></div>
        <div class="square" style="--i:3;"></div>
        <div class="square" style="--i:4;"></div>
        <div class="square" style="--i:6;"></div>
        <div class="square" style="--i:7;"></div>
        <div class="square" style="--i:8;"></div>
        <div class="square" style="--i:9;"></div>
        <div class="square" style="--i:10;"></div>
        <div class="container_form">
            <div class="login-form">
                <h1>sign in</h1>
                
                <form action="">
                    <div class="input-group">
                        <input required="" type="text" name="Email" autocomplete="off" class="input">
                        <label class="email-label">Email</label>
                    </div>
                    <div class="input-group">
                        <input required="" type="password" name="Password" autocomplete="off" class="input">
                        <label class="password-label">Password</label>
                    </div>
                    <div class="input-group">
                        <label class="checkbox-container">
                            <input type="checkbox" name="agreement" class="checkbox">
                            <div class="checkmark"></div>
                        </label>
                        <p class="checkbox-label">By continuing, you agree to WaveM Company’s
                            <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                        </p>
                    </div>
                    <div class="input-group">
                        <input type="submit" value="Sign In">
                    </div>
                </form>

                <div class="linker">
                    <p>or continue with</p>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                </div>

                <div class="switch" onclick="switching()">
                    Create an account <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <div class="register-form active">
                <h1>sign up</h1>

                <form action="">
                    <div class="input-group">
                        <input required="" type="text" name="Email" autocomplete="off" class="input">
                        <label class="email-label">Email</label>
                    </div>
                    <div class="input-group">
                        <input required="" type="password" name="Password" autocomplete="off" class="input">
                        <label class="password-label">Password</label>
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="Username" autocomplete="off" class="input">
                        <label class="username-label">Username</label>
                    </div>
                    <div class="input-group">
                        <input required="" type="date" name="Birthday" autocomplete="off" class="input">
                        <label class="birthday-label">Birthday</label>
                    </div>
                    <div class="input-group">
                        <input type="submit" value="Sign Up">
                    </div>
                </form>

                <div class="linker">
                    <p>or continue with</p>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                </div>

                <div class="switch-2" onclick="switching()">
                <i class="fa-solid fa-arrow-left"></i> Already have an account
                </div>
            </div>
        </div>

        <div class="container_logo">
            <img src="images/logo2.svg">
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>

        let container = document.querySelector('.container');
        let login_form = document.querySelector('.login-form');
        let register_form = document.querySelector('.register-form');

        function switching() {
            container.classList.toggle('active');
            login_form.classList.toggle('active');
            register_form.classList.toggle('active');
        }

    </script>
</body>
</html>
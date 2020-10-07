<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Iqbal Homeo Clinic - Reset Password</title>
</head>
<body>
<div class="overlay">
        <!-- LOGN IN FORM by Omar Dsoky -->
        <form action="/CMS/login.php" method="post">
            <!--   con = Container  for items in the form-->
            <div class="con">
                <!--     Start  header Content  -->
                <header class="head-form">
                    <h2>Reselt Password</h2>
                    <p>Reset password requires your old password</p>
                    <!--     A welcome message or an explanation of the login form -->
                </header>
                <!--     End  header Content  -->
                <br>
                <div class="field-set">

                    <!--   user name -->
                    <span class="input-item">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <!--   user name Input-->
                    <input class="form-input" id="txt-input" type="text" placeholder="@UserName" name="user_name" required>

                    <br>

                    <!--   Password -->

                    <span class="input-item">
                        <i class="fa fa-key"></i>
                    </span>
                    <!--   Password Input-->
                    <input class="form-input" type="password" placeholder="Password" id="pwd" name="password" required>

                    <!--      Show/hide password  -->
                    <span>
                        <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
                    </span>


                    <br>
                    <!--        buttons -->
                    <!--      button LogIn -->
                    <button class="log-in"> Log In </button>
                </div>

                <!--   other buttons -->
                <!-- <div class="other">
                    <button class="btn submits frgt-pass">Forgot Password</button>
                    <button class="btn submits sign-up">Sign Up
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </button>
                </div> -->
            </div>

            <!-- End Form -->
        </form>
    </div>
</body>
</html>
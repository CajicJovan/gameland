<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "inc/head.php";
    ?>
</head>
<body>
    <?php
    require_once "inc/preload.php";
    ?>

    <?php
    require_once "inc/nav.php";
    ?>

    <div class="homepage-slider">
        <div class="single-homepage-slider homepage-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 offset-lg-1 offset-xl-0 regMid">
                        <h3 class="registerNaslov">Registration</h3>
                        <form action="#" class="contact-form" method="POST">
                            <label for="firstName" class="labelLogin">First Name: </label>
                            <div class="form-group">
                                <input type="text" id="firstname" name="firstName">
                                <div id="firstNameError"></div>
                            </div>
                            <label for="lastName" class="labelLogin">Last Name: </label>
                            <div class="form-group">
                                <input type="text" id="lastname" name="lastName">
                                <div id="lastNameError"></div>
                            </div>
                            <label for="email" class="labelLogin">Email: </label>
                            <div class="form-group">
                                <input type="email" id="mail" name="email">
                                <div id="emailError"></div>
                            </div>
                            <label for="usernameRegister" class="labelLogin">Username: </label>
                            <div class="form-group">
                                <input type="text" id="userRegister" name="usernameRegister">
                                <div id="userError"></div>
                            </div>
                            <label for="passwordRegister" class="labelLogin">Password: </label>
                            <div class="form-group">
                                <input type="password" id="passRegister" name="passwordRegister">
                                <div id="passError"></div>
                            </div>
                            <label for="passwordConfirm" class="labelLogin">Confirm Password: </label>
                            <div class="form-group">
                                <input type="password" id="passConfirm" name="passwordConfirm">
                                <div id="passConfError"></div>
                            </div>
                            <div class="form-group">
                                <input type="button" id="registerButton" value="Register">
                                <input type="reset" id="resetButton" name="resetButton" value="Reset">
                            </div>
                            <h5 class="text-white">Already have an account? Log in <a href="logovanje.php">here</a></h5>
                        </form>
                        <div id="odgovor"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once "inc/footer.php";
    require_once "inc/scripts.php";
    ?>

</body>

</html>
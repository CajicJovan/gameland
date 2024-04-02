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
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="homepage-slider">
        <div class="single-homepage-slider homepage-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <h3>Log in</h3>
                                <form action="">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" id="tbLogUsername" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Lozinka</label>
                                        <input type="password" id="tbLogPassword" class="form-control" />
                                    </div>
                                    <input type="button" value="Login" id="btnLogin" class="btn btn-primary" />
                                    <span id="login-error" style="color:red;"></span>
                                </form>
                            </div>
                        </div>

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
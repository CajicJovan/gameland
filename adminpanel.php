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
                    <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <button id='answers' class='font-weight-bold btn bg-light text-dark'>answers</button>
                                <button id='products' class='font-weight-bold btn bg-light text-dark'>products</button>
                                <button id='contact' class='font-weight-bold btn bg-light text-dark'>contact</button>
                                <button id='kategorija' class='font-weight-bold btn bg-light text-dark'>category</button>
                                <button id='slike' class='font-weight-bold btn bg-light text-dark'>images</button>
                                <button id='menu' class='font-weight-bold btn bg-light text-dark'>menu</button>
                                <button id='roles' class='font-weight-bold btn bg-light text-dark'>roles</button>
                                <button id='survey' class='font-weight-bold btn bg-light text-dark'>survey</button>
                                <button id='users' class='font-weight-bold btn bg-light text-dark'>users</button>
                            </div>
                            <div class="col-lg-11">
                                <table id='table' class='table'>
                                </table>
                                <h5 class='text-success text-center p-3 font-weight-bold' id='success'></h5>
                                <h5 class='text-danger text-center p-3 font-weight-bold' id='error'></h5>
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
<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- TEMPLATE META -->
        <meta name="name" content="AIOB">
        <meta name="title" content="AIOB - All Converters In One Platform">

        <!-- WEBPAGE TITLE -->
        <title>AIOB - All In One Bro</title>

        <!-- FAVICON -->
        <link rel="icon" href="assets/images/favicon.png">

        <!-- FONTS -->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="assets/fonts/icofont/icofont.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome/fontawesome.min.css">

        <!-- VENDOR -->
        <link rel="stylesheet" href="assets/vendor/venobox/venobox.min.css">
        <link rel="stylesheet" href="assets/vendor/slickslider/slick.min.css">
        <link rel="stylesheet" href="assets/vendor/niceselect/nice-select.min.css">
        <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/custom.css">
        <link rel="stylesheet" href="assets/css/user-auth.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <style>
  :root {
    --primary: #0e76a8;
   }
   </style>
    <body>
        <!--=====================================
                    USER FORM PART START
        =======================================-->
        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-6">
                        <div class="user-form-logo">
                            <a href="index.html"><h3>AllinOneBro</h3></a>
                        </div>
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>Join Now!</h2>
                                <p>Setup A New Account In A Minute</p>
                            </div>
                            <div class="user-form-group">
                                <!-- <ul class="user-form-social">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Join with facebook</a></li>
                                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>Join with twitter</a></li>
                                    <li><a href="#" class="google"><i class="fab fa-google"></i>Join with google</a></li>
                                    <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>Join with instagram</a></li>
                                </ul>
                                <div class="user-form-divider">
                                    <p>or</p>
                                </div> -->
                                <form class="user-form" action="register.php" method="post">
                                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Enter your Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email"  value="<?php echo $email; ?>" class="form-control" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  name="password"  value="<?php echo $password; ?>" class="form-control" placeholder="Enter your password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  name="passwordConf"  value="<?php echo $passwordConf; ?>" class="form-control" placeholder="Enter repeat password">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="check">
                                        <label class="form-check-label" for="check">Accept all the <a href="#">Terms & Conditions</a></label>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit" name="register-btn">register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="user-form-remind">
                            <p>Already Have An Account?<a href="login.php">login here</a></p>
                        </div>
                        <div class="user-form-footer">
                            <p>VectorCrop | &COPY; Copyright by <a href="#">VectorCrop</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    USER FORM PART END
        =======================================-->


        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="assets/vendor/bootstrap/jquery-1.12.4.min.js"></script>
        <script src="assets/vendor/bootstrap/popper.min.js"></script>
        <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="assets/vendor/countdown/countdown.min.js"></script>
        <script src="assets/vendor/niceselect/nice-select.min.js"></script>
        <script src="assets/vendor/slickslider/slick.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>

        <!-- CUSTOM -->
        <script src="assets/js/nice-select.js"></script>
        <script src="assets/js/countdown.js"></script>
        <script src="assets/js/accordion.js"></script>
        <script src="assets/js/venobox.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/main.js"></script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>
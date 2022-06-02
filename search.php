<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Most Populer Converters';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

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
        <link rel="stylesheet" href="assets/css/index.css">



    </head>
    <style>
  :root {
    --primary: #0e76a8;
   }

   .btn-inline {
    color: #000000;
    background: #ffffff;
}

   .slick-initialized .slick-slide {
    display: block;
}
.bg2 {
    background: #c8e6ff;
}
.banner-wrap {
    border-radius: 5px;
    padding: 42px 60px;
    background: var(--white);
    position: relative;
    z-index: 1;
}
.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
.banner-image img {
    width: 100%;
}

.home-grid-slider img {
    width: 100%;
    border-radius: 8px;
}
.slick-slide img {
    display: block;
}
img {
    vertical-align: middle;
}
img, svg {
    vertical-align: middle;
}

    </style>


    <body>
         <!--=====================================
                    HEADER PART START
        =======================================-->
        <header class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-media-group">
                        <button class="header-user"><img src="assets/images/user.png" alt="user"></button>
                        <!-- <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                        <h3>AllinOneBro</h3>

                        <button class="header-src"><i class="fas fa-search"></i></button>
                    </div>

                    <a href="index.php" class="header-logo">
                        <!-- <img src="assets/images/logo.png" alt="logo"> -->
                        <h3>AllinOneBro</h3>
                    </a>
                    <?php if (isset($_SESSION['id'])): ?>
                    <a href="login.php" class="header-widget" title="My Account">
                        <img src="assets/images/user.png" alt="user">
                        <span>
                 <nav class="navbar-part">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-content">
                            <ul class="navbar-list">
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link" href="#"><?php echo $_SESSION['username']; ?></a>
                                    <ul class="dropdown-position-list">
                                    <li><a href="account.php"><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> Account</a></li>
                                        <li><a href="logout.php">
                                            
                                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px;" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg> Logout</a><li>
                                    </ul>
                                </li>                        
                            </ul>
                        </div>
                    </div>
                </div>
        </nav>
                    
                    </span>
                    </a>
                    <?php else: ?>
                        <a href="login.php" class="header-widget" title="My Account">
                        <img src="assets/images/user.png" alt="user">
                        <span>   
                <nav class="navbar-part">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-content">
                            <ul class="navbar-list">
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link" href="#">Login</a>
                                    <ul class="dropdown-position-list">
                                    <li><a href="login.php"><svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>Login</a></li>
                                        <li><a href="register.php"><svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>Register</a><li>
                                    </ul>
                                </li>                        
                            </ul>
                        </div>
                    </div>
                </div>
        </nav>
    </span>
                    </a>
                    <?php endif; ?>

                    <form class="header-form" action="search.php" method="post">
                        <input type="text"  name="search-term"  placeholder="Search anything...">
                        <button><i class="fas fa-search"></i></button>
                    </form>

                    <div class="header-widget-group">
                        <!-- <a href="compare.html" class="header-widget" title="Compare List">
                            <i class="fas fa-random"></i>
                            <sup>0</sup>
                        </a> -->
                        <a href="wishlist.html" class="header-widget" title="Wishlist">
                            <i class="fas fa-heart"></i>
                            <sup>0</sup>
                        </a>
                        <!-- <button class="header-widget header-cart" title="Cartlist">
                            <i class="fas fa-shopping-basket"></i>
                            <sup>9+</sup>
                            <span>total price<small>$345.00</small></span>
                        </button> -->
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================
                    HEADER PART END
        =======================================-->

     




        <!--=====================================
                  NAV SIDEBAR PART START
        =======================================-->
        <aside class="nav-sidebar">
            <div class="nav-header">
                <a href="index.php">AllinOneBro</a>
                <button class="nav-close"><i class="icofont-close"></i></button>
            </div>
            <div class="nav-content">
                <div class="nav-btn">
                    <a href="login.php" class="btn btn-inline">
                        <i class="fa fa-unlock-alt"></i>
                        <span>Login Now</span>
                    </a>
                </div>
          
            
                <ul class="nav-list">
                <li><a class="nav-link" href="index.php"><i class="icofont-home"></i>Home</a></li>
                   
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>Category</a>
                        <ul class="dropdown-list">
                        <?php foreach ($topics as $key => $topic): ?>

                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>

                        <?php endforeach; ?>

                        </ul>
                    </li>
                   
                    <li><a class="nav-link" href="about.php"><i class="icofont-info-circle"></i>about us</a></li>
                    <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
                    <li><a class="nav-link" href="#contact"><i class="icofont-contacts"></i>contact us</a></li>
                    <li><a class="nav-link" href="logout.php"><i class="icofont-logout"></i>logout</a></li>
                </ul>
                
                <div class="nav-footer">
                    <p>All Rights Reserved by <a href="#">VectorCrop</a></p>
                </div>
            </div>
        </aside>
        <!--=====================================
                  NAV SIDEBAR PART END
        =======================================-->


    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    


      

      

        <!--=====================================
                    RECENT PART START
        =======================================-->
        <br><br>
        <section id="search" class="section recent-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2><?php echo $postsTitle ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                <?php foreach ($posts as $post): ?>
                    <div class="col">
                        
                        <div class="product-card" style="background-color: <?php echo $post['color']; ?>;">
                               <div class="product-media">
                            
                                <button class="product-wish wish">
                                    <i class="fas fa-heart" ></i>
                                </button>

                                <a href="<?php echo $post['link']; ?>" target="_blank"> 
                                <div class="product-image">
                                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" style="border-radius: 3%;" alt="product"></div></a>
                            </div>
                            <div>    
                                                
                                <h6 class="product-name">
                                <center><a style="margin-bottom: 12px;" href="<?php echo $post['link']; ?>" target="_blank"> <div style="margin-top: 12px; color : white;"><?php echo $post['title']; ?><br>by <?php echo html_entity_decode($post['body']); ?></div></a></center>
                                </h6>
                            </div>
                        </div>


                    </div>
                    <?php endforeach; ?>


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>show more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    RECENT PART END
        =======================================-->

  <!--=====================================
                    SUGGEST PART START
        =======================================-->
        <section class="section suggest-part">
            <div class="container">
            <div class="">
                            <h3>Categories</h3><br>
                        </div>
                <ul class="suggest-slider slider-arrow">


                <?php foreach ($topics as $key => $topic): ?>



                    <li>
                        <a class="suggest-card" href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>">
                            <img src="<?php echo BASE_URL . '/assets/img/uploaded/' . $topic['image']; ?>" alt="suggest">
                        </a>
                    </li>

                    <?php endforeach; ?>

                </ul>
            </div>
        </section>
        <!--=====================================
                    SUGGEST PART END
        =======================================-->



    

   <!--=====================================
                     FOOTER PART START
        =======================================-->
        <footer id="contact" class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-6">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#">
                                <!-- <img src="assets/images/logo.png" alt="logo"> -->
                                <h3>AllinOneBro.</h3>
                            </a>
                            <p>Every modern problem has a modern solution. We are introducing our solutions for your daily needs to became more powerful and essential</p>
                            <ul class="footer-social">
                                <!-- <li><a class="icofont-facebook" href="#"></a></li>
                                <li><a class="icofont-twitter" href="#"></a></li>
                                <li><a class="icofont-linkedin" href="#"></a></li>
                                <li><a class="icofont-instagram" href="#"></a></li>
                                <li><a class="icofont-pinterest" href="#"></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="footer-widget contact">
                            <h3 class="footer-title">contact us</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <span>thevectorcrop@gmail.com</span>
                                        <span>msb.com001@gmail.com</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <span>+91 9947 154 691</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <p>Calicut, Kerala, India</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                            <p class="footer-copytext">&copy;  All Copyrights Reserved by <a target="_blank" href="https://www.vectorcrop.com">VectorCrop</a></p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
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







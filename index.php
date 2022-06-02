<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Most Populer Converters';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for '" . $_GET['name'] . "'";
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
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    

   <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="banner-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-grid-slider slider-dots">
                                    <div class="banner-wrap bg1" style="background-color: #0064FF;">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-content">
                                                    <h3 style="color: white;">We are introducing all converter in one for your daily needs. </h3><br>
                                                    <a href="#" class="btn btn-sm btn-inline">
                                                        <i class="fas fa-search"></i>
                                                        <span>Browse now</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-image">
                                                    <!-- <img src="assets/img/b1.svg" width="50%" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="banner-wrap bg3">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-content">
                                                    <h3>This is the platform that you need everthing for your daily life.</h3><br>
                                                    <a href="#" class="btn btn-sm btn-inline">
                                                        <i class="fas fa-search"></i>
                                                        <span>Browse now</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-image">
                                                    <!-- <img src="images/home/index/03.png" alt=""> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
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
                    RECENT PART START
        =======================================-->
        <section class="section recent-part">
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
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>show more</span>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!--=====================================
                    RECENT PART END
        =======================================-->




      


        <!--=====================================
                    NEWSLETTER PART START
        =======================================-->
        <section class="news-part" style="background: no-repeat center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 col-xl-7">
                        <div class="news-text">
                            <h2>Get Touch With US</h2>
                            <p>We are the best in people who need helps</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <form class="news-form">
                            <input type="text" placeholder="Enter Your Email Address">
                            <button><span><i class="icofont-ui-email"></i>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NEWSLETTER PART END
        =======================================-->


        <!--=====================================
                    INTRO PART START
        =======================================-->
        <!-- <section class="intro-part">
            <div class="container">
                <div class="row intro-content">
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="intro-content">
                                <h5>free home delivery</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="intro-content">
                                <h5>instant return policy</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="intro-content">
                                <h5>quick support system</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="intro-content">
                                <h5>secure payment way</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--=====================================
                    INTRO PART END
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







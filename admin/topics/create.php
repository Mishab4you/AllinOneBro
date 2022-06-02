<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder">

        <!-- TEMPLATE META -->
        <meta name="name" content="Greeny">
        <meta name="title" content="Greeny - eCommerce HTML Template">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, webshop, farm, grocery, natural, online store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- WEBPAGE TITLE -->
        <title>Standard Home - Greeny</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
    

        <!-- FAVICON -->
        <link rel="icon" href="../../assets/images/favicon.png">

        <!-- FONTS -->
        <link rel="stylesheet" href="../../assets/fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="../../assets/fonts/icofont/icofont.min.css">
        <link rel="stylesheet" href="../../assets/fonts/fontawesome/fontawesome.min.css">

        <!-- VENDOR -->
        <link rel="stylesheet" href="../../assets/vendor/venobox/venobox.min.css">
        <link rel="stylesheet" href="../../assets/vendor/slickslider/slick.min.css">
        <link rel="stylesheet" href="../../assets/vendor/niceselect/nice-select.min.css">
        <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="../../assets/css/main.css">
        <link rel="stylesheet" href="../../assets/css/home-standard.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <style>
    .btn {
    border: none;
    font-size: 13px;
    align-items: center;
    width: 100%;
    margin-bottom: 15px;
    font-weight: 500;
  
    border-radius: 6px;
    border: 1px solid #ffffff;
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
                        <button class="header-user"><img src="../../assets/images/user.png" alt="user"></button>
                        <!-- <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                        <h3>AllinOneBro</h3>

                        <button class="header-src"><i class="fas fa-search"></i></button>
                    </div>

                    <a href="index.html" class="header-logo">
                        <!-- <img src="assets/images/logo.png" alt="logo"> -->
                        <h3>AllinOneBro</h3>
                    </a>
                    <?php if (isset($_SESSION['id'])): ?>
                    <a href="login.html" class="header-widget" title="My Account">
                        <img src="../../assets/images/user.png" alt="user">
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
                                        <li><a href="<?php echo BASE_URL . '/logout.php'; ?>">
                                            
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
                        <img src="../../assets/images/user.png" alt="user">
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
                <a href="#"><h3>AIOB - ADMIN</h3></a>
                <button class="nav-close"><i class="icofont-close"></i></button>
            </div>
            <div class="nav-content">
             
             
             
            <ul class="nav-list">
                    <li>
                        <a class="nav-link dropdown-link" href="<?php echo BASE_URL . '/admin/dashboard.php'; ?>"><i class="icofont-home"></i>Dashboard</a>
                       
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="<?php echo BASE_URL . '/admin/posts/index.php'; ?>"> <i class="fa fa-plus" aria-hidden="true"></i> Posts</a>
                       
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>">   <i class="fa fa-bars" aria-hidden="true"></i> Category</a>
                       
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="<?php echo BASE_URL . '/admin/users/index.php'; ?>">  <i class="fa fa-user-circle" aria-hidden="true"></i> Users</a>
                        
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#">  <i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                        
                    </li>
                    <li><a class="nav-link" href="<?php echo BASE_URL . '/logout.php'; ?>"><i class="icofont-logout"></i>logout</a></li>
                </ul>
            <br>
                <div class="nav-footer">
                    <p>All Rights Reserved by <a href="#">VectorCrop</a></p>
                </div>
            </div>
        </aside>
        <!--=====================================
                  NAV SIDEBAR PART END
        =======================================-->


       




        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="banner-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="banner-category">
                            <div class="banner-category-head">
                                <i class="fas fa-bars"></i>
                                <span>top categories</span>
                            </div>
                            <ul class="banner-category-list">
                            <li class="banner-category-item">
                                    <a href="<?php echo BASE_URL . '/admin/dashboard.php'; ?>">
                                    <i class="icofont-home"></i>                                        <span>Dashboard</span>
                                    </a>
                                
                                </li>
                                <li class="banner-category-item">
                                    <a href="<?php echo BASE_URL . '/admin/posts/index.php'; ?>">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                        <span>Posts</span>
                                    </a>
                                
                                </li>
                                <li class="banner-category-item">
                                    <a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                        <span>Category</span>
                                    </a>
                                
                                </li>
                                <li class="banner-category-item">
                                    <a href="<?php echo BASE_URL . '/admin/users/index.php'; ?>">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                        <span>Users</span>
                                    </a>
                                
                                </li>
                                <li class="banner-category-item">
                                    <a href="settings.php">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span>Settings</span>
                                    </a>
                                
                                </li>
                                <li class="banner-category-item">
                                    <a href="<?php echo BASE_URL . '/logout.php'; ?>">
                                    <i class="icofont-logout"></i>
                                        <span>Logout</span>
                                    </a>
                                
                                </li>

                             </ul>
                        </div>
                    </div>

                    <div class="col-lg-9">
                    <section class="section feature-part">
            <div class="container">
                <h3><a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>"><i class="fa fa-arrow-left" style="margin-right: 15px;" aria-hidden="true"></i></a>
 Add New Item</h3><br>
            <form  action="create.php" method="post" enctype="multipart/form-data">
            <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

<div class="card">
<div class="container">
  <div class="form-row">
  <div class="form-group"><br>
    <label for="inputAddress">Title</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name ?>" id="inputAddress" >
  </div>
    <div class="form-group">
    <label for="inputAddress">Description</label>
    <input type="text" class="form-control" name="description"  value="<?php echo $description ?>" id="inputAddress" >
  </div>
  </div>
  <div class="form-row">
    
 
  <div class="form-group">
    <label for="inputAddress2">Image</label>
    <input type="file" class="form-control" name="image" value="<?php echo $image ?>" id="inputAddress2" >
  </div>

    
  <button type="submit"  name="add-topic" class="btn btn-primary">Submit</button>
  </div>
 
</form>
</div>
            
</div>
        </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


      


     
        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- VENDOR -->
        <script src="../../assets/vendor/bootstrap/jquery-1.12.4.min.js"></script>
        <script src="../../assets/vendor/bootstrap/popper.min.js"></script>
        <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="../../assets/vendor/countdown/countdown.min.js"></script>
        <script src="../../assets/vendor/niceselect/nice-select.min.js"></script>
        <script src="../../assets/vendor/slickslider/slick.min.js"></script>
        <script src="../../assets/vendor/venobox/venobox.min.js"></script>

        <!-- CUSTOM -->
        <script src="../../assets/js/nice-select.js"></script>
        <script src="../../assets/js/countdown.js"></script>
        <script src="../../assets/js/accordion.js"></script>
        <script src="../../assets/js/venobox.js"></script>
        <script src="../../assets/js/slick.js"></script>
        <script src="../../assets/js/main.js"></script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>







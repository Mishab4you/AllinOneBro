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


    


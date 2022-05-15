<?php 
    include 'config/db_config.php';
?>

<!DOCTYPE html>
<php lang="en">
    <head>
        <!-- Page Title -->
        <title>BU Devs - Best IT Solution Provider</title>

        <!-- Meta Data -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="content-type" content="text/php; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.png" />

        <!-- ======= Icons ======= -->
        <link rel="stylesheet" href="assets/dependencies/flaticon/flaticon.css" />
        <link rel="stylesheet" href="assets/css/all.min.css" />

        <!-- ======= Carousel  ======= -->
        <link rel="stylesheet" href="assets/dependencies/slick/slick.min.css" />

        <!-- ======= Animation  ======= -->
        <link rel="stylesheet" href="assets/dependencies/animation/animate.min.css" />
        <!-- ======= Others  ======= -->
        <link rel="stylesheet" href="assets/dependencies/niceselect/nice-select.css" />
        <link rel="stylesheet" href="assets/dependencies/animation/custom-animation.css" />

        <!-- ======= Main Stylesheet ======= -->
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/apply.css" />
    </head>

    <body>
        
        <!--start loader-->
        <div class="loader">
            <div class="cssload-loader">
                <div class="cssload-inner cssload-one"></div>
                <div class="cssload-inner cssload-two"></div>
                <div class="cssload-inner cssload-three"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- ======= Header Start ======= -->
        <header class="header d-none d-lg-block sticky-on">
            <div id="sticky-placeholder"></div>
            <div id="topbar-wrap" class="header-top header-top__border_bottom header-top__padding container-custom">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <div class="header-top__info">
                                <div class="header-top__info_item header-top__info_time">
                                    <div class="header-top__info_icon">
                                        <i class="flaticon flaticon-clock"></i>
                                    </div>
                                    <div class="header-top__info_text">
                                        <p class="header-top__info_text--small"> Sat - Thus:</p>
                                        <span class="header-top__info_text--big"> 9am - 5pm</span>
                                    </div>
                                </div>
                                <div class="header-top__info_item header-top__info_phone">
                                    <div class="header-top__info_icon">
                                        <i class="flaticon flaticon-phone-call"></i>
                                    </div>
                                    <div class="header-top__info_text">
                                        <p class="header-top__info_text--small">Call for help:</p>
                                        <span class="header-top__info_text--big">
                                            <a href="tel:01575484052">(+880) 1575-484052</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="header-top__info_item header-top__info_email">
                                    <div class="header-top__info_icon">
                                        <i class="flaticon flaticon-envelope"></i>
                                    </div>
                                    <div class="header-top__info_text">
                                        <p class="header-top__info_text--small">Mail to us</p>
                                        <span class="header-top__info_text--big">
                                          <a href="mailto:budevs@budevs.com">info@budevs.com</a>  
                                        </span>
                                    </div>
                                </div>
                                <div class="header-top__info_item header-top__info_address">
                                    <div class="header-top__info_icon">
                                        <i class="flaticon flaticon-location"></i>
                                    </div>
                                    <div class="header-top__info_text">
                                        <p class="header-top__info_text--small">Our Address:</p>
                                        <span class="header-top__info_text--big">
                                            15/1, Iqbal Road,Mohammadpur, Dhaka–1207
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="header-top__social">
                                <ul>
                                    <li class="header-top__social_list">
                                        <a class="header-top__social_list--link facebook" href="javascript:void(0);">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="header-top__social_list">
                                        <a class="header-top__social_list--link twitter" href="javascript:void(0);">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="header-top__social_list">
                                        <a class="header-top__social_list--link linkedin" href="javascript:void(0);">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="header-top__social_list">
                                        <a class="header-top__social_list--link pinterest" href="javascript:void(0);">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="navbar-wrap" class="header-bottom container-custom navbar-wrap white-bg">
                
                <div class="container-fluid">
                    <div class="header-bottom__row">
                        <div class="header-bottom__col">
                            <div class="logo">
                                <a href="index.php" class="logo__link">
                                    <img style="width: 250px;" src="assets/images/logo.png" alt="IT Solution Techkit" />
                                </a>
                            </div>
                        </div>
                        <div class="header-bottom__col">
                            <div class="main-menu">
                                <nav class="main-menu__nav">
                                    <ul>
                                        <li class="list">
                                            <a class="active" class="animation" href="index.php">Home</a>
                                        </li>
                                        <li class="list">
                                            <a class="animation" href="about-us.php">About Us</a>
                                        </li>
                                        <li class="main-menu__nav_sub list">
                                            <a class="animation" href="services.php">Services</a>
                                            <ul class="main-menu__dropdown">
                                                <li><a href="javascript:void(0);">Software Development</a></li>
                                                <li><a href="javascript:void(0);">Web Development</a></li>
                                                <li><a href="javascript:void(0);">Graphics Design</a></li>
                                                <li><a href="javascript:void(0);">Mobile App Development</a></li>
                                                <li><a href="javascript:void(0);">Animation Design</a></li>
                                                <li><a href="javascript:void(0);">Data Entry</a></li>
                                            </ul>
                                        </li>
                                        <li class="list">
                                            <a class="animation" href="portfolio.php">Portfolio</a>
                                        </li>
                                        <li class="list">
                                            <a class="animation" href="team.php">Our Team</a>
                                        </li>
                                        <li class="list">
                                            <a class="animation" href="careers.php">Career</a>
                                        </li>
                                        <li class="list">
                                            <a class="animation" href="notice.php">Notice</a>
                                        </li>
                                        <li class="list">
                                            <a class="animation" href="news.php">News & Blogs</a>
                                        </li>
                                        <li class="list">
                                            <a class="animation" href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <a href="apply.php" class="btn btn-primary btn-block">Apply Now</a>
<!--                        <form class="header-bottom__col d-none d-lg-block">
                            <div class="header-search">
                                <input placeholder="Search" type="text" class="header-search__input" />
                                <button class="header-search__button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>-->
                    </div>
                </div>
            </div>
        </header>
        <!-- Mobile Menu Start -->
        <div class="rt-header-menu mean-container position-relative" id="meanmenu">
            <div class="mean-bar">
                <a href="index.php">
                    <img class="logo-small" alt="Techkit" src="assets/images/logo.png" />
                </a>
                <form class="header-bottom__col">
                    <div class="header-search">
                        <input placeholder="Search" type="text" class="header-search__input" />
                        <button class="header-search__button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                <span class="sidebarBtn">
                    <span class="fa fa-bars"></span>
                </span>
            </div>
            <div class="rt-slide-nav">
                <div class="offscreen-navigation">
                    <nav class="menu-main-primary-container">
                        <ul class="menu">
                            <li class="list menu-item-parent menu-item-has-children">
                                <a class="animation" href="index.php">Home</a>
                                <ul class="main-menu__dropdown sub-menu">
                                    <li><a href="index.php">Main Home</a></li>
                                    <li>
                                        <a href="software-innovation.php"> Software Company</a>
                                    </li>
                                    <li><a href="it-agency.php">IT Agency</a></li>

                                    <li>
                                        <a href="vertical-slider.php">Vertical Slider</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list menu-item-parent menu-item-has-children">
                                <a class="animation" href="about-us.php">Company</a>
                                <ul class="main-menu__dropdown sub-menu">
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li>
                                        <a href="why-chose-us.php">Why Chose Us</a>
                                    </li>
                                    <li><a href="faq.php">Help & FAQ'S</a></li>
                                    <li>
                                        <a href="history.php">Our History</a>
                                    </li>
                                    <li>
                                        <a href="careers.php">Careers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list menu-item-parent menu-item-has-children">
                                <a class="animation" href="it-solution.php">It Solutions</a>
                                <ul class="main-menu__dropdown sub-menu">
                                    <li><a href="it-solution.php">It Solutions</a></li>
                                    <li>
                                        <a href="services.php">It Services</a>
                                    </li>
                                    <li>
                                        <a href="industries-services.php">Industries Services</a>
                                    </li>
                                    <li>
                                        <a href="services-details.php">Services Details 01</a>
                                    </li>
                                    <li>
                                        <a href="services-details-02.php">Services Details 02</a>
                                    </li>
                                    <li>
                                        <a href="services-details-03.php">Services Details 03</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list menu-item-parent menu-item-has-children">
                                <a class="animation" href="index.php">Pages</a>
                                <ul class="main-menu__dropdown sub-menu">
                                    <li><a href="team.php">Our Team</a></li>
                                    <li>
                                        <a href="price.php">Pricing Plans</a>
                                    </li>
                                    <li>
                                        <a href="404.php">404 Page</a>
                                    </li>
                                    <li>
                                        <a href="portfolio.php">Case Studies 01</a>
                                    </li>
                                    <li>
                                        <a href="case-02.php">Case Studies 02</a>
                                    </li>
                                    <li>
                                        <a href="case-03.php">Case Studies 03</a>
                                    </li>
                                    <li>
                                        <a href="case-details.php">Case Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list menu-item-parent menu-item-has-children">
                                <a class="animation" href="blog-details.php">Blogs</a>
                                <ul class="main-menu__dropdown sub-menu">
                                    <li><a href="notice.php">Grid Layout</a></li>
                                    <li>
                                        <a href="list-layout.php">List Layout</a>
                                    </li>
                                    <li>
                                        <a href="notice_detail.php">No Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.php">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list menu-item-parent">
                                <a class="animation" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Start End -->

        <!-- ======= Header End ======= -->

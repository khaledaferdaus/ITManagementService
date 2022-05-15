<?php
include 'template/header.php';

$view_slider_sql = "SELECT * FROM slider";
$view_slider_sql_result = $conn->query($view_slider_sql);
$view_service_sql = "SELECT * FROM service";
$view_service_sql_result = $conn->query($view_service_sql);
$view_portfolio_sql = "SELECT * FROM portfolio";
$view_portfolio_sql_result = $conn->query($view_portfolio_sql);
$view_team_sql = "SELECT * FROM team";
$view_team_sql_result = $conn->query($view_team_sql);
$view_testimonial_sql = "SELECT * FROM testimonial";
$view_testimonial_sql_result = $conn->query($view_testimonial_sql);
$view_news_sql = "SELECT * FROM news";
$view_news_sql_result = $conn->query($view_news_sql);

?>
        <!-- ======= Main Wrapper Start ======= -->
        <main class="main-wrapper overflow-hidden">
            <!-- ======= Hero Start ======= -->
            <section class="hero overflow-hidden">
                <div class="slider slider--active">
                    <div class="slider__single slider__bg container-custom" data-bg-image="assets/images/bg/Slider-1.jpg">
                        <img src="assets/images/shape/slider-shape-1.png" alt="" class="slider__shape slider__shape--one"
                             data-animation="slideInDown" data-delay=".4s" data-duration="2s" />
                        <img src="assets/images/shape/slider-shape-2.png" alt="" class="slider__shape slider__shape--two"
                             data-animation="slideInRight" data-delay=".5s" data-duration="2.5s" />
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-8">
                                    <div class="slider-content">
                                        <span class="slider-content__title_small ml13" data-animation="fadeInUp" data-delay=".4s">
                                            BEST IT SOLUTION PROVIDER</span>
                                        <h2 id="ml12" class="slider-content__title_big" data-animation="fadeInUp" data-delay=".6s">
                                            Best Solution To Run Your Project Faster
                                        </h2>
                                        <p class="slider-content__text" data-animation="fadeInUp" data-delay=".8s">
                                            Grursus suada faci Lorem ipsum dolarorit ametion consectetur elit. Vesti at bulum nec odio aea the
                                            dumm ipsumm and fadolorit to the consectetur dummy text elit.
                                        </p>
                                        <a href="about-us.html" class="btn btn--common btn--primary rt-button-animation-out"
                                           data-animation="fadeInUp" data-delay="1s">
                                            Get Details
                                            <svg width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                                            <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                            <g class="rt-button-cap-fake">
                                            <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                            </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__single slider__bg container-custom" data-bg-image="assets/images/bg/hero-bg-2.jpg">
                        <img src="assets/images/shape/slider-shape-1.png" alt="" class="slider__shape slider__shape--three"
                             data-animation="zoomIn" data-delay=".4s" data-duration="2.5s" />
                        <img src="assets/images/shape/slider-shape-4.png" alt="" class="slider__shape slider__shape--four"
                             data-animation="slideInUp" data-delay=".3s" data-duration="2s" />
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="slider-content slider-content--two">
                                        <span class="slider-content__title_small title title--small ml13" data-animation="fadeInUp"
                                              data-delay=".2s">
                                            BEST IT SOLUTION PROVIDER</span>
                                        <h2 class="slider-content__title_big title title--big" data-animation="fadeInUp" data-delay=".4s">
                                            Web Development & Custom Solutions
                                        </h2>
                                        <p class="slider-content__text paragraph" data-animation="fadeInUp" data-delay=".6s">
                                            Grursus suada faci Lorem ipsum dolarorit ametion
                                            consectetur elit. Vesti at bulum nec odio aea the dumm
                                            ipsumm and fadolorit to the consectetur dummy text elit.
                                        </p>
                                        <a href="about-us.html" class="btn btn--common btn--primary rt-button-animation-out"
                                           data-animation="fadeInUp" data-delay=".8s">
                                            Get Details
                                            <svg width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                                            <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                            <g class="rt-button-cap-fake">
                                            <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                            </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__single slider__bg container-custom" data-bg-image="assets/images/bg/Slider-3.jpg">
                        <img src="assets/images/shape/slider-shape-5.png" alt="Slide" class="slider__shape slider__shape--five"
                             data-animation="zoomIn" data-delay=".3s" data-duration="2s" />
                        <img src="assets/images/shape/slider-shape-6.png" alt="" class="slider__shape slider__shape--six"
                             data-animation="slideInLeft" data-delay=".3s" data-duration="2.2s" />
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="slider-content slider-content--two">
                                        <span class="slider-content__title_small title title--small" data-animation="fadeInUp"
                                              data-delay=".2s">
                                            Secure & IT Services</span>
                                        <h2 class="slider-content__title_big title title--big" data-animation="fadeInUp" data-delay=".4s">
                                            Excellent IT services for your success
                                        </h2>
                                        <p class="slider-content__text paragraph" data-animation="fadeInUp" data-delay=".6s">
                                            Grursus suada faci Lorem ipsum dolarorit ametion
                                            consectetur elit. Vesti at bulum nec odio aea the dumm
                                            ipsumm and fadolorit to the consectetur dummy text elit.
                                        </p>
                                        <a href="about-us.html" class="btn btn--common btn--primary rt-button-animation-out"
                                           data-animation="fadeInUp" data-delay=".8s">
                                            Get Details
                                            <svg width="34px" height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                                            <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                            <g class="rt-button-cap-fake">
                                            <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                            </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= Hero End ======= -->

            <!-- ======= About Start ======= -->
            <section class="about about--area about--padding">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-30">
                            <div class="section-heading mb-40">
                                <span class="section-heading__title_small wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".4s">About
                                    Company</span>
                                <h2 class="section-heading__title_big wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                                    What We Promise High Quality IT Solutions
                                </h2>
                            </div>
                            <div class="about-content">
                                <h3 class="about-content__title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".7s">
                                    Over <span class="primary-text-color">2,500+</span> Customers
                                </h3>
                                <p class="about-content__text wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">

                                    Grursus mal suada faci lisis Lorem ipsum dolarorit more is ame tion the a consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada as and fadolorit to the consectetur elit. All a the Lorem Ipsum generators on the Internet tend.

                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 mb-30 text-md-center">
                            <div class="about-content__image about-content__image_right position-relative">
                                <img width="690" height="617" src="assets/images/home1/Software.jpg"
                                     alt="About Our RadiusTheme Company" class="about-img wow fadeInRight" data-wow-delay="1s"
                                     data-wow-duration="1.2s" />
                                <div class="about-content__experience">
                                    <div class="about-content__experience_years">27</div>
                                    <div class="about-content__experience_title">
                                        YEAR’S <span>EXPERIENCE IN IT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= About End ======= -->

            <!-- ======= Service Area Start ======= -->
            <section class="services services--padding section-bg-common">

            <div class="container">
              <div class="row align-items-center">
                <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-heading mb-55">
                                <span class="section-heading__title_small"> Our Services </span>
                                <h2 class="section-heading__title_big">We Offer a Wide Variety of IT Services</h2>
                            </div>
                        </div>

                        

                        <div class="col-lg-6">
                            <div class="section-button d-flex mb-55">
                                <a href="services.php" class="btn btn--common btn--primary rt-button-animation-out">See More
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px"
                                         height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                                    <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                    <g class="rt-button-cap-fake">
                                    <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                    </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <?php
                            if ($view_service_sql_result->num_rows > 0) {
                            while ($service_row = $view_service_sql_result->fetch_assoc()) {
                        ?>
                    
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                 <header class="blog-item__header mb-35">
                        <a href="services.php" class="blog-item__img_link">
                            <img width="551" height="395" class="blog-item__img" src="admin/uploads/service/<?php echo $service_row['image']; ?>" alt="Questions every Business" />
                        </a>
                        <a href="services.php" class="blog-item__tags">Details</a>
                  </header>
                  <div class="services__item mb-50">
                    <div class="services__item_overlay"></div>
                    <header class="services__item_header d-flex align-items-center" >
                      <i class="flaticon flaticon-create services__item_icon" ></i>
                      <h3 class="services__item_title">
                        <a href="services-details.php"><?php echo $service_row['title']; ?></a>
                      </h3>
                    </header>
                    <div class="services__item_content">
                      <p class="services__item_paragraph"><?php echo $service_row['details']; ?></p>
                      <h3 class="services__item_title">Link:
                        <a href="services-details.php"><?php echo $service_row['broacher']; ?></a>
                      </h3>
                    </div>
                  </div>

                  <?php } } else {echo "No Data Found !"; } ?>
                </div>
              </div>
            </div>
          </section>
            <!-- ======= Service Area End ======= -->

            <!-- ======= Service Key Area Start ======= -->
            <section class="services-key services-key--padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="section-heading text-center mb-30">
                                <span class="section-heading__title_small">
                                    We Offer best IT Services
                                </span>
                                <h2 class="section-heading__title_big">
                                    Easy Solutions for all Difficult IT Problems
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="services-key__navbar">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="services-key__navbar_nav nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item services-key__navbar_item" role="presentation">
                                        <button class="services-key__navbar_link nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                            <i class="flaticon flaticon-settings"></i> Why Choose us
                                        </button>
                                    </li>
                                    <li class="nav-item services-key__navbar_item" role="presentation">
                                        <button class="services-key__navbar_link nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                            <i class="flaticon flaticon-tech"></i> Technology Index
                                        </button>
                                    </li>
                                    <li class="nav-item services-key__navbar_item" role="presentation">
                                        <button class="services-key__navbar_link nav-link" id="contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                            <i class="flaticon flaticon-team"></i> Our Partners
                                        </button>
                                    </li>
                                    <li class="nav-item services-key__navbar_item" role="presentation">
                                        <button class="services-key__navbar_link nav-link" id="awards-tab" data-bs-toggle="tab"
                                                data-bs-target="#awards" type="button" role="tab" aria-controls="awards" aria-selected="false">
                                            <i class="flaticon flaticon-medal"></i> Our Awards
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="services-key__tabbar pt-50">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="services__item services-key__content mb-30">
                                                    <div class="services__item_overlay services-key__content_overlay"></div>
                                                    <header class="services__item_header services-key__content_header">
                                                        <i
                                                            class="flaticon flaticon-graphic-design services__item_icon services-key__content_icon"></i>
                                                        <h3 class="services__item_title services-key__content_title">
                                                            <a href="services-details.php">Product Design</a>
                                                        </h3>
                                                    </header>
                                                    <div class="services__item_content services-key__content_text">
                                                        <p class="services__item_paragraph services-key__content_paragraph">
                                                            Grursus mal suada lisis more ametion consectet
                                                            elit. Vesti at suada consectetur elit.
                                                        </p>
                                                        <a class="services-key__content_link" href="services-details.php">Discover now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                                <div class="services__item services-key__content mb-30">
                                                    <div class="services__item_overlay services-key__content_overlay"></div>
                                                    <header class="services__item_header services-key__content_header">
                                                        <i
                                                            class="flaticon flaticon-web-development services__item_icon services-key__content_icon"></i>
                                                        <h2 class="services__item_title services-key__content_title">
                                                            <a href="services-details.php">Web Development</a>
                                                        </h2>
                                                    </header>
                                                    <div class="services__item_content services-key__content_text">
                                                        <p class="services__item_paragraph services-key__content_paragraph">
                                                            Grursus mal suada lisis more ametion consectet
                                                            elit. Vesti at suada consectetur elit.
                                                        </p>
                                                        <a class="services-key__content_link" href="services-details.php">Discover now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                                <div class="services__item services-key__content mb-30">
                                                    <div class="services__item_overlay services-key__content_overlay"></div>
                                                    <header class="services__item_header services-key__content_header">
                                                        <i class="flaticon flaticon-analysis services__item_icon services-key__content_icon"></i>
                                                        <h2 class="services__item_title services-key__content_title">
                                                            <a href="services-details.php">Data Analytics</a>
                                                        </h2>
                                                    </header>
                                                    <div class="services__item_content services-key__content_text">
                                                        <p class="services__item_paragraph services-key__content_paragraph">
                                                            Grursus mal suada lisis more ametion consectet
                                                            elit. Vesti at suada consectetur elit.
                                                        </p>
                                                        <a class="services-key__content_link" href="services-details.php">Discover now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                                <div class="services__item services-key__content mb-30">
                                                    <div class="services__item_overlay services-key__content_overlay"></div>
                                                    <header class="services__item_header services-key__content_header">
                                                        <i
                                                            class="flaticon flaticon-cyber-security services__item_icon services-key__content_icon"></i>
                                                        <h2 class="services__item_title services-key__content_title">
                                                            <a href="services-details.php">Cyber Security</a>
                                                        </h2>
                                                    </header>
                                                    <div class="services__item_content services-key__content_text">
                                                        <p class="services__item_paragraph services-key__content_paragraph">
                                                            Grursus mal suada lisis more ametion consectet
                                                            elit. Vesti at suada consectetur elit.
                                                        </p>
                                                        <a class="services-key__content_link" href="services-details.php">Discover now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="services__item services__tech text-center mb-30">
                                                    <div class="services__item_overlay services__tech_overlay"></div>
                                                    <header class="services__item_header mb-0">
                                                        <i class="flaticon flaticon-website services__item_icon services__tech_icon"></i>
                                                        <h4 class="services__item_title services__tech_title">
                                                            <a href="services-details.php">Web Site</a>
                                                        </h4>
                                                    </header>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                                <div class="services__item services__tech text-center mb-30">
                                                    <div class="services__item_overlay services__tech_overlay"></div>
                                                    <header class="services__item_header mb-0">
                                                        <i class="flaticon flaticon-android services__item_icon services__tech_icon"></i>
                                                        <h4 class="services__item_title services__tech_title">
                                                            <a href="services-details.php">Android Apps</a>
                                                        </h4>
                                                    </header>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                                <div class="services__item services__tech text-center mb-30">
                                                    <div class="services__item_overlay services__tech_overlay"></div>
                                                    <header class="services__item_header mb-0">
                                                        <i class="flaticon flaticon-apple services__item_icon services__tech_icon"></i>
                                                        <h4 class="services__item_title services__tech_title">
                                                            <a href="services-details.php">ios Apps</a>
                                                        </h4>
                                                    </header>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                                <div class="services__item services__tech text-center mb-30">
                                                    <div class="services__item_overlay services__tech_overlay"></div>
                                                    <header class="services__item_header mb-0">
                                                        <i class="flaticon flaticon-programing services__item_icon services__tech_icon"></i>
                                                        <h4 class="services__item_title services__tech_title">
                                                            <a href="services-details.php">Iot Program</a>
                                                        </h4>
                                                    </header>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                                                <div class="services__item services__tech text-center mb-30">
                                                    <div class="services__item_overlay services__tech_overlay"></div>
                                                    <header class="services__item_header mb-0">
                                                        <i class="flaticon flaticon-smartwatch services__item_icon services__tech_icon"></i>
                                                        <h4 class="services__item_title services__tech_title">
                                                            <a href="services-details.php">Wearalables</a>
                                                        </h4>
                                                    </header>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.5s">
                                                <div class="services__item services__tech text-center mb-30">
                                                    <div class="services__item_overlay services__tech_overlay"></div>
                                                    <header class="services__item_header mb-0">
                                                        <i
                                                            class="flaticon flaticon-lifeline-on-a-tv-monitor-screen-of-a-medical-program services__item_icon services__tech_icon"></i>
                                                        <h4 class="services__item_title services__tech_title">
                                                            <a href="services-details.php">tv Program</a>
                                                        </h4>
                                                    </header>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="services-partners overflow-hidden mb-20">
                                            <ul class="services-partners__wrapper overflow-hidden">
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay=".2s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners1.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay=".3s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners2.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay=".4s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners3.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay=".5s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners4.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay=".6s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners5.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay=".7s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners6.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay=".8s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners7.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay=".9s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners8.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay="1s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners9.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay="1.1s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners10.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay="1.2s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners11.png" alt="" /></a>
                                                </li>
                                                <li class="services-partners__item wow fadeInUp" data-wow-delay="1.3s">
                                                    <a class="services-partners__item_link" href="services-details.php"><img
                                                            src="assets/images/partners/partners12.png" alt="" /></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="services__awards mb-30">
                                                    <img src="assets/images/home1/awards-1.png" alt="" class="services__awards_board" />
                                                    <h3 class="services__awards_title">
                                                        <a href="https://www.radiustheme.com/demo/php/techkit/awards-details.php">Top 10 Technology Company 2018</a>
                                                    </h3>
                                                    <p class="services__awards_text">
                                                        Grursus mal suada faci lisis Lorem ipsum is
                                                        dolarorit more ametion consectetur elit. Vesti ipsum
                                                        suada to the consectetur elit.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                                <div class="services__awards mb-30">
                                                    <img src="assets/images/home1/awards-2.png" alt="" class="services__awards_board" />
                                                    <h3 class="services__awards_title">
                                                        <a href="https://www.radiustheme.com/demo/php/techkit/awards-details.php">Top Income Tax Awards 2019</a>
                                                    </h3>
                                                    <p class="services__awards_text">
                                                        Grursus mal suada faci lisis Lorem ipsum is
                                                        dolarorit more ametion consectetur elit. Vesti ipsum
                                                        suada to the consectetur elit.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                                <div class="services__awards mb-30">
                                                    <img src="assets/images/home1/awards-3.png" alt="" class="services__awards_board" />
                                                    <h3 class="services__awards_title">
                                                        <a href="https://www.radiustheme.com/demo/php/techkit/awards-details.php">Top Training Centre 2020</a>
                                                    </h3>
                                                    <p class="services__awards_text">
                                                        Grursus mal suada faci lisis Lorem ipsum is
                                                        dolarorit more ametion consectetur elit. Vesti ipsum
                                                        suada to the consectetur elit.
                                                    </p>
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
            <!-- ======= Service Key Area End ======= -->

            <!-- ======= Solution Area Start ======= -->
            <div class="support support--bg support--padding secondary-bg-color pt-95 parallaxie"
                 data-bg-image="assets/images/shape/support-bg-shape.png">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12"></div>
                    </div>
                </div>
            </div>
            <!-- ======= Solution Area End ======= -->

            <!-- ======= Case Studies Area Start ======= -->
            <section class="case case--minus pt-100 pb-125">
                
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="section-heading section-heading--style3 mb-50">
                                <span class="section-heading__title_small wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                                    WHAT WE DID
                                </span>
                                <h2 class="section-heading__title_big text-white wow fadeInUp" data-wow-delay=".5s"
                                    data-wow-duration=".7s">
                                    Our Portfolios
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="section-button mb-50">
                                <a href="portfolio.php" class="btn btn--common btn--primary rt-button-animation-out wow fadeInRight"
                                   data-wow-delay=".9s" data-wow-duration=".7s">
                                    See More
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px"
                                         height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                                    <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                    <g class="rt-button-cap-fake">
                                    <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                    </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        
                    </div>
                </div>

                <div class="container">
              <div class="row">
              
              <?php
                if ($view_portfolio_sql_result->num_rows > 0) {
                while ($portfolio_row = $view_portfolio_sql_result->fetch_assoc()) {
              ?>  
              <div class="col-lg-4 col-md-6 blog-item__column mb-30"> 
                  <div class="case-item p-0">
                    <div class="case-item__image">
                      <a href="case-details.php">
                        <img
                          width="545"
                          height="360"
                          src="admin/uploads/portfolio/<?php echo $portfolio_row['image']; ?>"
                          alt="Case Studies"
                        />
                      </a>
                    </div>
                    
                    <div
                      class="case-item__content secondary-bg-color text-center"
                    >
                      <h5 class="text-white">
                        <a href="portfolio.php"><?php echo $portfolio_row['category']; ?></a>
                      </h5>
                      <span><?php echo $portfolio_row['technology_used']; ?></span>
                    </div>
                      <div class="blog-item__article">
                      <br>
                      <center><span class="blog-item__date">Date: <?php echo $portfolio_row['project_start']; ?> To <?php echo $portfolio_row['project_end']; ?></span></center>
                      <h3 class="blog-item__title">
                          <a href="portfolio.php"><?php echo $portfolio_row['title']; ?></a>
                      </h3>
                      <p class="blog-item__text"><?php echo $portfolio_row['detail']; ?></p>
                      <ul class="blog-item__meta">
                          <li class="blog-item__list">
                              <i class="far fa-user blog-item__list_icon"></i>
                              <span class="blog-item__list_name"><?php echo $portfolio_row['client_name']; ?></span>
                          </li>
                      </ul>
                   </div>
                </div>
                </div>
              <?php }} else {echo "No Data Found !";} ?>

              </div>
            </div>
               </section>
            <!-- ======= Case Studies Area End ======= -->

            <!-- ======= Team Area Start ======= -->
            <section class="team pb-85">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="section-heading mb-55 text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                                <span class="section-heading__title_small"> OUR TEAM </span>
                                <h2 class="section-heading__title_big">
                                    Experiences IT Solutions.
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                            <?php
                                if ($view_team_sql_result->num_rows > 0) {
                                while ($team_row = $view_team_sql_result->fetch_assoc()) {
                            ?>
                            <div class="col-lg-4 col-md-6 mb-30">
                            <div class="team-block team-block--two wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                <div class="image">
                                    
                                    <img class="image__member" src="admin/uploads/team/<?php echo $team_row['image']; ?>" alt="Team Member" width="545"
                                         height="300" />
                                    <div class="social">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="<?php echo $team_row['fb_link']; ?>">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="<?php echo $team_row['tw_link']; ?>">
                                                  <i class="far fa-envelope"></i>
                                                </a>
                                              </li>
                                            <li>
                                                <a class="instagram" href="<?php echo $team_row['ins_link']; ?>">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="linkedin" href="<?php echo $team_row['lin_link']; ?>">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                     
                                </div>
                                <div class="content">
                                    <h3 class="name">
                                       <?php echo $team_row['name']; ?>
                                        <span class="designation"><?php echo $team_row['designation']; ?></span>
                                    </h3>
                                </div>
                            </div>
                            </div>
                                 <?php } } else {  echo "No Data Found !";  } ?>
                  </div>
                </div>
            </section>
            <!-- ======= Team Area End ======= -->

            <!-- ======= Testimonials Area Start ======= -->
            <section class="review review--bg review--padding position-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-heading mb-55 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                                <span class="section-heading__title_small"> TESTIMONIALS </span>
                                <h2 class="section-heading__title_big">
                                    What they Clients Say!
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s" data-wow-duration=".7s">
                            <div class="section-button mb-55">
                                <a href="javascript:void(0);" class="btn btn--common btn--primary rt-button-animation-out">See More
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px"
                                         height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                                    <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                    <g class="rt-button-cap-fake">
                                    <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                    </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-wrapper">
                     <?php
                                    if ($view_testimonial_sql_result->num_rows > 0) {
                                        while ($testimonial_row = $view_testimonial_sql_result->fetch_assoc()) {
                                            ?>
                    <div class="container-fluid">
                        <div class="row review--active">
                            <div class="col-lg-4 mb-30 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration=".5s">
                                <div class="review-block">
                                    <div class="review-block__content">
                                        <img class="review-block__quote_icon" src="assets/images/icon/left-quote.png" alt="Quotes Left" />
                                        <h3 class="review-block__title"><?php echo $testimonial_row['title']; ?></h3>
                                        <p><?php echo $testimonial_row['comment']; ?> </p>
                                    </div>
                                    <div class="review-block__auth">
                                        <div class="review-block__auth_image">
                                            <a style="border-radius:50px;" href="javascript:void(0);"><img src="admin/uploads/testimonial/<?php echo $testimonial_row['image']; ?>"
                                                                               alt="HR Hany" /></a>
                                        </div>
                                        <div class="review-block__auth_info">
                                            <h3 class="review-block__auth_name"><?php echo $testimonial_row['client_name']; ?></h3>
                                            <span class="review-block__auth_title"><?php echo $testimonial_row['client_designation']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                         <?php
                                        }
                                    } else {
                                        echo "No Data Found !";
                                    }
                                    ?>
                </div>
            </section>
            <!-- ======= Testimonials Area End ======= -->

            <!-- ======= Price Area Start ======= -->
            <section class="price price--padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading text-center mb-65">
                                <span class="section-heading__title_small">
                                    PRICING PLANS
                                </span>
                                <h2 class="section-heading__title_big">
                                    Flexible Pricing PLANS
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-6 price-item__wrapper mb-30 wow fadeInUp" data-wow-delay=".3s"
                             data-wow-duration=".5s">
                            <div class="price-item">
                                <header class="price-item__header">
                                    <div class="price-item__header_icon">
                                        <div class="price-item__icon">
                                            <object data="assets/images/icon/price-setting.svg" type="image/svg+xml">
                                                <img src="assets/images/icon/price-setting.svg" alt="price" />
                                            </object>
                                        </div>
                                    </div>
                                    <h3 class="price-item__title">Economy</h3>
                                    <span class="price-item__price">$35<span>/ month</span></span>
                                </header>
                                <div class="price-item__content">
                                    <ul>
                                        <li class="price-item__content_item price-item__content_available">
                                            <i class="fas fa-check"></i>
                                            <span>Powerful Admin Panel</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>1 Native Android App</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>Advance Protection</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>Multi-Language Support</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available">
                                            <i class="fas fa-check"></i>
                                            <span>Support via E-mail and Phone</span>
                                        </li>
                                    </ul>
                                </div>
                                <footer class="price-item__footer">
                                    <button class="price-item__button">Order Now</button>
                                </footer>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 price-item__wrapper mb-30 wow fadeInUp" data-wow-delay=".7s"
                             data-wow-duration=".9s">
                            <div class="price-item">
                                <header class="price-item__header">
                                    <div class="price-item__header_icon">
                                        <div class="price-item__icon">
                                            <object data="assets/images/icon/price-quality.svg" type="image/svg+xml">
                                                <img src="assets/images/icon/price-quality.svg" alt="price" />
                                            </object>
                                        </div>
                                    </div>
                                    <h3 class="price-item__title">Ultimate</h3>
                                    <span class="price-item__price">$55<span>/ month</span></span>
                                </header>
                                <div class="price-item__content">
                                    <ul>
                                        <li class="price-item__content_item price-item__content_available">
                                            <i class="fas fa-check"></i>
                                            <span>Powerful Admin Panel</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>1 Native Android App</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>Advance Protection</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>Multi-Language Support</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available">
                                            <i class="fas fa-check"></i>
                                            <span>Support via E-mail and Phone</span>
                                        </li>
                                    </ul>
                                </div>
                                <footer class="price-item__footer">
                                    <button class="price-item__button">Order Now</button>
                                </footer>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 price-item__wrapper mb-30 wow fadeInUp" data-wow-delay="1s"
                             data-wow-duration="1.3s">
                            <div class="price-item">
                                <header class="price-item__header">
                                    <div class="price-item__header_icon">
                                        <div class="price-item__icon">
                                            <object data="assets/images/icon/price-diamond.svg" type="image/svg+xml">
                                                <img src="assets/images/icon/price-diamond.svg" alt="price" />
                                            </object>
                                        </div>
                                    </div>
                                    <h3 class="price-item__title">Professional</h3>
                                    <span class="price-item__price">$79<span>/ month</span></span>
                                </header>
                                <div class="price-item__content">
                                    <ul>
                                        <li class="price-item__content_item price-item__content_available">
                                            <i class="fas fa-check"></i>
                                            <span>Powerful Admin Panel</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>1 Native Android App</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>Advance Protection</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>Multi-Language Support</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available">
                                            <i class="fas fa-check"></i>
                                            <span>Support via E-mail and Phone</span>
                                        </li>
                                    </ul>
                                </div>
                                <footer class="price-item__footer">
                                    <button class="price-item__button">Order Now</button>
                                </footer>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 price-item__wrapper wow fadeInUp" data-wow-delay="1.3s"
                             data-wow-duration="1.5s">
                            <div class="price-item">
                                <header class="price-item__header">
                                    <div class="price-item__header_icon">
                                        <div class="price-item__icon">
                                            <object data="assets/images/icon/price-star.svg" type="image/svg+xml">
                                                <img src="assets/images/icon/price-star.svg" alt="price" />
                                            </object>
                                        </div>
                                    </div>
                                    <h3 class="price-item__title">Business</h3>
                                    <span class="price-item__price">$99<span>/ month</span></span>
                                </header>
                                <div class="price-item__content">
                                    <ul>
                                        <li class="price-item__content_item price-item__content_available">
                                            <i class="fas fa-check"></i>
                                            <span>Powerful Admin Panel</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>1 Native Android App</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>Advance Protection</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available--not">
                                            <i class="far fa-times-circle"></i>
                                            <span>Multi-Language Support</span>
                                        </li>
                                        <li class="price-item__content_item price-item__content_available">
                                            <i class="fas fa-check"></i>
                                            <span>Support via E-mail and Phone</span>
                                        </li>
                                    </ul>
                                </div>
                                <footer class="price-item__footer">
                                    <button class="price-item__button">Order Now</button>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= Price Area End ======= -->

            <!-- ======= Counter Area Start ======= -->
            <section class="counter counter--bg counter--padding parallaxie"
                     data-bg-image="assets/images/bg/counter-area-bg-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".5s">
                            <div class="counter__item text-center">
                                <span class="counter__item_count text-white counter-number" data-num="109">109</span>
                                <h3 class="counter__item_title text-white">Happy Clients</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".7s">
                            <div class="counter__item text-center">
                                <span class="counter__item_count text-white counter-number" data-num="28">28</span>
                                <h3 class="counter__item_title text-white">
                                    Finished Projects
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".9s">
                            <div class="counter__item text-center">
                                <span class="counter__item_count text-white counter-number" data-num="35">35</span>
                                <h3 class="counter__item_title text-white">Skilled Experts</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-20 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                            <div class="counter__item text-center">
                                <span class="counter__item_count text-white counter-number" data-num="107">107</span>
                                <h3 class="counter__item_title text-white">Media Posts</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= Counter Area End ======= -->

            <!-- ======= Blog Area Start ======= -->
            <section class="blog blog--padding">
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-heading mb-55">
                                <span class="section-heading__title_small"> Blogs & news </span>
                                <h2 class="section-heading__title_big">Interesting divs</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-button d-flex mb-55">
                                <a href="news.php" class="btn btn--common btn--primary rt-button-animation-out">See More
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px"
                                         height="16px" viewBox="0 0 34.53 16" xml:space="preserve">
                                    <rect class="rt-button-line" y="7.6" width="34" height=".4"></rect>
                                    <g class="rt-button-cap-fake">
                                    <path class="rt-button-cap" d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                    </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="blog--wrapper">
                                <div class="row g-0">
                                    <?php
                                        if ($view_news_sql_result->num_rows > 0) {
                                        while ($news_row = $view_news_sql_result->fetch_assoc()) {
                                    ?>
                                    <div class="col-lg-4 col-md-6 blog-item__column mb-30">
                                        <div class="blog-item blog-item--one">
                                            <header class="blog-item__header mb-35">
                                                <a href="news.php" class="blog-item__img_link">
                                                    <img width="551" height="395" class="blog-item__img" src="admin/uploads/news/<?php echo $news_row['image']; ?>" alt="Questions every Business" />
                                                </a>
                                            </header>
                                            
                                            <div class="blog-item__article">
                                                <span class="blog-item__date"><?php echo $news_row['date']; ?></span>
                                                <h3 class="blog-item__title">
                                                    <a href="news.php"><?php echo $news_row['title']; ?></a>
                                                </h3>
                                                <p class="blog-item__text"><?php echo $news_row['detail']; ?></p>
                                                <ul class="blog-item__meta">
                                                    <li class="blog-item__list">
                                                        <i class="far fa-user blog-item__list_icon"></i>
                                                        <span class="blog-item__list_name"><?php echo $news_row['report_name']; ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  } } else { echo "No Data Found !"; }  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======= Blog Area End ======= -->

            <!-- ======= Contact Area Start ======= -->
            <section class="contact contact--bg contact--padding" data-bg-image="assets/images/shape/contact-bg-shape.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-30">
                            <div class="contact-address contact-address--bg" data-bg-image="assets/images/bg/contact-address-bg.jpg">
                                <ul>
                                    <li class="contact-address__item mb-20">
                                        <div class="contact-address__item_icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="contact-address__item_text">
                                            <h3 class="text-white">Our Location</h3>
                                            <p class="text-white"><a target="_" href="https://goo.gl/maps/iVsfthX12MAozRhy7"
                                                >15/1, Iqbal Road,Mohammadpur, Dhaka–1207</a>                                               
                                            </p>
                                        </div>
                                    </li>
                                    <li class="contact-address__item mb-20">
                                        <div class="contact-address__item_icon">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </div>
                                        <div class="contact-address__item_text">
                                            <h3 class="text-white">Email Address</h3>
                                            <p class="text-white"><a href="mailto:info@budevs.com">info@budevs.com</a></p>
                                        </div>
                                    </li>
                                    <li class="contact-address__item mb-40">
                                        <div class="contact-address__item_icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="contact-address__item_text">
                                            <h3 class="text-white">Call Us Free</h3>
                                            <p class="text-white">
                                                <i><a  href="tel:01575484052">(+880) 1575-484052</a></i>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="contact-address__item">
                                        <form class="contact-address__form" action="javascript:void(0);">
                                            <input class="contact-address__form_input" type="text" placeholder="Find Your Solution" />
                                            <button class="contact-address__form_button">
                                                <i class="fas fa-arrow-right"></i>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        

                        <div class="col-lg-7 mb-30">
                            <form action="javascript:void(0);" class="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="section-heading mb-45">
                                            <span class="section-heading__title_small">
                                                Get In Touch
                                            </span>
                                            <h2 class="section-heading__title_big">
                                                Are you Ready for a Better, more Productive Business?
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="name" type="text" class="contact-form__input" placeholder="Name *" />
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" type="text" class="contact-form__input" placeholder="Email *" />
                                    </div>
                                    <div class="col-md-6">
                                        <input name="phone" type="text" class="contact-form__input" placeholder="Phone" />
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="contact-form__input contact-form__input_textarea" name="message"
                                                  placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="contact-form__button">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>


                    </div>
                </div>
            </section>
            <!-- ======= Contact Area End ======= -->
        </main>
        <!-- ======= Main Wrapper End ======= -->

        <?php 
            include 'template/footer.php';
        ?>
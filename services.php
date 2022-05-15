<?php
include 'template/header.php';

$view_service_sql = "SELECT * FROM service";
$view_service_sql_result = $conn->query($view_service_sql);
?>

        <!-- ======= Main Wrapper Start ======= -->
        <main class="main-wrapper">
          <!-- ======= Hero inner Start ======= -->
          <section class="hero-inner">
            <div
              class="hero-inner__bg hero-inner__bg_two"
              data-bg-image="assets/images/bg/inner-bg-2.jpg"
            >
              <div class="container">
                <div class="row">

                  <div class="col-sm-12">
                    <div class="page-breadcrumb">
                      <h1 class="heading">IT Services</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- ======= Hero inner End ======= -->

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

          <!-- ======= Contact Area Start ======= -->
          <section
            class="contact contact--agency"
            data-bg-image="assets/images/bg/contact-bg.jpg"
          >
            <div class="container">
              <div class="row">
                <div class="col-lg-6 offset-lg-3">
                  <div class="contact__agency">
                    <span class="title text-white"
                      >We are here to answer your questions 24/7</span
                    >
                    <h2 class="heading text-white">NEED A CONSULTATION?</h2>
                    <a
                      href="contact.php"
                      class="btn btn--common btn--default btn--primary"
                    >
                      Contact Us
                    </a>
                  </div>
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

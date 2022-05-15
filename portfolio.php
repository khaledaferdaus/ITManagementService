<!DOCTYPE php>
<php lang="en">
  
<?php
include 'template/header.php';

$view_portfolio_sql = "SELECT * FROM portfolio";
$view_portfolio_sql_result = $conn->query($view_portfolio_sql);
?>
        <!-- ======= Main Wrapper Start =======
        <main class="main-wrapper">
          <!-- ======= Hero inner Start ======= -->
          <section class="hero-inner">
            <div
              class="hero-inner__bg hero-inner__bg_two"
              data-bg-image="assets/image/b.jpg"
            >
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="page-breadcrumb">
                      <h1 class="heading">Portfolio</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- ======= Hero inner End ======= -->

          <!-- ======= Case Studies Area Start ======= -->
          <section class="case pt-130 pb-80">
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
 -->

       


<?php 
  include 'template/footer.php';
?>
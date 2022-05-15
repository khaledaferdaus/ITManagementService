<?php
include 'template/header.php';

$view_job_post_sql = "SELECT * FROM job_post";
$view_job_post_sql_result = $conn->query($view_job_post_sql);
?>
        <!-- ======= Main Wrapper Start ======= -->
        <main class="main-wrapper">
          <!-- ======= Hero inner Start ======= -->
          <section class="hero-inner">
            <div
              class="hero-inner__bg"
              data-bg-image="assets/images/bg/inner-bg.jpg"
            >
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="page-breadcrumb">
                      <h1 class="heading">Careers</h1>
                     <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                          </li>
                          <li class="breadcrumb-item">
                            <a href="about-us.php">Company</a>
                          </li>
                          <li
                            class="breadcrumb-item active"
                            aria-current="page"
                          >
                            Careers
                          </li>
                        </ol>
                      </nav>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- ======= Hero inner End ======= -->

          <!-- ======= Careers Start ======= -->
          <section class="careers pt-125 pb-100">
            <div class="container">
              <div class="row">
                
              <div class="col-lg-6 offset-lg-3">
                  <div class="section-heading text-center mb-50">
                    <span class="section-heading__title_small">
                      work hard and be yourself
                    </span>
                    <h2 class="section-heading__title_big">
                      Showing current offers and jobs available
                    </h2>
                  </div>
                </div>
              </div>
              <div class="row">

              <?php
                  if ($view_job_post_sql_result->num_rows > 0) {
                  while ($job_post_row = $view_job_post_sql_result->fetch_assoc()) {
              ?>

                <div class="col-12 mb-30">
                  <div class="careers-block mb-30">
                    <header>
                      <h3 class="heading"><?php echo $job_post_row['title']; ?></h3>
                      <p><?php echo $job_post_row['details']; ?> </p>
                    </header>
                    <footer
                      class="careers-footer d-flex align-items-center justify-content-between flex-wrap"
                    >
                      <div class="job-meta">
                        <span class="item">
                          Company Name:
                          <span class="primary-text-color"> <?php 
                                                              $job_company_id = $job_post_row['company'];
                                                              $view_job_company_sql = "SELECT * FROM job_company WHERE id='$job_company_id'";
                                                              $view_job_company_sql_result = $conn->query($view_job_company_sql);

                                                              if ($view_job_company_sql_result->num_rows > 0) {
                                                              while ($company = $view_job_company_sql_result->fetch_assoc()) {
                                                                  echo $company['company_name'];
                                                              }}
                                                            ?> </span>
                        </span>
                        <span class="item">
                          Job Category:
                          <span class="primary-text-color">
                          <?php 
                            $job_category_id = $job_post_row['job_type'];
                            $view_job_category_sql = "SELECT * FROM job_category WHERE id='$job_category_id'";
                            $view_job_category_sql_result = $conn->query($view_job_category_sql);

                            if ($view_job_category_sql_result->num_rows > 0) {
                            while ($category = $view_job_category_sql_result->fetch_assoc()) {
                                echo $category['cat_name'];
                            }}
                          ?> 
                          </span>
                        </span>
                        <span class="item">
                        Prefered Gender:
                          <span class="primary-text-color"><?php echo $job_post_row['gender']; ?></span>
                        </span>
                      </div>
                      <div class="job-meta">
                        <span class="item">
                          Work Experience:
                          <span class="primary-text-color"><?php echo $job_post_row['vacancy']; ?></span>
                        </span>
                        <span class="item">
                          Educational Qualifications:
                          <span class="primary-text-color"><?php echo $job_post_row['vacancy']; ?></span>
                        </span>
                        <span class="item">
                          Salary:
                          <span class="primary-text-color"><?php echo $job_post_row['vacancy']; ?></span>
                        </span> <br>
                        
                      </div>
                      <div class="job-button">
                        <span class="item">
                          Application Deadline:
                          <span class="primary-text-color"><?php echo $job_post_row['vacancy']; ?> &emsp; &emsp; &emsp; &emsp; </span>
                        </span>
                        <span class="item">
                          Vacancy:
                          <span class="primary-text-color"><?php echo $job_post_row['vacancy']; ?></span>
                        </span>
                      </div>
                      <div class="job-button">
                        <a href="apply.php" class="btn btn--common btn--default btn--primary">Apply Now</a>
                      </div>
                    </footer>
                  </div>
                </div>

              <?php } } else { echo "No Data Found !"; } ?>

              </div>
            </div>
          </section>
          <!-- ======= Careers End ======= -->

          <!-- ======= Feature Start ======= -->
          <section class="feature section-bg-common pt-120 pb-110">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 offset-lg-3">
                  <div class="section-heading text-center mb-50">
                    <h2 class="section-heading__title_big">
                      Pay a visit & have some coffee!
                    </h2>
                    <h4 class="section-heading__title_medium">
                      <a class="primary-text-color" href="about-us.php"
                        >Learn more about us
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="34px"
                          height="16px"
                          viewBox="0 0 34.53 16"
                          xml:space="preserve"
                        >
                          <rect
                            class="rt-button-line"
                            y="7.6"
                            width="34"
                            height=".4"
                          ></rect>
                          <g class="rt-button-cap-fake">
                            <path
                              class="rt-button-cap"
                              d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"
                            ></path>
                          </g></svg
                      ></a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 g-10">
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img
                      src="assets/images/icon/team-leader.png"
                      alt="Support"
                    />
                    <h5>Leader’s Support</h5>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img src="assets/images/icon/teamwork.png" alt="Team" />
                    <h5>Great Team</h5>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img src="assets/images/icon/share.png" alt="Sharing" />
                    <h5>Knowledge Sharing</h5>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img src="assets/images/icon/happy-hour.png" alt="Hours" />
                    <h5>Flexible Hours</h5>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img
                      src="assets/images/icon/fried-rice.png"
                      alt="Lunches"
                    />
                    <h5>Delicious Lunches</h5>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img
                      src="assets/images/icon/healthcare.png"
                      alt="Insurance"
                    />
                    <h5>Health Insurance</h5>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img src="assets/images/icon/bonus.png" alt="Bonus" />
                    <h5>Yearly Bonus</h5>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img src="assets/images/icon/sunbed.png" alt="Vacation" />
                    <h5>Unlimited Vacation</h5>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img src="assets/images/icon/book.png" alt="Learning" />
                    <h5>Ongoing Learning</h5>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="feature-career text-center">
                    <img src="assets/images/icon/gift-box.png" alt="Gift" />
                    <h5>Free Gift</h5>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- ======= Feature End ======= -->

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
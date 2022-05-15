<?php
include 'template/header.php';

$view_team_sql = "SELECT * FROM team";
$view_team_sql_result = $conn->query($view_team_sql);
?>


        <!-- ======= Main Wrapper Start ======= -->
        <main class="main-wrapper">
          <!-- ======= Hero inner Start ======= -->
          <section class="hero-inner">
            <div
              class="hero-inner__bg hero-inner__bg_three"
              data-bg-image="assets/image/bu.jpg"
            >
             < <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="page-breadcrumb">
                      <h1 class="heading">Our Team</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- ======= Hero inner End ======= -->

          <!-- ======= Team Area Start ======= -->
          <section class="team pt-120 pb-90">
            <div class="container">
              <div class="row">
                
              <?php
                if ($view_team_sql_result->num_rows > 0) {
                while ($team_row = $view_team_sql_result->fetch_assoc()) {
                  
              ?>

                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img class="image__member" src="admin/uploads/team/<?php echo $team_row['image']; ?>" alt="Team Member"/>
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" target="_" href="<?php echo $team_row['fb_link']; ?>">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:hrhany111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" target="_" href="<?php echo $team_row['ins_link']; ?>">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" target="_" href="<?php echo $team_row['lin_link']; ?>">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation"> <?php echo $team_row['designation'];?> </span>
                      <h3 class="name"> <?php echo $team_row['name']; ?> </h3>
                    </div>
                  </div>
                </div>

                <?php } } else {echo "No Data Found !"; } ?>
                <!-- <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img
                        class="image__member"
                        src="assets/images/team/Mithela.jpg"
                        alt="Team Member"
                      />
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" href="javascript:void(0);">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:hrhany111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" href="javascript:void(0);">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" href="javascript:void(0);">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation">CRM Officer</span>
                      <h3 class="name">Mithela Akter</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img
                        class="image__member"
                        src="assets/images/team/Maria.jpg"
                        alt="Team Member"
                      />
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" href="javascript:void(0);">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:hrhany111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" href="javascript:void(0);">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" href="javascript:void(0);">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation">Digital Marketer</span>
                      <h3 class="name">Maria Hembrom</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img
                        class="image__member"
                        src="assets/images/team/khaleda.jpg"
                        alt="Team Member"
                      />
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" href="https://www.facebook.com/khaleda246">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:khaleda111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" href="javascript:void(0);">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" href="javascript:void(0);">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation">Backend Developer</span>
                      <h3 class="name">Khaleda Ferdous</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img
                      max-width: 350px;
                      height: 280px;
                        class="image__member"
                        src="assets/images/team/Sakib.jpeg"
                        alt="Team Member"
                      />
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" href="">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:hrhany111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" href="javascript:void(0);">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" href="javascript:void(0);">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation">Frontend Developer</span>
                      <h3 class="name">Mahmudul Hasan Sakib</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img
                      max-width: 350px;
                      height: 300px;
                        class="image__member"
                        src="assets/images/team/Chancal.jpg"
                        alt="Team Member"
                      />
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" href="javascript:void(0);">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:hrhany111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" href="javascript:void(0);">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" href="javascript:void(0);">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation">UI / UX DESIGNER</span>
                      <h3 class="name">Chanchal Kumar</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img
                      max-width: 350px;
                      height: 280px;
                        class="image__member"
                        src="assets/images/team/Mamun.jpeg"
                        alt="Team Member"
                      />
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" href="javascript:void(0);">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:hrhany111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" href="javascript:void(0);">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" href="javascript:void(0);">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation">UI / UX Designer</span>
                      <h3 class="name">Abdullah Al Mamun</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img
                      max-width: 350px;
                      height: 280px;
                        class="image__member"
                        src="assets/images/team/Sourov.jpg"
                        alt="Team Member"
                      />
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" href="javascript:void(0);">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:hrhany111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" href="javascript:void(0);">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" href="javascript:void(0);">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation">Database Developer</span>
                      <h3 class="name">Saurabh Adhikary</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img
                      max-width: 350px;
                      height: 280px;
                        class="image__member"
                        src="assets/images/team/Naim.jpg"
                        alt="Team Member"
                      />
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" href="javascript:void(0);">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:hrhany111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" href="javascript:void(0);">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" href="javascript:void(0);">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation">UI / UX Designer</span>
                      <h3 class="name">Naimul Islam</h3>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 mb-30">
                  <div class="team-block">
                    <div class="image">
                      <img
                      max-width: 350px;
                      height: 280px;
                        class="image__member"
                        src="assets/images/team/team-member-6.jpg"
                        alt="Team Member"
                      />
                      <div class="social">
                        <ul>
                          <li>
                            <a class="facebook" href="javascript:void(0);">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a class="twitter" href="mailto:hrhany111@gmail.com">
                              <i class="far fa-envelope"></i>
                            </a>
                          </li>
                          <li>
                            <a class="instagram" href="javascript:void(0);">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                          <li>
                            <a class="linkedin" href="javascript:void(0);">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="content">
                      <span class="designation">UI / UX Designer</span>
                      <h3 class="name">Pull Maradona</h3>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </section>
          <!-- ======= Team Area End ======= -->

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

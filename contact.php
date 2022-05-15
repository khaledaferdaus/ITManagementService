<?php 
    include 'template/header.php';

    $name = "";
    $email = "";
    $mobile = "";
    $massage = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $massage = $_POST["massage"];
    
                $add_contact_massages_sql = "INSERT INTO `contact_massages`(`name`, `email`, `mobile`, `massage`) VALUES ('$name', '$email', '$mobile', '$massage')";
                $add_contact_massages_sql_result = $conn->query($add_contact_massages_sql);
                // echo $add_contact_massages_sql_result;
    
                if ($add_contact_massages_sql_result == TRUE) {
                    echo "<script>alert('Message Send Successfully !');</script>";
                } else {
                    echo "<script>alert('Sorry! Could Not Message Send Successfully !');</script>";
                }
    }
    ?>
       

        <!-- ======= Main Wrapper Start ======= -->
        <main class="main-wrapper">
          <!-- ======= Hero inner Start ======= -->
          <section class="hero-inner">
            <div
              class="hero-inner__bg hero-inner__bg_two"
              data-bg-image="assets/image/Ban.jpg"
            >
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="page-breadcrumb">
                      <h1 class="heading">Contact Us</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- ======= Hero inner End ======= -->

          <!-- ======= Contact Area Start ======= -->
          <section class="contact pt-120 pb-100">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="section-heading text-center mb-50">
                    <span class="section-heading__title_small">
                      GET IN TOUCH
                    </span>
                    <h2 class="section-heading__title_big">
                      Get in touch with us.
                    </h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="contact-item">
                    <img
                      class="icon"
                      src="assets/images/icon/contact-location.png"
                      alt=""
                    />
                    <h3 class="title title--heading">Office Location</h3>
                    <p class="address">15/1, Iqbal Road,Mohammadpur</p>
                    <p class="address">Dhaka–1207, Bangladesh</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="contact-item">
                    <img
                      class="icon"
                      src="assets/images/icon/phone-call.png"
                      alt=""
                    />
                    <h3 class="title title--heading">Call Us</h3>
                    <p class="address">
                      <a class="link" href="tel:+928886660000"
                        >+ 92 888 666 0000</a
                      >
                    </p>
                    <p class="address">
                      <a class="link" href="tel:4152246564.">(+880) 1575-484052</a>
                    </p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="contact-item">
                    <img
                      class="icon"
                      src="assets/images/icon/contact-email.png"
                      alt=""
                    />
                    <h3 class="title title--heading">Email Us</h3>
                    <p class="address">
                      <a class="link" href="mailto:info@budevs.com">info@budevs.com</a>
                    </p>
                    <p class="address">
                      <a class="link" href="mailto:hrhany111@gmail.com">hrhany111@gmail.com</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 mb-30">
                  <div class="contact-map">
                    <div
                      class="map-box style-1"
                      data-lat="40.741895"
                      data-lng="-73.989308"
                    ></div>
                  </div>
                </div>
                <div class="col-lg-6">


                  <form class="contact-form--main" id="contact-form">
                    <div class="contact-form p-0">
                      <div class="row">
                        <div class="col-md-12">
                          <input
                            name="name"
                            type="text"
                            class="contact-form__input"
                            placeholder="Name *"
                          />
                        </div>
                        <div class="col-md-12">
                          <input
                            name="email"
                            type="text"
                            class="contact-form__input"
                            placeholder="Email *"
                          />
                        </div>
                        <div class="col-md-12">
                          <input
                            name="mobile"
                            type="number"
                            class="contact-form__input"
                            placeholder="Mobile *"
                          />
                        </div>
                        <div class="col-md-12">
                          <textarea
                            name="message"
                            class="contact-form__input contact-form__input_textarea"
                            name="message"
                            placeholder="Message"
                          ></textarea>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="contact-form__button">
                            Send Message
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="form-response mt-10"></div>
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
       
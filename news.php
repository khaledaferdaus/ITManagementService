<?php 
    include 'template/header.php';

    $view_news_sql = "SELECT * FROM news";
    $view_news_sql_result = $conn->query($view_news_sql); 
?>
       

        <!-- ======= Main Wrapper Start ======= -->
        <main class="main-wrapper">
          <!-- ======= Hero inner Start ======= -->
          <section class="hero-inner">
            <div
              class="hero-inner__bg hero-inner__bg_two"
              data-bg-image="assets/image/ecommerce.jpg"
            >
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="page-breadcrumb">
                      <h1 class="heading">News & Blogs</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- ======= Hero inner End ======= -->

          <!-- ======= Blog Area Start ======= -->
          <div class="blog pt-130 pb-100">
            <div class="container">
              <div class="row">

              <?php
                if ($view_news_sql_result->num_rows > 0) {
                while ($news_row = $view_news_sql_result->fetch_assoc()) {
              ?>
              
                <div class="col-lg-4 col-md-6 blog-item__column mb-30">
                  <div class="blog-item blog-item--software">
                    <header class="blog-item__header header">
                      <a
                        href="javascript:void(0);"
                        class="blog-item__img_link link link--image"
                      >
                        <img
                          width="551"
                          height="395"
                          class="blog-item__img"
                          src="admin/uploads/news/<?php echo $news_row['image']; ?>"
                          alt="Questions every Business"
                        />
                      </a>
                      <ul class="meta">
                        <li class="blog-item__list list">
                        <li class="blog-item__list list">
                          <i class="far fa-calendar icon"></i>
                          <span class="name name--dates"><?php echo $news_row['date']; ?></span>
                        </li>
                      </ul>
                    </header>
                    <article class="blog-item__article content">
                      <h3 class="blog-item__title">
                        <a href="blog-details.php"><?php echo $news_row['title']; ?></a>
                      </h3>
                      <p class="blog-item__text"><?php echo $news_row['detail']; ?></p>
                    </article>
                  </div>
                </div>

                <?php }} else {echo "No Data Found !";} ?>


              </div>
              <div class="row">
                <div class="col-12">
                  <div class="rt-pagination pt-30 mb-30">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"
                              ><i class="flaticon flaticon-previous"></i
                            ></span>
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"
                              ><i class="flaticon flaticon-next"></i
                            ></span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ======= Blog Area End ======= -->

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
       

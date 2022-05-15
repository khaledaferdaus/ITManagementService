<?php 
    include 'template/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Active Sliders Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Sliders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php 

                                    $view_slider_sql = "SELECT * FROM slider";
                                    $view_slider_sql_result = $conn->query($view_slider_sql);
                                    $count_active_slider = $view_slider_sql_result->num_rows;
                                    echo $count_active_slider;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Services Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Services</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                    $view_service_sql = "SELECT * FROM service";
                                    $view_service_sql_result = $conn->query($view_service_sql);
                                    $count_active_service = $view_service_sql_result->num_rows;
                                    echo $count_active_service;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Members</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php 
                                            $view_team_sql = "SELECT * FROM team";
                                            $view_team_sql_result = $conn->query($view_team_sql);
                                            $count_active_team = $view_team_sql_result->num_rows;
                                            echo $count_active_team;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Testimonials Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Testimonials</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                    $view_testimonial_sql = "SELECT * FROM testimonial";
                                    $view_testimonial_sql_result = $conn->query($view_testimonial_sql);
                                    $count_active_testimonial = $view_testimonial_sql_result->num_rows;
                                    echo $count_active_testimonial;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Active Portfolio Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Portfolio</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                    $view_portfolio_sql = "SELECT * FROM portfolio";
                                    $view_portfolio_sql_result = $conn->query($view_portfolio_sql);
                                    $count_active_portfolio = $view_portfolio_sql_result->num_rows;
                                    echo $count_active_portfolio;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Notices Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Notices</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                    $view_notice_sql = "SELECT * FROM notice";
                                    $view_notice_sql_result = $conn->query($view_notice_sql);
                                    $count_active_notice = $view_notice_sql_result->num_rows;
                                    echo $count_active_notice;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Job Post</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php 
                                            $view_job_post_sql = "SELECT * FROM job_post";
                                            $view_job_post_sql_result = $conn->query($view_job_post_sql);
                                            $count_active_job_post = $view_job_post_sql_result->num_rows;
                                            echo $count_active_job_post;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Applications</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php 
                                    $view_job_application_sql = "SELECT * FROM job_application";
                                    $view_job_application_sql_result = $conn->query($view_job_application_sql);
                                    $count_active_job_application = $view_job_application_sql_result->num_rows;
                                    echo $count_active_job_application;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    
</div>
<!-- /.container-fluid -->
<?php 
    include 'template/footer.php';
?>
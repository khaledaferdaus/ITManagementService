<?php
include 'template/header.php';

$view_job_post_sql = "SELECT * FROM job_post";
$view_job_post_sql_result = $conn->query($view_job_post_sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Job Posts</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Job Posts</a></li>
                        <li class="breadcrumb-item active">View Job Posts</li>                      
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">View Job Posts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="background-color: whitesmoke">
                                <thead>
                                    <tr style="text-align: center; background-color: gray; color: white">
                                        <th>Job Title</th>
                                        <th>Company Name</th>
                                        <th>Company Location</th>
                                        <th>Job Category</th>
                                        <th>Job Description</th>
                                        <th>Work Experience</th>
                                        <th>Educational Qualifications</th>
                                        <th>Prefered Gender</th>
                                        <th>Salary</th>
                                        <th>Job Vacancy</th>
                                        <th>Application Deadline</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if ($view_job_post_sql_result->num_rows > 0) {
                                        while ($job_post_row = $view_job_post_sql_result->fetch_assoc()) {
                                     ?>
                                            <tr>
                                                <td><?php echo $job_post_row['title']; ?></td>
                                                <td>
                                                    <?php 
                                                        $job_company_id = $job_post_row['company'];
                                                        $view_job_company_sql = "SELECT * FROM job_company WHERE id='$job_company_id'";
                                                        $view_job_company_sql_result = $conn->query($view_job_company_sql);

                                                        if ($view_job_company_sql_result->num_rows > 0) {
                                                        while ($company = $view_job_company_sql_result->fetch_assoc()) {
                                                            echo $company['company_name'];
                                                        }}
                                                    ?>
                                                </td>
                                                <td><?php echo $job_post_row['job_location']; ?></td>
                                                <td>
                                                <?php 
                                                        $job_category_id = $job_post_row['job_type'];
                                                        $view_job_category_sql = "SELECT * FROM job_category WHERE id='$job_category_id'";
                                                        $view_job_category_sql_result = $conn->query($view_job_category_sql);

                                                        if ($view_job_category_sql_result->num_rows > 0) {
                                                        while ($category = $view_job_category_sql_result->fetch_assoc()) {
                                                            echo $category['cat_name'];
                                                        }}
                                                 ?>
                                                </td>
                                                <td><?php echo $job_post_row['details']; ?></td>
                                                <td><?php echo $job_post_row['experience']; ?></td>
                                                <td><?php echo $job_post_row['educational_rec']; ?></td>
                                                <td><?php echo $job_post_row['gender']; ?></td>
                                                <td><?php echo $job_post_row['salary']; ?></td>
                                                <td><?php echo $job_post_row['vacancy']; ?></td>
                                                <td><?php echo $job_post_row['apply_deadline']; ?></td>
                                                <td>
                                                    <?php
                                                        if($job_post_row['job_status'] == "1") {
                                                            echo "Active";
                                                        } else {
                                                          echo "Inactive"; 
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="edit_post.php?id=<?php echo $job_post_row['id']; ?>" class="btn btn-secondary">Edit</a>
                                                    <a style="margin-top: 10px;" href="delete_post.php?id=<?php echo $job_post_row['id']; ?>" onclick="return alert('Are you sure wish to delete ?');" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "No Data Found !";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
<?php
include 'template/footer.php';
?>

<?php
include 'template/header.php';

$title = "";
$company = "";
$job_type = "";
$job_location = "";
$details = "";
$salary = "";
$experience = "";
$educational_rec = "";
$gender = "";
$vacancy = "";
$apply_deadline = "";
$job_status = "1";

if (isset($_GET['id'])) {
    $job_post_id = $_GET['id'];
}

$view_job_post_sql = "SELECT * FROM job_post WHERE id='$job_post_id'";
$view_job_post_sql_result = $conn->query($view_job_post_sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $company = $_POST["company"];
    $job_type = $_POST["job_type"];
    $job_location = $_POST["job_location"];
    $details = $_POST["details"];
    $salary = $_POST["salary"];
    $experience = $_POST["experience"];
    $educational_rec = $_POST["educational_rec"];
    $gender = $_POST["gender"];
    $vacancy = $_POST["vacancy"];
    $apply_deadline = $_POST["apply_deadline"];
    $job_status = $_POST["job_status"];
    

        $update_job_post_sql = "UPDATE job_post SET title='$title', company='$company', job_type='$job_type',job_location='$job_location',details='$details',salary='$salary',experience='$experience', educational_rec='$educational_rec', gender='$gender', vacancy='$vacancy', apply_deadline='$apply_deadline', job_status='$job_status' WHERE id='$job_post_id'";
        $update_job_post_sql_result = $conn->query($update_job_post_sql);

        if ($update_job_post_sql_result == TRUE) {
            echo "<script>alert('New Job Circular Posted Successfully !'); window.location.href='view_post.php';</script>";
        } else {
            echo "<script>alert('Sorry! Could Not Update New Job Circular Record !'); window.location.href='view_post.php';</script>";
        }

            $update_job_post_sql = "UPDATE job_post SET title='$title', company='$company', job_type='$job_type',job_location='$job_location',details='$details',salary='$salary',experience='$experience', educational_rec='$educational_rec', gender='$gender', vacancy='$vacancy', apply_deadline='$apply_deadline', job_status='$job_status' WHERE id='$job_post_id'";
            $update_job_post_sql_result = $conn->query($update_job_post_sql);

            if ($update_job_post_sql_result == TRUE) {
                echo "<script>alert('New job_post Record Updated Successfully !'); window.location.href='view_post.php';</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Update New job_post Record !'); window.location.href='view_post.php';</script>";
            }
    }
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Job Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Job Post</a></li>
                        <li class="breadcrumb-item active">Edit Job Post</li>                      
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
                <div class="col-md-9">
                    <!-- general form elements -->
                    <div class="card card-dark">

                        <div class="card-header" style="background-color:gray">
                            <h3 style="color: #fff;" class="card-title">Edit Job Post</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form project_start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="form-group" style="color:grey">
                                    <label>Job Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Job Title" value="<?php echo $view_job_post_sql_result['title'] ?>">
                                </div>
                            
                                <div class="form-group" style="color:grey">
                                     <label class="form-group" for="company">Company:</label>
                                    <select class="form-control input-sm" id="company" name="company" required>
                                    <option value="None" required>Select</option>
                                    <?php 
                                        $sql = "SELECT * FROM job_company";
                                        $res = $conn->query($sql);
                                        if ($res->num_rows > 0) {
                                            while ($comp_info = $res->fetch_assoc()) {
                                                $selectedCondition = ($comp_info['id'] == $view_job_post_sql_result['company']) ? 'selected': ''; 
                                                //or
                                                // $selectedCondition = "";
                                                // if($comp_info['id'] == $view_job_post_sql_result['company']){
                                                //     $selectedCondition='selected';

                                                echo '<option '.$selectedCondition.' value='.$comp_info['id'].'>'.$comp_info['company_name'].'</option>';

                                            }
                                        } else {
                                            echo '<option value="">"No company found!"</option>';
                                        }?>
                                    </select>
                                </div>

                                <div class="form-group" style="color:grey">
                                     <label class="form-group" for="job_type">Category:</label>
                                    <select class="form-control input-sm" id="job_type" name="job_type" required>
                                    <option value="None" required>Select</option>
                                    <?php 
                                        $sql = "SELECT * FROM job_category";
                                        $res = $conn->query($sql);
                                        if ($res->num_rows > 0) {
                                            while ($cat_info = $res->fetch_assoc()) {
                                                $selectedCondition = ($cat_info['id'] == $view_job_post_sql_result['job_type']) ? 'selected': ''; 
                                                //or
                                                // $selectedCondition = "";
                                                // if($cat_info['id'] == $view_job_post_sql_result['job_type']){
                                                //     $selectedCondition='selected';

                                                echo '<option '.$selectedCondition.' value='.$cat_info['id'].'>'.$cat_info['cat_name'].'</option>';

                                            }
                                        } else {
                                            echo '<option value="">"No Category found!"</option>';
                                        }?>
                                    </select>
                                </div>

                                <div class="form-group" style="color:grey">
                                    <label>Company Location:</label>
                                    <input type="text" class="form-control" name="job_location" placeholder="Enter Job Title" value="<?php echo $view_job_post_sql_result['title'] ?>">
                                </div>

                                <div class="form-group" style="color:grey">
                                    <label>Job Description:</label>
                                    <input type="text" class="form-control" name="details" placeholder="Enter Job Description" value="<?php echo $view_job_post_sql_result['details'] ?>">
                                </div>

                                <div class="form-group" style="color:grey">
                                    <label>Salary:</label>
                                    <input type="text" class="form-control" name="salary" placeholder="Enter Job Salary" value="<?php echo $view_job_post_sql_result['salary'] ?>">
                                </div>

                                <div class="form-group" style="color:grey">
                                    <label>Work Experience:</label>
                                    <input type="text" class="form-control" name="experience" placeholder="Enter Job Experience" value="<?php echo $view_job_post_sql_result['experience'] ?>">
                                </div>

                                <div class="form-group" style="color:grey">
                                    <label>Educational Qualifications:</label>
                                    <input type="text" class="form-control" name="educational_rec" placeholder="Enter Educational Qualifications" value="<?php echo $view_job_post_sql_result['educational_rec'] ?>">
                                </div>

                                <div class="form-group" style="color:grey">
                                    <label class="form-group" for="gender">Prefered Gender:</label>
                                        <select class="form-control input-sm" id="gender" name="gender" required>
                                            <option value="null">Select</option>
                                            <option value="Male" <?php if($view_job_post_sql_result['gender'] == 'Male') { echo 'selected'; } ?>>Male</option>
                                            <option value="Female" <?php if($view_job_post_sql_result['gender'] == 'Female') { echo 'selected'; } ?>>Female</option>
                                            <option value="Male/Female" <?php if($view_job_post_sql_result['gender'] == 'Male/Female') { echo 'selected'; } ?>>Male/Female</option>
                                        </select>
                                </div>

                                <div class="form-group" style="color:grey">
                                    <label>Job Vacancy:</label>
                                    <input type="text" class="form-control" name="vacancy" placeholder="Enter Job Vacancy" value="<?php echo $view_job_post_sql_result['vacancy'] ?>">
                                </div>

                                <div class="form-group" style="color:grey">
                                    <label>Application Deadline:</label>
                                    <input type="date" class="form-control" name="apply_deadline" placeholder="Enter Job Application Deadline" value="<?php echo $view_job_post_sql_result['apply_deadline'] ?>">
                                </div>

                                <div class="form-group" style="color:grey">
                                    <label>Job Status</label>
                                    <select class="form-control" name="job_status" required>
                                        <option value="0" <?php if($view_job_post_sql_result['job_status'] == '0') { echo 'selected'; } ?>>Inactive</option>
                                        <option value="1" <?php if($view_job_post_sql_result['job_status'] == '1') { echo 'selected'; } ?>>Active</option>
                                    </select>
                                </div>

                            </div>
                          <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-secondary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
<?php
include 'template/footer.php';
?>

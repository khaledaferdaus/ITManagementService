<?php
include 'template/header.php';

$company_name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $company_name = $_POST["company_name"];

            $add_job_company_sql = "INSERT INTO job_Company (company_name) VALUES ('$company_name')";
            $add_job_company_sql_result = $conn->query($add_job_company_sql);

            if ($add_job_company_sql_result == TRUE) {
                echo "<script>alert('New Company Added Successfully !');</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Add New Company!');</script>";
            }
    } 
    else {
    }
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Company</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Company</a></li>
                        <li class="breadcrumb-item active">Add Company</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Add Company</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Add Company</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" required>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                                    <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
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

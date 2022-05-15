<?php
include 'template/header.php';

$title = "";
$client_name = "";
$client_designation = "";
$comment = "";
$status = "1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $client_name = $_POST["client_name"];
    $client_designation = $_POST["client_designation"];
    $comment = $_POST["comment"];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/testimonial/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    $imageName = $image.rand();

    if (in_array($imageFileType, $extension_arr)) {

        $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $imageName);

        if ($is_uploaded) {
            $add_testimonial_sql = "INSERT INTO testimonial (title, client_name,client_designation, image,comment,status) VALUES ('$title', '$client_name','$client_designation','$imageName', '$comment', '$status')";
            $add_testimonial_sql_result = $conn->query($add_testimonial_sql);

            if ($add_testimonial_sql_result == TRUE) {
                echo "<script>alert('New Testimonial Record Added Successfully !');</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Add New Testimonial Record !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! Testimonial Photo Could Not be Uploaded !');</script>";
        }
    } else {
        echo "<script>alert('Sorry! Invalid extention Detected !');</script>";
    }
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Testimonial</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Testimonial</a></li>
                        <li class="breadcrumb-item active">Add Testimonial</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Add Testimonial</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Testimonial Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Testimonial Title" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Client's Name</label>
                                    <input type="text" class="form-control" name="client_name" placeholder="Enter Client's Name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Client's Designation</label>
                                    <input type="text" class="form-control" name="client_designation" placeholder="Enter Client's Designation" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Client's Image</label>
                                    <input type="file" class="form-control-file border" name="image" required>
                                </div>
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea class="form-control" rows="3" name="comment" placeholder="Enter Your Comment"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                                <button type="reset" name="reset" class="btn btn-danger">Reset</button>
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

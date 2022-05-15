<?php
include 'template/header.php';

$title = "";
$detail = "";
$date = "";
$status = "1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $detail = $_POST["detail"];
    $date = $_POST["date"];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/notice/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($imageFileType, $extension_arr)) {

        $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

        if ($is_uploaded) {
            $add_notice_sql = "INSERT INTO notice (title, detail, image, date, status) VALUES ('$title', '$detail', '$image', '$date', '$status')";
            $add_notice_sql_result = $conn->query($add_notice_sql);

            if ($add_notice_sql_result == TRUE) {
                echo "<script>alert('New Notice Record Added Successfully !');</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Add New Notice Record !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! Notice Photo Could Not be Uploaded !');</script>";
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
                    <h1 class="m-0">Notice</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Notice</a></li>
                        <li class="breadcrumb-item active">Add Notice</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Add Notice</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Notice Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter notice Title" required>
                                </div>
                                <div class="form-group">
                                    <label>Notice Detail</label>
                                    <textarea class="form-control" rows="3" name="detail" placeholder="Enter notice Detail"></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label>
                                    <input type="file" class="form-control-file border" name="image" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    
                                    <input type="date" class="form-control" name="date" placeholder="Enter date Link" required>
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

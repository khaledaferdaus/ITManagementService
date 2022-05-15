<?php
include 'template/header.php';

$title = "";
$su_title = "";
$details = "";
$button_text = "";
$button_link = "";
$status = "1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $su_title = $_POST["su_title"];
    $details = $_POST["details"];
    $button_text = $_POST["button_text"];
    $button_link = $_POST["button_link"];
    

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/slider/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    $imageName = $image.rand();

    if (in_array($imageFileType, $extension_arr)) {

        $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $imageName);

        if ($is_uploaded) {
            $add_slider_sql = "INSERT INTO slider (title, su_title, details, image, button_text, button_link, status) VALUES ('$title', '$su_title','$details', '$imageName', '$button_text', '$button_link', '$status')";
            $add_slider_sql_result = $conn->query($add_slider_sql);

            if ($add_slider_sql_result == TRUE) {
                echo "<script>alert('New Slider Record Added Successfully !');</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Add New Slider Record !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! Slider Photo Could Not be Uploaded !');</script>";
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
                    <h1 class="m-0">Slider</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Slider</a></li>
                        <li class="breadcrumb-item active">Add Slider</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Add Slider</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Slider Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Slider Title" required>
                                </div>
                                <div class="form-group">
                                    <label>Slider Sub Title</label>
                                    <textarea class="form-control" rows="3" name="su_title" placeholder="Enter Slider Sub Title"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label>Slider Details</label>
                                    <textarea class="form-control" rows="3" name="details" placeholder="Enter Slider Details"></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label>
                                    <input type="file" class="form-control-file border" name="image" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Slider Button Text</label>
                                    <input type="text" class="form-control" name="button_text" placeholder="Enter Slider Button Text" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Slider Button Link</label>
                                    <input type="text" class="form-control" name="button_link" placeholder="Enter Slider Button Link" required>
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

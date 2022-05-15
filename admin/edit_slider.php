<?php
include 'template/header.php';

$slider_id = "";
$title = "";
$su_title = "";
$details = "";
$button_text = "";
$button_link = "";
$status = "";

if (isset($_GET['id'])) {
    $slider_id = $_GET['id'];
}

$view_slider_sql = "SELECT * FROM slider WHERE id='$slider_id'";
$view_slider_sql_result = $conn->query($view_slider_sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $su_title = $_POST["su_title"];
    $details = $_POST["details"];
    $button_text = $_POST["button_text"];
    $button_link = $_POST["button_link"];
    $status = $_POST["status"];
    
    $slider_prev_image = $view_slider_sql_sql_result['image'];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/slider/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    
    if($image == "") {
        $update_slider_sql = "UPDATE slider SET title='$title', su_title='$su_title', details='$details', button_text='$button_text', button_link='$button_link', status='$status' WHERE id='$slider_id'";
        $update_slider_sql_result = $conn->query($update_slider_sql);

        if ($update_slider_sql_result == TRUE) {
            echo "<script>alert('New Slider Record Updated Successfully !'); window.location.href='view_slider.php';</script>";
        } else {
            echo "<script>alert('Sorry! Could Not Update New Slider Record !'); window.location.href='view_slider.php';</script>";
        }
    } else {
        if (in_array($imageFileType, $extension_arr)) {
        
            unlink('uploads/slider/' . $slider_prev_image);

            $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

            if ($is_uploaded) {
                $update_slider_sql = "UPDATE slider SET title='$title', su_title='$su_title', details='$details', button_text='$button_text', button_link='$button_link', status='$status' WHERE id='$slider_id'";
                $update_slider_sql_result = $conn->query($update_slider_sql);

                if ($update_slider_sql_result == TRUE) {
                    echo "<script>alert('New Slider Record Updated Successfully !'); window.location.href='view_slider.php';</script>";
                } else {
                    echo "<script>alert('Sorry! Could Not Update New Slider Record !'); window.location.href='view_slider.php';</script>";
                }
            } else {
                echo "<script>alert('Sorry! Slider Photo Could Not be Uploaded !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! Invalid extention Detected !');</script>";
        }
    }
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Service</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Slider</a></li>
                        <li class="breadcrumb-item active">Edit Slider</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Edit Slider</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Slider Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Slider Title" value="<?php echo $view_slider_sql_result['title'] ?>">
                                </div>
                                 <div class="form-group" style="color:grey">
                                    <label>Slider Sub Title</label>
                                    <input type="text" class="form-control" name="su_title" placeholder="Enter Sub Slider Title" value="<?php echo $view_slider_sql_result['su_title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Slider Detail</label>
                                    <textarea class="form-control" rows="3" name="details" placeholder="Enter Slider Detail"><?php echo $view_slider_sql_result['details'] ?></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label><br/>
                                    <img style="width: 150px; height: auto; margin: 10px;" src="uploads/slider/<?php echo $view_slider_sql_result['image']; ?>" alt="No Image Preview" />
                                    <input type="file" class="form-control-file border" name="image">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Button Text</label>
                                    <input type="text" class="form-control" name="button_text" placeholder="Enter Button Text" value="<?php echo $view_slider_sql_result['button_text'] ?>">
                                </div>
                                  <div class="form-group" style="color:grey">
                                    <label>Button Link</label>
                                    <input type="text" class="form-control" name="button_link" placeholder="Enter Button Link" value="<?php echo $view_slider_sql_result['button_link'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="0" <?php if($view_slider_sql_result['status'] == '0') { echo 'selected'; } ?>>Inactive</option>
                                        <option value="1" <?php if($view_slider_sql_result['status'] == '1') { echo 'selected'; } ?>>Active</option>
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

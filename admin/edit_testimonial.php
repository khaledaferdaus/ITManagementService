<?php
include 'template/header.php';

$testimonial_id = "";
$title = "";
$client_name = "";
$client_designation = "";
$comment = "";
$status = "";

if (isset($_GET['id'])) {
    $testimonial_id = $_GET['id'];
}

$view_testimonial_sql = "SELECT * FROM testimonial WHERE id='$testimonial_id'";
$view_testimonial_sql_result = $conn->query($view_testimonial_sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $client_name = $_POST["client_name"];
    $client_designation = $_POST["client_designation"];
    $comment = $_POST["comment"];
    $status = $_POST["status"];
    
    $testimonial_prev_image = $view_testimonial_sql_result['image'];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/testimonial/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    
    if($image == "") {
        $update_testimonial_sql = "UPDATE testimonial SET title='$title', client_name='$client_name', client_designation='$client_designation', comment='$comment', status='$status' WHERE id='$testimonial_id'";
        $update_testimonial_sql_result = $conn->query($update_testimonial_sql);

        if ($update_testimonial_sql_result == TRUE) {
            echo "<script>alert('New testimonial Record Updated Successfully !'); window.location.href='view_testimonial.php';</script>";
        } else {
            echo "<script>alert('Sorry! Could Not Update New testimonial Record !'); window.location.href='view_testimonial.php';</script>";
        }
    } else {
        if (in_array($imageFileType, $extension_arr)) {
        
            unlink('uploads/testimonial/' . $testimonial_prev_image);

            $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

            if ($is_uploaded) {
                $update_testimonial_sql = "UPDATE testimonial SET title='$title', client_name='$client_name', client_designation='$client_designation', comment='$comment', status='$status' WHERE id='$testimonial_id'";
                $update_testimonial_sql_result = $conn->query($update_testimonial_sql);

                if ($update_testimonial_sql_result == TRUE) {
                    echo "<script>alert('New testimonial Record Updated Successfully !'); window.location.href='view_testimonial.php';</script>";
                } else {
                    echo "<script>alert('Sorry! Could Not Update New testimonial Record !'); window.location.href='view_testimonial.php';</script>";
                }
            } else {
                echo "<script>alert('Sorry! testimonial Photo Could Not be Uploaded !');</script>";
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
                    <h1 class="m-0">testimonial</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">testimonial</a></li>
                        <li class="breadcrumb-item active">Edit testimonial</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Edit testimonial</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Testimonial Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Testimonial Title" value="<?php echo $view_testimonial_sql_result['title'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Clients Name</label>
                                    <input type="text" class="form-control" name="client_name" placeholder="Enter Client Name" value="<?php echo $view_testimonial_sql_result['client_name'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Clients Designation</label>
                                    <input type="text" class="form-control" name="client_designation" placeholder="Enter Client Designation" value="<?php echo $view_testimonial_sql_result['client_designation'] ?>">
                                </div>
                                 <div class="form-group" style="color:grey">
                                    <label>Image</label><br/>
                                    <img style="width: 150px; height: auto; margin: 10px;" src="uploads/testimonial/<?php echo $view_testimonial_sql_result['image']; ?>" alt="No Image Preview" />
                                    <input type="file" class="form-control-file border" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea class="form-control" rows="3" name="comment" placeholder="Enter testimonial Detail"><?php echo $view_testimonial_sql_result['comment'] ?></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Employee Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="0" <?php if($view_testimonial_sql_result['status'] == '0') { echo 'selected'; } ?>>Inactive</option>
                                        <option value="1" <?php if($view_testimonial_sql_result['status'] == '1') { echo 'selected'; } ?>>Active</option>
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

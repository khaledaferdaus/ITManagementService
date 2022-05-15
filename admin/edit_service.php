<?php
include 'template/header.php';

$service_id = "";
$title = "";
$details = "";
$broacher = "";
$status = "";

if (isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];
}

$view_service_sql = "SELECT * FROM service WHERE id='$service_id'";
$view_service_sql_result = $conn->query($view_service_sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $details = $_POST["details"];
    $broacher = $_POST["broacher"];
    $status = $_POST["status"];
    
    $service_prev_image = $view_service_sql_result['image'];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/service/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    
    if($image == "") {
        $update_service_sql = "UPDATE service SET title='$title', details='$details', broacher='$broacher', status='$status' WHERE id='$service_id'";
        $update_service_sql_result = $conn->query($update_service_sql);

        if ($update_service_sql_result == TRUE) {
            echo "<script>alert('New Service Record Updated Successfully !'); window.location.href='view_services.php';</script>";
        } else {
            echo "<script>alert('Sorry! Could Not Update New Service Record !'); window.location.href='view_services.php';</script>";
        }
    } else {
        if (in_array($imageFileType, $extension_arr)) {
        
            unlink('uploads/service/' . $service_prev_image);

            $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

            if ($is_uploaded) {
                $update_service_sql = "UPDATE service SET title='$title', details='$details', image='$image', broacher='$broacher', status='$status' WHERE id='$service_id'";
                $update_service_sql_result = $conn->query($update_service_sql);

                if ($update_service_sql_result == TRUE) {
                    echo "<script>alert('New Service Record Updated Successfully !'); window.location.href='view_services.php';</script>";
                } else {
                    echo "<script>alert('Sorry! Could Not Update New Service Record !'); window.location.href='view_services.php';</script>";
                }
            } else {
                echo "<script>alert('Sorry! Service Photo Could Not be Uploaded !');</script>";
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
                        <li class="breadcrumb-item"><a href="#">Service</a></li>
                        <li class="breadcrumb-item active">Edit Service</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Edit Service</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Service Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Service Title" value="<?php echo $view_service_sql_result['title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Service Detail</label>
                                    <textarea class="form-control" rows="3" name="details" placeholder="Enter Service Detail"><?php echo $view_service_sql_result['details'] ?></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label><br/>
                                    <img style="width: 150px; height: auto; margin: 10px;" src="uploads/service/<?php echo $view_service_sql_result['image']; ?>" alt="No Image Preview" />
                                    <input type="file" class="form-control-file border" name="image">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Broacher Link</label>
                                    <input type="text" class="form-control" name="broacher" placeholder="Enter Broacher Link" value="<?php echo $view_service_sql_result['broacher'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Employee Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="0" <?php if($view_service_sql_result['status'] == '0') { echo 'selected'; } ?>>Inactive</option>
                                        <option value="1" <?php if($view_service_sql_result['status'] == '1') { echo 'selected'; } ?>>Active</option>
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

<?php
include 'template/header.php';

$notice_id = "";
$title = "";
$detail = "";
$date = "";
$status = "";

if (isset($_GET['id'])) {
    $notice_id = $_GET['id'];
}

$view_notice_sql = "SELECT * FROM notice WHERE id='$notice_id'";
$view_notice_sql_result = $conn->query($view_notice_sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $detail = $_POST["detail"];
    $date = $_POST["date"];
    $status = $_POST["status"];
    
    $notice_prev_image = $view_notice_sql_result['image'];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/notice/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    
    if($image == "") {
        $update_notice_sql = "UPDATE notice SET title='$title', detail='$detail', date='$date', status='$status' WHERE id='$notice_id'";
        $update_notice_sql_result = $conn->query($update_notice_sql);

        if ($update_notice_sql_result == TRUE) {
            echo "<script>alert('New Notice Record Updated Successfully !'); window.location.href='view_notice.php';</script>";
        } else {
            echo "<script>alert('Sorry! Could Not Update New Notice Record !'); window.location.href='view_notice.php';</script>";
        }
    } else {
        if (in_array($imageFileType, $extension_arr)) {
        
            unlink('uploads/notice/' . $notice_prev_image);

            $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

            if ($is_uploaded) {
                $update_notice_sql = "UPDATE notice SET title='$title', detail='$detail', image='$image', date='$date', status='$status' WHERE id='$notice_id'";
                $update_notice_sql_result = $conn->query($update_notice_sql);

                if ($update_notice_sql_result == TRUE) {
                    echo "<script>alert('New Notice Record Updated Successfully !'); window.location.href='view_notice.php';</script>";
                } else {
                    echo "<script>alert('Sorry! Could Not Update New Notice Record !'); window.location.href='view_notice.php';</script>";
                }
            } else {
                echo "<script>alert('Sorry! Notice Photo Could Not be Uploaded !');</script>";
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
                    <h1 class="m-0">Notice</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Notice</a></li>
                        <li class="breadcrumb-item active">Edit Notice</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Edit Notice</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Notice Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Notice Title" value="<?php echo $view_notice_sql_result['title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Notice Detail</label>
                                    <textarea class="form-control" rows="3" name="detail" placeholder="Enter Notice Detail"><?php echo $view_notice_sql_result['detail'] ?></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label><br/>
                                    <img style="width: 150px; height: auto; margin: 10px;" src="uploads/notice/<?php echo $view_notice_sql_result['image']; ?>" alt="No Image Preview" />
                                    <input type="file" class="form-control-file border" name="image">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date" placeholder="Enter Date" value="<?php echo $view_notice_sql_result['date'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Employee Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="0" <?php if($view_notice_sql_result['status'] == '0') { echo 'selected'; } ?>>Inactive</option>
                                        <option value="1" <?php if($view_notice_sql_result['status'] == '1') { echo 'selected'; } ?>>Active</option>
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

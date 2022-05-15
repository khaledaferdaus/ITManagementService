<?php
include 'template/header.php';

$team_id = "";
$name = "";
$designation = "";
$fb_link = "";
$tw_link = "";
$ins_link = "";
$lin_link = "";
$status = "";

if (isset($_GET['id'])) {
    $team_id = $_GET['id'];
}

$view_team_sql = "SELECT * FROM team WHERE id='$team_id'";
$view_team_sql_result = $conn->query($view_team_sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $designation = $_POST["designation"];
    $fb_link = $_POST["fb_link"];
    $tw_link = $_POST["tw_link"];
    $ins_link = $_POST["ins_link"];
    $lin_link = $_POST["lin_link"];
    $status = $_POST["status"];
    
    $team_prev_image = $view_team_sql_result['image'];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/team/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    
    if($image == "") {
        $update_team_sql = "UPDATE team SET name='$name', designation='$designation', fb_link='$fb_link', tw_link='$tw_link', ins_link='$ins_link', lin_link='$lin_link', status='$status' WHERE id='$team_id'";
        $update_team_sql_result = $conn->query($update_team_sql);

        if ($update_team_sql_result == TRUE) {
            echo "<script>alert('New team Record Updated Successfully !'); window.location.href='view_members.php';</script>";
        } else {
            echo "<script>alert('Sorry! Could Not Update New team Record !'); window.location.href='view_members.php';</script>";
        }
    } else {
        if (in_array($imageFileType, $extension_arr)) {
        
            unlink('uploads/team/' . $team_prev_image);

            $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

            if ($is_uploaded) {
                $update_team_sql = "UPDATE team SET name='$name', designation='$designation', fb_link='$fb_link', tw_link='$tw_link', ins_link='$ins_link', lin_link='$lin_link', status='$status' WHERE id='$team_id'";
                $update_team_sql_result = $conn->query($update_team_sql);

                // if ($update_team_sql_result == TRUE) {
                //     echo "<script>alert('New team Record Updated Successfully !'); window.location.href='view_members.php';</script>";
                // } else {
                //     echo "<script>alert('Sorry! Could Not Update New team Record !'); window.location.href='view_members.php';</script>";
                // }
            } else {
                echo "<script>alert('Sorry! team Photo Could Not be Uploaded !');</script>";
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
                    <h1 class="m-0">Team</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Team</a></li>
                        <li class="breadcrumb-item active">Edit Team</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Edit Team</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Member Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Team Name" value="<?php echo $view_team_sql_result['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Member Designation</label>
                                    <textarea class="form-control" rows="3" name="designation" placeholder="Enter Team Designation"><?php echo $view_team_sql_result['designation'] ?></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label><br/>
                                    <img style="width: 150px; height: auto; margin: 10px;" src="uploads/team/<?php echo $view_team_sql_result['image']; ?>" alt="No Image Preview" />
                                    <input type="file" class="form-control-file border" name="image">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Facebook Profile Link</label>
                                    <input type="text" class="form-control" name="fb_link" placeholder="Enter Facebook Profile Link" value="<?php echo $view_team_sql_result['fb_link'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Enter Email Address</label>
                                    <input type="email" class="form-control" name="tw_link" placeholder="Enter Email Address" value="<?php echo $view_team_sql_result['tw_link'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Instagram Profile Link</label>
                                    <input type="text" class="form-control" name="ins_link" placeholder="Enter Instagram Profile Link" value="<?php echo $view_team_sql_result['ins_link'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Linkedin Profile Link</label>
                                    <input type="text" class="form-control" name="lin_link" placeholder="Enter Linkedin Profile Link" value="<?php echo $view_team_sql_result['lin_link'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Employee Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="0" <?php if($view_team_sql_result['status'] == '0') { echo 'selected'; } ?>>Inactive</option>
                                        <option value="1" <?php if($view_team_sql_result['status'] == '1') { echo 'selected'; } ?>>Active</option>
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

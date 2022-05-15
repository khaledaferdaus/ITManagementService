<?php
include 'template/header.php';

$name = "";
$designation = "";
$fb_link = "";
$tw_link = "";
$ins_link = "";
$lin_link = "";
$status = "1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $designation = $_POST["designation"];
    $fb_link = $_POST["fb_link"];
    $tw_link = $_POST["tw_link"];
    $ins_link = $_POST["ins_link"];
    $lin_link = $_POST["lin_link"];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/team/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($imageFileType, $extension_arr)) {

        $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

        if ($is_uploaded) {
            $add_team_sql = "INSERT INTO team (name, designation, image, fb_link,tw_link,ins_link,lin_link, status) VALUES ('$name', '$designation', '$image', '$fb_link', '$tw_link', '$ins_link', '$lin_link', '$status')";
            $add_team_sql_result = $conn->query($add_team_sql);

            if ($add_team_sql_result == TRUE) {
                echo "<script>alert('New team Record Added Successfully !');</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Add New team Record !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! team Photo Could Not be Uploaded !');</script>";
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
                    <h1 class="m-0">Team</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Team</a></li>
                        <li class="breadcrumb-item active">Add Team</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Add Team</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Team Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label>Team Designation</label>
                                    <textarea class="form-control" rows="3" name="designation" placeholder="Enter designation"></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label>
                                    <input type="file" class="form-control-file border" name="image" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Facebook Profile Link</label>
                                    <input type="text" class="form-control" name="fb_link" placeholder="Enter Facebook ID Link" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Enter Email Address</label>
                                    <input type="email" class="form-control" name="tw_link" placeholder="Enter Email Address" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Instagram Profile Link</label>
                                    <input type="text" class="form-control" name="ins_link" placeholder="Enter Instagram ID Link" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Linkedin Profile Link</label>
                                    <input type="text" class="form-control" name="lin_link" placeholder="Enter Linkedin ID Link" required>
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


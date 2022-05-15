<?php
include 'template/header.php';

$title = "";
$slogan = "";
$email = "";
$logo_alt = "";
$open_hour = "";
$address = "";
$facebook_link = "";
$twitter_link = "";
$linkedin_link = "";
$youtube_link = "";
$copyright_text = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $slogan = $_POST["slogan"];
    $email = $_POST["email"];
    $logo_alt = $_POST["logo_alt"];
    $open_hour = $_POST["open_hour"];
    $address = $_POST["address"];
    $facebook_link = $_POST["facebook_link"];
    $twitter_link = $_POST["twitter_link"];
    $linkedin_link = $_POST["linkedin_link"];
    $youtube_link = $_POST["youtube_link"];
    $copyright_text = $_POST["copyright_text"];
    $phone = $_POST["phone"];

    $logo = $_FILES['logo']['name'];
    $target_dir = "uploads/general";
    $target_file = $target_dir . basename($_FILES['logo']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    $logoName = $logo.rand();

    if (in_array($imageFileType, $extension_arr)) {

        $is_uploaded = move_uploaded_file($_FILES['logo']['tmp_name'], $target_dir . $logoName);

        if ($is_uploaded) {
            $add_general_setting_sql = "INSERT INTO general_setting (title, slogan, logo, email, logo_alt, open_hour, address, facebook_link, twitter_link, linkedin_link, youtube_link, copyright_text, phone) VALUES ('$title', '$slogan', '$logoName','$email', '$logo_alt', '$open_hour','$address', '$facebook_link', '$twitter_link','$linkedin_link', '$youtube_link', '$copyright_text', '$phone')";
            $add_general_setting_sql_result = $conn->query($add_general_setting_sql);

            if ($add_general_setting_sql_result == TRUE) {
                echo "<script>alert('New general_setting Record Added Successfully !');</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Add New general_setting Record !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! general_setting Photo Could Not be Uploaded !');</script>";
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
                    <h1 class="m-0">Add Site</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Add Site</a></li>
                        <li class="breadcrumb-item active">Add New Site</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Add New Site</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>Site Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Site Slogan</label>
                                    <input type="text" class="form-control" name="slogan" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Site Logo</label>
                                    <input type="file" class="form-control-file border" name="logo" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Logo Name</label>
                                    <input type="text" class="form-control" name="logo_alt" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Facebook Profile Link</label>
                                    <input type="text" class="form-control" name="facebook_link" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Twitter Profile Link</label>
                                    <input type="text" class="form-control" name="twitter_link" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Linkedin Profile Link</label>
                                    <input type="text" class="form-control" name="linkedin_link" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Youtube Profile Link</label>
                                    <input type="text" class="form-control" name="youtube_link" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Copyright Text</label>
                                    <input type="text" class="form-control" name="copyright_text" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Open Hour</label>
                                    <input type="time" class="form-control" name="open_hour" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Phone Number</label>
                                    <input type="number" class="form-control" name="phone" placeholder="Enter your name" required>
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


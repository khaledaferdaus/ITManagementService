<?php
include 'template/header.php';

$title = "";
$detail = "";
$date = "";
$report_name = "";

if (isset($_GET['id'])) {
    $news_id = $_GET['id'];
}

$view_news_sql = "SELECT * FROM news WHERE id='$news_id'";
$view_news_sql_result = $conn->query($view_news_sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $detail = $_POST["detail"];
    $date = $_POST["date"];
    $report_name = $_POST["report_name"];
    
    $news_prev_image = $view_news_sql_result['image'];

    $image = $_FILES['image']['name'];
    $target_dir = "uploads/news/";
    $target_file = $target_dir . basename($_FILES['image']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed File Extensions
    $extension_arr = array('jpg', 'jpeg', 'png', 'gif');
    
    if($image == "") {
        $update_news_sql = "UPDATE news SET title='$title', detail='$detail', date='$date', report_name='$report_name' WHERE id='$news_id'";
        $update_news_sql_result = $conn->query($update_news_sql);

        if ($update_news_sql_result == TRUE) {
            echo "<script>alert('New news Record Updated Successfully !'); window.location.href='view_news.php';</script>";
        } else {
            echo "<script>alert('Sorry! Could Not Update New news Record !'); window.location.href='view_news.php';</script>";
        }
    } else {
        if (in_array($imageFileType, $extension_arr)) {
        
            unlink('uploads/news/' . $news_prev_image);

            $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);

            if ($is_uploaded) {
                $update_news_sql = "UPDATE news SET title='$title', detail='$detail', image='$image', date='$date', report_name='$report_name' WHERE id='$news_id'";
                $update_news_sql_result = $conn->query($update_news_sql);

                if ($update_news_sql_result == TRUE) {
                    echo "<script>alert('New news Record Updated Successfully !'); window.location.href='view_news.php';</script>";
                } else {
                    echo "<script>alert('Sorry! Could Not Update New news Record !'); window.location.href='view_news.php';</script>";
                }
            } else {
                echo "<script>alert('Sorry! news Photo Could Not be Uploaded !');</script>";
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
                    <h1 class="m-0">news</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">news</a></li>
                        <li class="breadcrumb-item active">Edit news</li>                      
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
                            <h3 style="color: #fff;" class="card-title">Edit news</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group" style="color:grey">
                                    <label>news Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter News Title" value="<?php echo $view_news_sql_result['title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>news Detail</label>
                                    <textarea class="form-control" rows="3" name="detail" placeholder="Enter News Detail"><?php echo $view_news_sql_result['detail'] ?></textarea>
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Image</label><br/>
                                    <img style="width: 150px; height: auto; margin: 10px;" src="uploads/news/<?php echo $view_news_sql_result['image']; ?>" alt="No Image Preview" />
                                    <input type="file" class="form-control-file border" name="image">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date" placeholder="Enter Date" value="<?php echo $view_news_sql_result['date'] ?>">
                                </div>
                                <div class="form-group" style="color:grey">
                                    <label>Reporter Name</label>
                                    <input type="text" class="form-control" name="report_name" placeholder="Enter Reporter Name" value="<?php echo $view_news_sql_result['report_name'] ?>">
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

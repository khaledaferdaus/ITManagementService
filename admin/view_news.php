
<?php
include 'template/header.php';

$view_news_sql = "SELECT * FROM news";
$view_news_sql_result = $conn->query($view_news_sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">News</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">News</a></li>
                        <li class="breadcrumb-item active">View News</li>                      
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">View News</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="background-color: whitesmoke">
                                <thead>
                                    <tr style="text-align: center; background-color: gray; color: white">
                                        <th>Preview</th>
                                        <th>Title</th>
                                        <th>Reporter Name</th>
                                        <th>Details</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($view_news_sql_result->num_rows > 0) {
                                        while ($news_row = $view_news_sql_result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <img style="height: 150px; width: 100%" src="uploads/news/<?php echo $news_row['image']; ?>" alt="No Image" />
                                                </td>
                                                    <td><?php echo $news_row['title']; ?></td>
                                                    <td><?php echo $news_row['report_name']; ?></td>
                                                    <td><?php echo $news_row['detail']; ?></td>
                                                    <td><?php echo $news_row['date']; ?></td>
                                                <td>
                                                    <a href="edit_news.php?id=<?php echo $news_row['id']; ?>" class="btn btn-secondary">Edit</a>
                                                    <a href="delete_news.php?id=<?php echo $news_row['id']; ?>" onclick="return alert('Are you sure wish to delete ?');" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "No Data Found !";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
<?php
include 'template/footer.php';
?>


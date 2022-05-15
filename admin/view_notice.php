
<?php
include 'template/header.php';

$view_notice_sql = "SELECT * FROM notice";
$view_notice_sql_result = $conn->query($view_notice_sql);
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
                        <li class="breadcrumb-item active">View Notice</li>                      
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
                            <h3 class="card-title">View Notice</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="background-color: whitesmoke">
                                <thead>
                                    <tr style="text-align: center; background-color: gray; color: white">
                                        <th>Preview</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($view_notice_sql_result->num_rows > 0) {
                                        while ($notice_row = $view_notice_sql_result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <img style="height: 150px; width: 100%" src="uploads/notice/<?php echo $notice_row['image']; ?>" alt="No Image" />
                                                </td>
                                                <td><?php echo $notice_row['title']; ?></td>
                                                <td><?php echo $notice_row['detail']; ?></td>
                                                <td><?php echo $notice_row['date']; ?></td>
                                                <td>
                                                    <?php
                                                        if($notice_row['status'] == "1") {
                                                            echo "Active";
                                                        } else {
                                                          echo "Inactive"; 
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="edit_notice.php?id=<?php echo $notice_row['id']; ?>" class="btn btn-secondary">Edit</a>
                                                    <a href="delete_notice.php?id=<?php echo $notice_row['id']; ?>" onclick="return alert('Are you sure wish to delete ?');" class="btn btn-danger">Delete</a>
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


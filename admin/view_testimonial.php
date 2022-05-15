<?php
include 'template/header.php';

$view_testimonial_sql = "SELECT * FROM testimonial";
$view_testimonial_sql_result = $conn->query($view_testimonial_sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Testimonial</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Testimonial</a></li>
                        <li class="breadcrumb-item active">View Testimonials</li>                      
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
                            <h3 class="card-title">View Testimonials</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="background-color: whitesmoke">
                                <thead>
                                    <tr style="text-align: center; background-color: gray; color: white">
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($view_testimonial_sql_result->num_rows > 0) {
                                        while ($testimonial_row = $view_testimonial_sql_result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <img style="height: 150px; width: 100%" src="uploads/testimonial/<?php echo $testimonial_row['image']; ?>" alt="No Image" />
                                                </td>
                                                <td><?php echo $testimonial_row['title']; ?></td>
                                                <td><?php echo $testimonial_row['client_name']; ?></td>
                                                <td><?php echo $testimonial_row['client_designation']; ?></td>
                                                <td><?php echo $testimonial_row['comment']; ?></td>
                                                <td>
                                                    <?php
                                                        if($testimonial_row['status'] == "1") {
                                                            echo "Active";
                                                        } else {
                                                          echo "Inactive"; 
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="edit_testimonial.php?id=<?php echo $testimonial_row['id']; ?>" class="btn btn-secondary">Edit</a>
                                                    <a href="delete_testimonial.php?id=<?php echo $testimonial_row['id']; ?>" onclick="return alert('Are you sure wish to delete ?');" class="btn btn-danger">Delete</a>
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


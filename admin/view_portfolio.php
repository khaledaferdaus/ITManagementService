<?php
include 'template/header.php';

$view_portfolio_sql = "SELECT * FROM portfolio";
$view_portfolio_sql_result = $conn->query($view_portfolio_sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Portfolio</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                        <li class="breadcrumb-item active">View Portfolio</li>                      
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
                            <h3 class="card-title">View Portfolio</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="background-color: whitesmoke">
                                <thead>
                                    <tr style="text-align: center; background-color: gray; color: white">
                                        <th>Preview</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Clients Name</th>
                                        <th>Project Start</th>
                                        <th>Project End</th>
                                        <th>Technology Used</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if ($view_portfolio_sql_result->num_rows > 0) {
                                        while ($portfolio_row = $view_portfolio_sql_result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <img style="height: 150px; width: 100%" src="uploads/portfolio/<?php echo $portfolio_row['image']; ?>" alt="No Image" />
                                                </td>
                                                <td><?php echo $portfolio_row['title']; ?></td>
                                                <td><?php echo $portfolio_row['detail']; ?></td>
                                                <td><?php echo $portfolio_row['client_name']; ?></td>
                                                <td><?php echo $portfolio_row['project_start']; ?></td>
                                                <td><?php echo $portfolio_row['project_end']; ?></td>
                                                <td><?php echo $portfolio_row['technology_used']; ?></td>
                                                 <td><?php echo $portfolio_row['category']; ?></td>
                                                <td>
                                                    <?php
                                                        if($portfolio_row['status'] == "1") {
                                                            echo "Active";
                                                        } else {
                                                          echo "Inactive"; 
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="edit_portfolio.php?id=<?php echo $portfolio_row['id']; ?>" class="btn btn-secondary">Edit</a>
                                                    <a href="delete_portfolio.php?id=<?php echo $portfolio_row['id']; ?>" onclick="return alert('Are you sure wish to delete ?');" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>

                                            <?php }} else {echo "No Data Found !";} ?>
                                            
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

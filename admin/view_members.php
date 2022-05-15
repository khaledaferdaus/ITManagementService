<?php
include 'template/header.php';

$view_team_sql = "SELECT * FROM team";
$view_team_sql_result = $conn->query($view_team_sql);
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
                        <li class="breadcrumb-item active">View teams</li>                      
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
                            <h3 class="card-title">View Teams</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="background-color: whitesmoke">
                                <thead>
                                    <tr style="text-align: center; background-color: gray; color: white">
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Facebook Profile</th>
                                        <th>Twitter Profile</th>
                                        <th>Instagram Profile</th>
                                        <th>Linkedin Profile</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($view_team_sql_result->num_rows > 0) {
                                        while ($team_row = $view_team_sql_result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <img style="height: 150px; width: 100%" src="uploads/team/<?php echo $team_row['image']; ?>" alt="No Image" />
                                                </td>
                                                <td><?php echo $team_row['name']; ?></td>
                                                <td><?php echo $team_row['designation']; ?></td>
                                                <td><?php echo $team_row['fb_link']; ?></td>
                                                <td><?php echo $team_row['tw_link']; ?></td>
                                                <td><?php echo $team_row['ins_link']; ?></td>
                                                <td><?php echo $team_row['lin_link']; ?></td>
                                                <td>
                                                    <?php
                                                        if($team_row['status'] == "1") {
                                                            echo "Active";
                                                        } else {
                                                          echo "Inactive"; 
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="edit_member.php?id=<?php echo $team_row['id']; ?>" class="btn btn-secondary">Edit</a>
                                                    <a href="delete_member.php?id=<?php echo $team_row['id']; ?>" onclick="return alert('Are you sure wish to delete ?');" class="btn btn-danger">Delete</a>
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






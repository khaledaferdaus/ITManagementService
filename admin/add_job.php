<?php 
    include 'template/header.php';

    $title = "";
    $company = "";
    $job_type = "";
    $job_location = "";
    $details = "";
    $salary = "";
    $experience = "";
    $educational_rec = "";
    $gender = "";
    $vacancy = "";
    $apply_deadline = "";
    $job_status = "1";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $job_type = $_POST["job_type"];
        $job_location = $_POST["job_location"];
        $details = $_POST["details"];
        $salary = $_POST["salary"];
        $experience = $_POST["experience"];
        $educational_rec = $_POST["educational_rec"];
        $gender = $_POST["gender"];
        $vacancy = $_POST["vacancy"];
        $apply_deadline = $_POST["apply_deadline"];
    
                $add_job_post_sql = "INSERT INTO `job_post`(`title`, `company`, `details`, `job_location`, `job_type`, `salary`, `apply_deadline`, `educational_rec`, `job_status`, `gender`, `vacancy`, `experience`) VALUES ('$title', '$company', '$details', '$job_location', '$job_type', '$salary', '$apply_deadline', '$educational_rec', '$job_status', '$gender', '$vacancy', '$experience')";
                $add_job_post_sql_result = $conn->query($add_job_post_sql);
                // echo $add_job_post_sql_result;
    
                if ($add_job_post_sql_result == TRUE) {
                    echo "<script>alert('New Job Category Record Added Successfully !');</script>";
                } else {
                    echo "<script>alert('Sorry! Could Not Add New Job Category Record !');</script>";
                }
    }
    ?>

<form action="" method="post">

    <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                      <h1 style="margin-left: 20px;" class="page-header">Add New Job Circular</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                
                <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="title">Job Title:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="title" name="title" placeholder="Job Title"   autocomplete="none" required/> 
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="company">Company Name:</label>

                      <div class="col-md-8">
                        <select class="form-control input-sm" id="company" name="company" required>
                          <option value="None" required>Select</option>
                          <?php 
                            $sql = "SELECT * FROM job_company";
                            $res = $conn->query($sql);
                            if ($res->num_rows > 0) {
                                while ($comp_info = $res->fetch_assoc()) {
                                    echo '<option value='.$comp_info['id'].'>'.$comp_info['company_name'].'</option>';
                                }
                            } else {
                                echo '<option value="">"No company found!"</option>';
                            }
                        
                        ?>
                        </select>
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "job_type">Category:</label>

                      <div class="col-md-8">
                        <select class="form-control input-sm" id="job_type" name="job_type" required>
                          <option value="None" required>Select</option>
                          <?php 
                            $sql = "SELECT * FROM job_category";
                            $res = $conn->query($sql);
                            if ($res->num_rows > 0) {
                                while ($cat_info = $res->fetch_assoc()) {
                                    echo '<option value='.$cat_info['id'].'>'.$cat_info['cat_name'].'</option>';
                                }
                            } else {
                                echo '<option value="">"No company found!"</option>';
                            }
                        
                        ?>
                        </select>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "job_location">Company Location:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="job_location" name="job_location" placeholder="Company Location"   autocomplete="none" required/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "details">Job Description:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="details" name="details" placeholder="Job Description"   autocomplete="none" required></textarea> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "salary">Salary:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="salary" name="salary" placeholder="Salary"   autocomplete="none" required/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "experience">Work Experience:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="experience" name="experience" placeholder="Work Experience"   autocomplete="none" required/> 
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "educational_rec">Educational Qualifications:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="educational_rec" name="educational_rec" placeholder="Educational Qualifications" autocomplete="none" required/> 
                      </div>
                    </div>
                  </div> 

                    

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="gender">Prefered Gender:</label> 
                      <div class="col-md-8">
                          <select class="form-control input-sm" id="gender" name="gender" required>
                          <option value="None">Select</option>
                           <option>Male</option>
                           <option>Female</option>
                           <option>Male/Female</option>
                        </select>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "vacancy">Job Vacancy:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="vacancy" name="vacancy" placeholder="Job Vacancy" autocomplete="none" required/> 
                      </div>
                    </div>
                  </div>   

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "apply_deadline">Application Deadline:</label> 
                      <div class="col-md-8">
                         <input type="date" class="form-control input-sm" id="apply_deadline" name="apply_deadline" placeholder="Application Deadline" required autocomplete="none"/> 
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="idno"></label>  

                      <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                            <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                      </div>
                     </div>
                  </div> 
    </div>              
          
</form>
      
 
<?php 
    include 'template/footer.php';
?>

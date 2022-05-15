<?php
include 'template/header.php';

$name = "";
$mobile = "";
$email = "";
$address = "";
$last_education = "";
$comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $last_education = $_POST["last_education"];
    $comment = $_POST["comment"];

    $resume = $_FILES['resume']['name'];
    $target_dir = "uploads/cv/";
    $target_file = $target_dir . basename($_FILES['resume']['name']);

    // Select File Type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    echo $imageFileType;

    // Allowed File Extensions
    $extension_arr = array('pdf');
    $resumeName = $resume.rand();

    if (in_array($imageFileType, $extension_arr)) {

        $is_uploaded = move_uploaded_file($_FILES['resume']['tmp_name'], $target_dir . $resumeName);

        if ($is_uploaded) {
            $add_job_application_sql = "INSERT INTO job_application (name, mobile, resume, email, address, last_education, comment) VALUES ('$name', '$mobile', '$resumeName', '$email', '$address', '$last_education', '$comment')";
            $add_job_application_sql_result = $conn->query($add_job_application_sql);

            if ($add_job_application_sql_result == TRUE) {
                echo "<script>alert('Apply Successfully !');</script>";
            } else {
                echo "<script>alert('Sorry! Could Not Apply !');</script>";
            }
        } else {
            echo "<script>alert('Sorry! CV Could Not be Uploaded !');</script>";
        }
    } else {
        echo "<script>alert('Sorry! Invalid extention Detected !');</script>";
    }
}
?>

<form class="apply-form" action="" method="post">
    <h1 class="apply-heading">Apply Now</h1>
    <div class="apply-div">
        <div><label class="apply-label" for="name">Candidate Name</label></div>
        <input class="apply-input" type="text" name="name" placeholder="Enter Your Name" required>
    </div>

    <div class="apply-div">
        <div><label class="apply-label" for="name">Mobile Number</label></div>
        <input class="apply-input" type="number" name="mobile" placeholder="Enter Your Mobile Number" required>
    </div>  

    <div class="apply-div">
        <div><label class="apply-label" for="name">Email</label></div>
        <input class="apply-input" type="email" name="email" placeholder="Enter Your Email ID" required>
    </div> 

    <div class="apply-div">
        <div><label class="apply-label" for="name">Address</label></div>
        <input class="apply-input" type="text" name="address" placeholder="Enter Your Address" required>
    </div>  
    
    <div class="apply-div">
        <div><label class="apply-label" for="name">Educational Qualification</label></div>
        <input class="apply-input" type="text" name="last_education" placeholder="Enter Your Name" required>
    </div>  

    <div class="apply-div">
        <div><label class="apply-label" for="name">Comment</label></div>
        <textarea class="apply-input" type="text" name="comment" placeholder="Enter Comment" required></textarea>
    </div>  

    <div class="apply-div">
        <div><label class="apply-label" for="name">Upload CV</label></div>
        <input class="apply-input" type="file" name="resume" placeholder="Upload Your CV" required>
    </div>  

    <div class="apply-footer">
        <button type="submit" name="submit" class="apply-submit">Submit</button>
        <button type="reset" name="reset" class="apply-reset">Reset</button>
    </div>
          
</form>
      
 
<?php 
    include 'template/footer.php';
?>

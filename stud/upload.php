<?php
$title = "Student Upload Exam";
include('header.php');
?>

<!--banner-->	
<div class="banner">
<h2><a href="index.php">Home</a><i class="fa fa-angle-right"></i>
<span>Upload Exam</span></h2>
</div>

<div class="blank">
<div class="blank-page">
<h2>Upload Exam</h2>
<br>
<div id="container">
<div class="card-body pt-5">
<h3>Time Left</h3>
<h4 id="counter"></h4>
</div>

<!-- Script -->
<script>
<?php 
$dateTime = strtotime("+3 hours");
$getDateTime = date("F d, Y H:i:s", $dateTime); 
?>
var countDownDate = new Date("<?php echo "$getDateTime"; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {
var now = new Date().getTime();

// Find the distance between now an the count down date

var distance = countDownDate - now;

// Time calculations for hours, minutes and seconds

var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Output the result in an element with id="counter"11

document.getElementById("counter").innerHTML = hours + "hours " + minutes + "minutes " + seconds + "seconds ";

// If the count down is over, write some text 

if (distance < 0) {
clearInterval(x);
document.getElementById("counter").innerHTML = "EXPIRED";
}
}, 1000);

</script>

<br><br>

<?php
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = ""; #password of phpmyadmin
$dbname = "ict3715_2022"; #database name
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
$studNum = $_SESSION["studentnumber"];
if (isset($_POST["submit"])){
if(is_uploaded_file($_FILES["file"]["tmp_name"]) && ($_FILES["file"]["type"] == 'application/pdf') ){
echo "File is Valid <br>";
#retrieve file title
$title = $studNum .  "_Exam Submission";
$moduleCode = $_POST["modCodule"];
$dateUp = date('Y-m-d H:i:s');
$transID = "R". rand(100, 200) . " " . rand(200, 550). " " . rand(150, 700);
#file name with a random number so that similar dont get replaced
$pname = $studNum . "_" . $moduleCode . "_Exam_Answer.pdf";
#temporary file name to store file
$tname = $_FILES["file"]["tmp_name"];
#upload directory path
$uploads_dir = 'uploads';
#TO move the uploaded file to specific location
move_uploaded_file($tname, $uploads_dir.'/'.$pname);
#sql query to insert into database
$sql = "INSERT INTO `files`(`TransactionID`, `StudentNumber`, 
`file_name`, `date_uploaded`, `location`, `ModuleCode`)
VALUES('$transID','$studNum','$title','$dateUp','$pname','$moduleCode')";
if(mysqli_query($conn,$sql)){
echo "File Sucessfully Uploaded <br><br>
Confirmation Email Sent<br><br>";
}
else{
echo "Error<br><br>";
}}
else{
echo "Invalid File: please upload pdf only!!!<br><br>";
}
}
?>
<form method="post" enctype="multipart/form-data">
<input type='text' class='form-control' placeholder='Module Code' name='modCodule' required /><br/>
<input type='file'  class='form-control' name='file' id='file' required /><br/>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
<button type="reset" name="Clear" class="btn btn-warning">Reset</button>
</form>
</div>

</div>
</div>

<?php
include('footer.php');
?>
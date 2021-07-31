
<?php 
session_start();
$_SESSION['message']='';

$servername = "localhost";
$username = "root";
$password = "abcd";
$database="taskaggregator";


$conn = new mysqli($servername, $username, $password,$database);


if(isset($_POST['save']))
{
	
        $fname=$conn->real_escape_string($_POST['fname']);
        $lname=$conn->real_escape_string($_POST['lname']);
		$wassign=$conn->real_escape_string($_POST['wassign']);
		$assignby=$conn->real_escape_string($_POST['assignby']);
        $assigndate=$conn->real_escape_string($_POST['assigndate']);
        $completedate=$conn->real_escape_string($_POST['completedate']);  
        $wstatus=$conn->real_escape_string($_POST['wstatus']); 
        $mid=$conn->real_escape_string($_POST['mid']);  
           
		
		mysqli_select_db($conn,'taskaggregator');

		
		$sql = "INSERT INTO memberwork(Fname,Lname,WorkAssigned,AssignedBy,WorkStatus,AssignedDate,CompletionDate,MemberId)"."VALUES ('$fname','$lname','$wassign','$assignby','$assigndate' ,'$completedate','$wstatus','$mid' )";
		
		 
		$query=mysqli_query($conn,$sql);

	

	

}
?>




<html>
<head>
<title>WorkStatus</title>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link href="./styleradio.css" rel="stylesheet">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<style>
.form-group{
  color:white;
  padding-right: 4px;
  padding-left: 4px;
  margin-right: 400px;
  margin-left: 400px;
  background-color:#7f9cf5;
}
.form-group1{
padding-right: 4px;
padding-left: 4px;
margin-right: 400px;
margin-left: 400px;
}
.bg-gray-800{
  position: fixed;
  top: 0;
  width: 100%
}







</style>

</head>
<body>
<!--header-->	
<?php include("./header.php");?>
<!--header ends-->

<form action="./WorkStatus.php" method="post" id="singnupFrom">
  <div class="form-group">
    
<label for="exampleFormControlInput1"> First Name:</label>
  <input name="fname" type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2"> Last Name:</label>
    <input name="lname" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Last Name">
  </div>

  <div class="form-group">
 <label  for="exampleFormControlTextarea1">What Work is Assigned..?</label>
    <textarea name="wassign" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
  <label for="exampleFormControlInput3">Assigned By:</label>
    <input  name="assignby" type="text" class="form-control" id="exampleFormControlInput3" placeholder=" Name">
  </div>

  <div class="form-group">
  <label for="exampleFormControlInput4">Assigned Date:</label>
    <input name="assigndate" type="date" class="form-control" id="exampleFormControlInput4" placeholder="dd/mm/yyyy"/>
  </div>
     
  <div class="form-group">
<label for="exampleFormControlInput5">Completion Date:</label>
    <input name="completedate" type="date" class="form-control" id="exampleFormControlInput5" placeholder="dd/mm/yyyy"/>
  </div> 
  
  
  <!--Radio button for work status-->
  <div class="section over-hide z-bigger">
  <div class="col-12 pb-5">
						<input class="checkbox-tools" value=" " type="radio" name="wstatus" id="tool-1" checked>
						<label class="for-checkbox-tools" for="tool-1">
							<i class='uil uil-line-alt'></i>
						Completed
						</label><!--
						--><input class="checkbox-tools" type="radio" value="Inprogress " name="wstatus" id="tool-2">
						<label class="for-checkbox-tools" for="tool-2">
							<i class='uil uil-vector-square'></i>
							Inprogress
						</label><!--
						--><input class="checkbox-tools" type="radio" value=" Pending" name="wstatus" id="tool-3">
						<label class="for-checkbox-tools" for="tool-3">
							<i class='uil uil-ruler'></i>
              Pending
						</label><!--
						-->
					</div>
          </div>
  <!--end of Radio button for work status-->

  <div class="form-group">
<label for="exampleFormControlInput5">m id:</label>
    <input name="mid" type="text" class="form-control" id="exampleFormControlInput5" placeholder="dd/mm/yyyy"/>
  </div> 
  <div class="form-group1">
  <input type="submit" name="save" value="submit">
    </div>
</form>

</body>
</html>
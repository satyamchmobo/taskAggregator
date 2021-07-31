<?php  

if(isset($_POST["submit"]))
{
	$servername = "localhost";
$username = "root";
$password = "abcd";
$database="taskaggregator";


$conn = new mysqli($servername, $username, $password,$database);

mysqli_select_db($conn,'taskaggregator') or die("cannot select DB"); 



  
    
   $sql="TRUNCATE TABLE memberwork";
  
    $query=mysqli_query($conn,$sql);  
    if($query !== FALSE)
{
   echo("All rows have been deleted.");
   header("Location: ./index.php");  

}
else
{
   echo("No rows have been deleted.");
}

}

else{
    echo "unable to delete";
}

	
    
?>  
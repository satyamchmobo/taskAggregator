<?php  
if(isset($_POST["submit"]))
{
    
    
  
if(!empty($_POST['email']) && !empty($_POST['password'])) { 
  



    $uemail=$_POST['email'];  
	$upass=$_POST['password']; 
	

	$servername = "localhost";
$username = "root";
$password = "abcd";
$database="taskaggregator";


$conn = new mysqli($servername, $username, $password,$database);

mysqli_select_db($conn,'taskaggregator') or die("cannot select DB"); 



  
    
   $sql="SELECT * FROM login WHERE Email='".$uemail."' AND Password='".$upass."' ";
  
	$query=mysqli_query($conn,$sql);  
	
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['Email'];  
    $dbpassword=$row['Password'];  //password
    }  
  
    if($uemail == $dbusername && $upass == $dbpassword)  //checking entered userid and pwd with database 
    {  
        
    session_start();  
    $_SESSION['sess_user']=$uemail;  
    $_SESSION['sess_pass']=$Password;
  
    header("Location: ./WorkStatus.php");  
    }
    else { 
        echo "can not login ";
        session_start();  
        
       
        header("Location: ./login.php");  
        
    }
        }  
    
    



    } 
  
} else {  
    echo "All fields are required!";  
}  

 
?>  





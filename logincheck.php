<?php
session_start();
$con = mysqli_connect('localhost','root','','kamwali');
if($con)
{
	echo "connection successfully";
}
else
{
	echo"no connection";
}

// $db = mysqli_select_db($con,'aadistudio');


if(isset($_POST['submit']))
{
	// var_dump($_POST);exit();
	$name = $_POST['name'];
	$password = $_POST['password'];
    
  
	$sql = "select *from login where name ='$name' and password = '$password'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_num_rows($query);  

	if($row==1)
		{
			echo "user login2 successfully ";
			$_SESSION['username']=$username; 
			header('location:admin.php');          
	    }
	   else
	   { 
	   	     echo "<script>
	   	            window.location.href='login.php';
					alert('Wrong Email and Password');
					</script>";
	   }
	
 }

?>
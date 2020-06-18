<?php
include 'conn.php';
error_reporting(0);
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $apply = $_POST['apply'];
  $date = $_POST['date'];
  $gender = $_POST['gender'];
  $citySelect = $_POST['citySelect'];
  $location = $_POST['location'];
  $address = $_POST['address'];
  $filename = $_FILES ["upload"]["name"];
$tempname = $_FILES ["upload"]["tmp_name"];
$folder = "image/".$filename;
//print_r($_FILES["upload"]);//to display to function and details of the file
move_uploaded_file($tempname, $folder);
  
  $qry = "INSERT INTO `maid`(`name`, `email`, `age`, `apply`, `date`, `gender`, `citySelect`, `location`, `address`, `pic`) VALUES ('$name','$email','$age','$apply','$date','$gender','$citySelect','$location','$address','$folder')";
 
     $query= mysqli_query($con,$qry);
}
?>

<!DOCTYPE html>
<html>
<head>
 
  <title>KantaBai</title>
  <link rel="icon" type="image/icon" href="anime.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
     
    <div>
      <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top"> 
         <div class="container md-4">
          <a href="#" class="navbar-brand text-primary font-weight-bold ">
             <img src="anime.png"class="d-inline-block align-top" alt="">
          KantaBai.com</a>
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse " id="collapsenavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                      <a href="index.php"class="nav-link text-white bg-dark active">Home</a>
                </li>
                <li class="nav-item">
                      <a href="maid.php"class="nav-link text-primary">HouseMaids</a>
                </li>
                <li class="nav-item ">
                      <a href="baby.php"class="nav-link text-primary">BabySitter</a>
                </li>
          
                <li class="nav-item">
                      <a href="cook.php"class="nav-link text-primary">Cook</a>
                </li>
                  <li class="nav-item">
                      <a href="cobler.php"class="nav-link text-primary">Cobler</a>
                </li>
                  <li class="nav-item">
                      <a href="washerman.php"class="nav-link text-primary">Laundry</a>
                </li>
         </ul>
         </div>
               
</div>
                </nav>

</div>

<form  action="" method="post" enctype="multipart/form-data">
 <div class="container text-center wrap">
  <div id="loginbox" style="height:800px;">
   <div class="box">
    <h3 class="text-primary" align="center"><b>Register</b> </h3>
   

    <input type="text" class="form" name="name" placeholder=" Name">
    
    
    <input type="text" class="form" name="age" placeholder="Age">
       
    <div class="form-group">
    <label class="exampleFormControlSelect1  text-muted">Apply For</label>
    <select class="form-control select" name="apply" id="exampleFormControlSelect1">
      <option>House Maids</option>
      <option>Cobbler</option>
      <option>Baby Sitters</option>
      <option>Laundry</option>
      <option>Cook</option>
      <option>Massage Therapist</option>
    </select>
  </div>
  <label class="exampleFormControlSelect1  text-muted">Date of Birth</label>
   <input type="date" name="date">
   
   <label for="male">Male</label>
  <input type="radio" name="gender" id="male" value="male"><br>
  <label for="female">Female</label>
  <input type="radio" name="gender" id="female" value="female"><br>

   <div class="form-group">
    <label class="exampleFormControlSelect1  text-muted">State</label>
    <select class="form-control select" name="citySelect" id="exampleFormControlSelect1">
      <option>Bhopal</option>
               <option>Hyderabad</option>
               <option>Bangalore</option>
               <option>Mumbai</option>
    </select>
  </div>

  <div class="form-group">
    <label class="exampleFormControlSelect1  text-muted">Location</label>
    <select class="form-control select" name="location" id="exampleFormControlSelect1">
     <option>Bhopal</option>
               <option>Hyderabad</option>
               <option>Bangalore</option>
               <option>Mumbai</option>
    </select>
  </div>

    <!--textarea type="textarea" class="form" name="textarea" placeholder="Message"></textarea-->
    
    <input type="file"  class="btn-success" name="upload" value=""/>

    <button type="submit" class="btn btn-primary text-white But" name="submit">Submit</button>
       
        <!--button class="facebook"> log in with facebook </button>
         <button class="google"> log in with google</button-->  
    </div>
   </div>
</div>

</form>

</body>
</html>

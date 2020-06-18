<?php
session_start();
$con = mysqli_connect('localhost','root');
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
                      <a href="index.html"class="nav-link text-white bg-dark active">Home</a>
                </li>
                <li class="nav-item">
                      <a href="maid.php"class="nav-link text-primary">HouseMaids</a>
                </li>
                <li class="nav-item ">
                      <a href="baby.html"class="nav-link text-primary">BabySitter</a>
                </li>
          
                <li class="nav-item">
                      <a href="cook.html"class="nav-link text-primary">Cook</a>
                </li>
                  <li class="nav-item">
                      <a href="cobler.html"class="nav-link text-primary">Cobler</a>
                </li>
                  <li class="nav-item">
                      <a href="washerman.html"class="nav-link text-primary">Laundry</a>
                </li>
         </ul>
         </div>
               
</div>
                </nav>

</div>

<form method="post" action="logincheck.php">
 <div class="container text-center wrap">
  <div id="loginbox" style="height:400px;">
   <div class="box">
    <h3 class="text-primary" align="center"><b>Sign-in</b> </h3>
   

    <input type="text" class="form" name="name" placeholder=" Name">
    <input type="password" class="form" name="password" placeholder=" Password">
  
       
   
    
    

    <button type="submit" class="btn btn-primary text-white But" name="submit">Login</button>
       
        <!--button class="facebook"> log in with facebook </button>
         <button class="google"> log in with google</button-->  
    </div>
   </div>
</div>

</form>

</body>
</html>

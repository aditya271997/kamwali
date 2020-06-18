<!DOCTYPE html>
<html>
<head>
 
  <title>KantaBai</title>
  <link rel="icon" type="image/icon" href="Maid2.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  .bgimg
{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(cobback.jpg); 
  height:100vh;
  background-size: cover;
  background-position:center; 
  background-attachment: fixed;
}
</style>
</head>
<body>
     
    <div class="bgimg">
      <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top"> 
         <div class="container md-4">
          <a href="#" class="navbar-brand text-primary font-weight-bold ">
             <img src="Maid2.png"class="d-inline-block align-top" alt="">
          KantaBai.com</a>
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse " id="collapsenavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                      <a href="index.php"class="nav-link text-primary ">Home</a>
                </li>
                
                 <li class="nav-item">
                      <a href="maid.php"class="nav-link text-primary ">HouseMaids</a>
                </li>
                <li class="nav-item ">
                      <a href="baby.php"class="nav-link text-primary">BabySitter</a>
                </li>
          
                <li class="nav-item">
                      <a href="cook.php"class="nav-link text-primary">Cook</a>
                </li>
                  <li class="nav-item">
                      <a href="cobbler.php"class="nav-link text-white bg-dark">Cobler</a>
                </li>
                  <li class="nav-item">
                      <a href="Laundry.php"class="nav-link text-primary">Laundry</a>
                </li>
                <li class="nav-item">
                      <a href="massage.php"class="nav-link text-primary">Massage</a>
                </li>
         </ul>
         </ul>
         </div>
         </div>      

                </nav>
<div class="container text-center text-white wrap">
 <h3>KantaBai.com</h3><br> 
     <h6>Itne paise mai to Itnaich milega</h6>
<a href="register.php"><button type="button" class="btn  btn-dark text-white But"style="border-radius:4px;">
  Register
</button></a>
<a href="login.php"><button type="button" class="btn  btn-dark text-white But"style="border-radius:4px;">
  Login
</button></a>
<h6>Search all the HOUSEMAIDS in your near by places</h6>
   <h3 style="letter-spacing: 2px;"> Get Started</h3>

</div>

</div>


<div class="container text-center" >
  <h1 style="margin-top: 20px;">Coblers</h1>
  <center>
   <div class="search container">   
    <form method="POST" action="cobbler.php">
      <div class="formbox" style="margin-top: 20px;">

            <select name="citySelect" class="form-control" style="width: 20%">
               <option>Bhopal</option>
               <option>Hyderabad</option>
               <option>Bangalore</option>
               <option>Mumbai</option>
            </select>
            <br>
            <select name="location" class="form-control" style="width: 20%">
               <option>Bhopal</option>
               <option>Hyderabad</option>
               <option>Bangalore</option>
               <option>Mumbai</option>
            </select>
            <input type="submit" name="submit" value="Search" class="searchbtn btn-primary text-white But " />
      </div> 
    </form>

   </div>
   </center>
   </div> 


<div class="container">
  <div class="row">
    
  <?php
        $con= new mysqli("localhost","root","","kamwali");
       if(isset($_POST['submit']))
       { 
        $citySelect = $_POST['citySelect'];
        $location = $_POST['location'];
        
        
        if (mysqli_connect_errno())
        {
             echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT * FROM maid
          WHERE apply='Cobbler' AND (citySelect LIKE '%{$citySelect}%' OR location LIKE '%{$location}%')");
        while ($row = mysqli_fetch_array($result))
        {
          ?>  
          <div class="col-lg-4 col-md-4">
<div class="card" style="width: 18rem;">
  <img src="maid2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo $row['name'] ?></h5>
    <p class="card-text">Age ::<?php echo $row['age'] ?></p>
    <p class="card-text">Gender::<?php echo $row['gender'] ?></p>
    <a href="#" class="btn btn-primary text-center">Contact</a>
     
    </div>
  </div>
</div>
<?php  
        }   
        mysqli_close($con);    
       } 
      ?> 
    </div>     
  </div>

 



<footer class="footer">
<div class="container">
<div class="row">
<div class=" col-lg-4 col-md-4 col-sm-4  col-12">
<h5 class="text-white font-weight-bold pt2 " style="letter-spacing: 2px;">Find us</h5>
<p class=" text-grey font-weight-bold text-center">
  Aadi studio
</p>
<p><i class="fa fa-location-arrow"></i>     L-31 Adarsh  colony ,Gandhinagar,BHOPAL<br>
                                      (near airport)
 </p>
<p><i class="fa fa-phone"></i>  +91-8085433341 </p>
<p><i class="fa fa fa-envelope"></i> adityasinghrajput862@gmail.com  </p>


</div>


<div class=" col-lg-4 col-md-4 col-sm-4 col-12">
<h5 class="text-white font-weight-bold pt2 " style="letter-spacing: 2px;">Pages</h5>
<!--headin5_amrc-->
<ul class="footer_ul">
<li><a href="index.html">HOME</a></li>
<li><a href="model.html">MODELS</a></li>
<li><a href="gallery.html">GALLERY</a></li>
<li><a href="apply.html">APPLY US</a></li>
<li><a href="contact.html">CONTACT US</a></li>

</ul>
</div>

<div class="col-lg-4 col-md-4 col-sm-4  col-12 d-block">
<h4 class="text-white font-weight-bold pt2 " style="letter-spacing: 2px;">Aadistudio.com</h4>

 <p>Hello and welcome to the online home of Aadi Photo Studio,As a professional photography studio, our mission is to professionally integrate creativity into everything we do as well as continue to embrace value-added resources which sets us apart from the competition and make our clients take notice.</p>
              
</div>
</div>
</div>

<div style="background-color:#0b4984">
<p class="text-center">Copyright @2019 | Designed by <b>Aadi</b></p>
<div>
<ul class="social_footer_ul">
<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
</ul>
</div>
</div>

</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  </body>
  </html>
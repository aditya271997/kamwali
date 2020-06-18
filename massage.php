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
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(baby.png); 
  height:100vh;
  background-size: cover;
  background-position:center; 
  background-attachment: fixed;
}
</style>
</head>
<body>
     
    <div class="bgimg">
      <nav class="navbar navbar-expand-md bg-dark navbar-light fixed-top"> 
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
                      <a href="cobler.php"class="nav-link text-primary">Cobler</a>
                </li>
                  <li class="nav-item">
                      <a href="laundry.php"class="nav-link text-primary">Laundry</a>
                </li>
                <li class="nav-item">
                      <a href="massage.php"class="nav-link text-white active">Massage</a>
                </li>
         </ul>
         </ul>
         </div>
               

                </nav>
<div class="container text-center text-white wrap">
 <h3>KantaBai.com</h3><br> 
     <h6>Itne paise mai to Itnaich milega</h6>
<a href="register.php"><button type="button" class="btn  btn-dark text-white But"style="border-radius:4px;">
  Sign up
</button></a>
<a href="login.php"><button type="button" class="btn  btn-dark text-white But"style="border-radius:4px;">
  Sign up
</button></a>
<h6>Search all the MASSAGE THERAPIST in your near by places</h6>
   <h3 style="letter-spacing: 2px;"> Get Started</h3>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 400px;">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Sign up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                   <input type="text" name="username" placeholder="user name">
                   <input type="text" name="first name" placeholder="first name">
                   <input type="text" name="last name" placeholder="last name">
                   <input type="password" name="password" placeholder="password">
                   <input type="password" name="pass" placeholder="Retype password">
                   <input type="email" name="email" placeholder="Email id">
                   <input type="date" name="dob" placeholder="D.O.B">
                   male<input type="radio" name="r1" style="color:black;">
                   Female<input type="radio" name="r1" placeholder="Gender"><br><br>

                  
      </div>
      <div class="modal-footer ">
        <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button-->
       <div class="container"> 
        <button type="button" class="btn btn-primary text-white But ">Submit</button>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="container our text-center" >
  <h1>Massage Therapist</h1>
  <center>
   <div class="search container">   
    <form>
      <div class="formbox">
        <input class="searchbox" name="search" type="text"
        placeholder="City Name">
          <input class="searchbox " name="search2" type="text"
        placeholder="City Location ">
          <button type="button" class="searchbtn btn-primary text-white But ">Search</button>
        </div> 
    </form>
  </div>
  </center> 
 </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  </body>
  </html>
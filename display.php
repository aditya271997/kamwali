<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	<link rel="icon" type="image/icon" href="Maid2.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

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
          WHERE apply='House Maids' AND (citySelect LIKE '%{$citySelect}%' OR location LIKE '%{$location}%')");
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

 

</body>
</html>
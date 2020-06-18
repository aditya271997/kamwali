<!DOCTYPE html>
<html>
<head>
	<title>card</title>
	<link rel="icon" type="image/icon" href="Maid2.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.box
	{
		border:none;
		box-shadow: 5px 5px 25px -5px rgba(0,0,0,0.5);
	border-radius: 15px;
	}
	

</style>
<body>

<div class="container">
	<!--div class="card box" style="width: 18rem;">
  <img src="cobler.gif" class="card-img-top" alt="..." style="height:150px; width:245px">
  <div class="card-body">
  	<h5 class="">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div-->
	
	<!--div class="card box" style="width: 18rem;">
		<div class="text-center">
  <img src="cobler.gif" class="card-img-top" alt="..." style="height:150px; width:245px">
   </div>
  <div class="card-body" style=" width:300px">
    <h5 class="card-title text">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div-->

<br>
<br>

<div class="container">
<div class="card" style="width: 18rem;border:none;
		box-shadow: 5px 5px 25px -5px rgba(0,0,0,0.5);border-radius: 15px; ">
	<div class="text-center">
  <img src="<?php echo $row['pic']; ?>" class="card-img-top" alt="..." style="height:180px; width:245px">
   </div>
  <div class="card-body">
    <h5 class="card-title" style="font-family:century gothic;color:dodgerblue;"><?php echo $row['name'] ?></h5>
    <h6 class="card-subtitle mb-3 text-muted">Age&nbsp;:&nbsp;<?php echo $row['age'] ?> </h6>
    
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

</body>
</html>
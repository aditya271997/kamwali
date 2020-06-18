<?php
error_reporting(0);
include'conn.php';

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
	$qry = "select * from maid ";
 
     $query= mysqli_query($con,$qry);
}
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from spruko.com/demo/asta/asta/classic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 07:55:04 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kamwali-Admin</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

		<!--Chartist css-->
		<link rel="stylesheet" href="assets/plugins/chartist/chartist.css">
		<link rel="stylesheet" href="assets/plugins/chartist/chartist-plugin-tooltip.css">

		<!--Full calendar css-->
		<link rel="stylesheet" href="assets/plugins/fullcalendar/stylesheet1.css">

	</head>

	<body class="app ">
		<div id="spinner"></div>
		<div id="app">
			<div class="main-wrapper" >
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="index.php">
						<!--img src="assets/img/brand/logo.png" class="header-brand-img" alt="  Asta-Admin  logo"-->
            <span class="text-primary">Kamwali.com</span>
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-navicon"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch"><i class="ion ion-search"></i></a></li>
						</ul>



                      
					</form>

					<ul class="navbar-nav navbar-right ">
					    
						
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
							<!--img src="assets/img/avatar/avatar-1.jpg" alt="profile-user" class="rounded-circle w-32"-->
							<div class="d-sm-none d-lg-inline-block">Aditya</div></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="profile.html" class="dropdown-item has-icon">
									<i class="ion ion-android-person"></i> Profile
								</a>
								<a href="profile.html" class="dropdown-item has-icon">
									<i class="ion-android-drafts"></i> Messages
								</a>
								<a href="profile.html" class="dropdown-item has-icon">
									<i class="ion ion-gear-a"></i> Settings
								</a>
								<a href="#" class="dropdown-item has-icon">
									<i class="ion-ios-redo"></i> Logout
								</a>
							</div>
						</li>
					</ul>
				</nav>

				<aside class="app-sidebar">
					<div class="app-sidebar__user">
					    <div class="dropdown">
							<a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
								<!--img alt="image" src="assets/img/avatar/avatar-1.jpg" class=" avatar-md rounded-circle"-->
								<span class="ml-2 d-lg-block">
									<!--span class="text-dark app-sidebar__user-name mt-5">Victorina</span><br>
									<span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span-->
								</span>
							</a>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="housemaiddis.php"><span>House Maids</span></a></li>
                <li><a class="slide-item" href="babydis.php"><span>Babysitters </span></a></li>
                <li><a class="slide-item"  href="cookdis.php"><span>Cook</span></a></li>
                <li><a class="slide-item" href="coblerdis.php"><span>Coblers</span></a></li>
                <li><a class="slide-item"  href="laundrydis.php"><span>Laundry</span></a></li>
                <li><a class="slide-item" href="massdis.php"><span>MAasage</span></a></li>
								
							</ul>
						</li>
				
				</aside>


<div class="container">
  <div class="col-lg-12"><br><br>
  	
  	<table class=" table table-striped table-hover table-bordered " style="margin-left: 50px;">
  		<br><br>
  		<tr class="bg-dark text-white text-center">
  			<th> Id</th>
  			<th> name</th>
  			<th> email</th>
  			<th> Age</th>
        <th> Apply</th>
        <th> Date</th>
        <th> Gender</th>
        <th> citySelect</th>
        <th> location</th>
        <th> Address</th>
  			
  		</tr>
<?php
   include 'conn.php';
	
	$qry = "select*from maid  WHERE apply='Cobbler'";
 
     $query= mysqli_query($con,$qry);
     while($res = mysqli_fetch_array($query))
     {


 
?>
  		<tr class="text-center">
  			<td> <?php echo $res['id'];  ?></td>
            <td> <?php echo $res['name']; ?></td>
            <td> <?php echo $res['email']; ?></td>
            <td> <?php echo $res['age']; ?></td>
            <td> <?php echo $res['apply']; ?></td>
            <td> <?php echo $res['date']; ?></td>
            <td> <?php echo $res['gender']; ?></td>
            <td> <?php echo $res['citySelect']; ?></td>
            <td> <?php echo $res['location']; ?></td>
            <td> <?php echo $res['address']; ?></td>
            <!--td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id'];?>" class="text-white"> delete</a></button></td>
            <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id'];?>" class="text-white"> update</a></button></td-->
  			
  		</tr>

<?php
}
?>
</table>
  </div>	
</div>
		

           
            


    </div>

  
  </div>
  
</section>


				<footer class="main-footer">
					<div class="text-center">
						Copyright &copy;  Kamwali.com. Design By<a href="#">Aditya Singh</a>
					</div>
				</footer>

			</div>
		</div>

		<!--Jquery.min js-->
		<script src="assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Chart.min js-->
		<script src="assets/js/chart.min.js"></script>

		<!--Othercharts js-->
		<script src="assets/plugins/othercharts/jquery.knob.js"></script>
		<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!--Morris js-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/morris/raphael.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Min Calendar -->
		<script src="assets/plugins/fullcalendar/calendar.min.js"></script>

		<!--Scripts js-->
		<script src="assets/js/apexcharts.js"></script>
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/dashboard.js"></script>

		<!-- ECharts -->
		<script src="assets/plugins/echarts/echarts.js"></script>

		<!--OtherCharts js-->
		<script src="assets/js/othercharts.js"></script>

	</body>

<!-- Mirrored from spruko.com/demo/asta/asta/classic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 07:55:55 GMT -->
</html>

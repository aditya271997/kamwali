<?php
session_start();
include('logincheck.php');
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from spruko.com/demo/asta/asta/classic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 07:55:04 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $_SESSION['username']; ?></title>

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
					<a href="#" class="navbar-brand text-primary font-weight-bold ">
             <img src=""class="d-inline-block align-top" alt="">
          KantaBai.com</a>
					



                        <div class="form-inline mr-auto horizontal" id="headerMenuCollapse">
							<div class=" d-none d-lg-block">
								<ul class="nav">
									
									
								</ul>
						    </div>
						</div>
					</form>

					<ul class="navbar-nav navbar-right " style="margin-top: 5px;">
					
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
                      <a href="cobbler.php"class="nav-link text-primary">Cobler</a>
                </li>
                  <li class="nav-item">
                      <a href="washerman.php"class="nav-link text-primary">Laundry</a>
                </li>
         
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
							<!--img src="assets/img/avatar/avatar-1.jpg" alt="profile-user" class="rounded-circle w-32"-->
							<div class="d-sm-none d-lg-inline-block">Aditya singh</div></a>
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
								<li><a class="slide-item" href="call.php"><span>Babysitters </span></a></li>
								<li><a class="slide-item"  href="emp.php"><span>Cook</span></a></li>
								<li><a class="slide-item" href="call.php"><span>Coblers</span></a></li>
								<li><a class="slide-item"  href="emp.php"><span>Laundry</span></a></li>
								<li><a class="slide-item" href="call.php"><span>MAasage</span></a></li>
								
						</ul>
					</li>
				</ul>
				</aside>

						
						
					</section>
				</div>

				<!--footer class="main-footer">
					<div class="text-center">
						Copyright &copy;  Asta-Admin 2018. Design By<a href="https://spruko.com/">Webjol technologies</a>
					</div>
				</footer-->

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
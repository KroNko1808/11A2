<!DOCTYPE html>
<?php

if(!isset($_COOKIE['user']))
{
	header('Location: index.php?uri=dashboard.php');
};
?>
<html manifest="cache.appcache">
<?php include_once "header.php" ?>
<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="dashboard.php" class="logo">
				<span class="logo-mini"><b>A2</b></span>
				<span class="logo-lg"><b>11A2</b>Index</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="dashboard.php#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">		  
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">

				<ul class="sidebar-menu" data-widget="tree">        
					<li class="header">Menu</li>
					<li class="active">
						<a href="dashboard.php">
							<i class="fa fa-home"></i><span>TRANG CHỦ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-address-book-o"></i><span>DANH BẠ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="contact.php"><i class="fa fa-circle-o"></i>Học sinh</a></li>
							<li><a href="contactGV.php"><i class="fa fa-circle-o"></i>Giáo viên</a></li>
						</ul>
					</li>
					<li><a href="TKB.php">
						<i class="fa fa-calendar"></i>
						<span>THỜI KHÓA BIỂU</span>
						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
					</a></li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-map"></i> <span>GROUP</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="group.php"><i class="fa fa-circle-o"></i> Xem bài đăng</a></li>
							<li><a href="post.php"><i class="fa fa-circle-o"></i> Đăng bài</a></li>
						</ul>
					</li>

				</ul>
			</section>
			<div class="sidebar-footer">
				<a href="credit.php" class="link" data-toggle="tooltip" title="" data-original-title="Thông tin"><i class="fa fa-info-circle"></i></a>
				<!-- item-->
				<a href="https://m.me/nhutien1808" target="_blank" class="link" data-toggle="tooltip" title="" data-original-title="Hỗ trợ"><i class="fa fa-envelope"></i></a>
				<a href="logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
			</div>
			<!-- /.sidebar -->
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>TRANG CHỦ</h1>
			</section>
			<section class="content">
				<div class="row">
					<div class="col">
						<div class="info-box bg-red">
							<span class="info-box-icon push-bottom bg-red">
								<img src="images/user.jpg" alt="user" class="rounded-circle">
							</span>
							<div class="info-box-content">
								<span class="info-box-text"><h1>WELCOME !</h1></span>
								<span class="info-box-text"><h3><?php echo $_COOKIE['user'] ?></h3></span>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<script src="assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="assets/vendor_components/jquery-ui/jquery-ui.js"></script>

	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	

	<!-- SlimScroll -->
	<script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<script src="js/template.js"></script>

</body>

</html>

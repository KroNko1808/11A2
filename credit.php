<!DOCTYPE html>
<?php
if(!isset($_COOKIE['user']))
{
	header('Location: index.php?uri=credit.php');
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
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->      
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">        
					<li class="header">Menu</li>
					<li>
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
					<li>
						<a href="TKB.php">
							<i class="fa fa-calendar"></i>
							<span>THỜI KHÓA BIỂU</span>
							<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
						</a>
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
				<a href="credit.php" class="link bg-gray" data-toggle="tooltip" title="" data-original-title="Thông tin"><i class="fa fa-info-circle"></i></a>
				<!-- item-->
				<a href="https://m.me/nhutien1808" target="_blank" class="link" data-toggle="tooltip" title="" data-original-title="Hỗ trợ"><i class="fa fa-envelope"></i></a>
				<a href="logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
			</div>
			<!-- /.sidebar -->
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Thông tin trang web
				</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="breadcrumb-item">Credit</li>
				</ol>
			</section>
			<section class="content">
				<div class="row">
					<div class="col">
						<div class="box box-primary">
							<div class="box-body box-profile">
								<img src="images/profile.jpg" alt="Profile picture" class="profile-user-img rounded-circle img-fluid mx-auto d-block">
								<h3 class="profile-username text-center">NGUYỄN NHƯ TIẾN</h3>
								<p class="text-muted text-center">KroNko1808</p>
								<h5 class="timeline-body margin-bottom text-center">"Thích thì làm thôi :)"</h5>
							</div>
							<div class="row">
								<div class="col">
									<div class="profile-user-info">
										<h2 class="timeline-body margin-bottom text-center">Công nghệ sử dụng</h2>
										<h6 class="timeline-body text-center">GITHUB</h6>
										<h6 class="timeline-body text-center">HEROKU</h6>
										<h6 class="timeline-body text-center">PHP</h6>
										<h2 class="timeline-body margin-bottom text-center">Special thanks to</h2>
										<h6 class="timeline-body text-center">TEMPLATE <b>FOX</b> OF j2TeaM</h6>
										<h6 class="timeline-body text-center">SƠN BÍP</h6>
										<h6 class="timeline-body text-center">PHƯƠNG LE</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
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
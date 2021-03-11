<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo (isset($title)) ? $title.' - CI CRM' : 'CI CRM' ?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" href="<?php echo base_url('assets/admin/favicon.ico') ?>" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo base_url('assets/admin/favicon.ico') ?>" type="image/x-icon">
	<!-- <link rel="stylesheet" href="<?php echo base_url('assets/admin/bootstrap/css/bootstrap.min.css') ?>"> -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/bootstrap/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/ionicons.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/select2/select2.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datepicker/datepicker3.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/iCheck/all.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/iCheck/square/blue.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/skins/skin-blue.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/ogpm.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/custom.css') ?>">

	<script src="<?php echo base_url('assets/admin/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/datatables/dataTables.bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/select2/select2.full.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/iCheck/icheck.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/fastclick/fastclick.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/dist/js/app.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/dist/js/demo.js') ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/custom.js') ?>"></script>
	

	<script>var base_url = '<?php echo base_url() ?>'</script>
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">

<div class="modal fade" id="confirmBox_" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog">
	<div class="modal-dialog" style="top: 100px;">
	<div class="modal-content">
		<div class="modal-header">
		<h4 class="modal-title" id="confirmBoxTitle_">Confirm</h4></div>
		<div class="modal-body">
			<div class="row">
			<div class="col-md-8"><label id="confirmBoxMsg_">Content</label></div>
			<div class="col-md-4">
				<button class="btn bg-orange btn-sm" id="confirmBox_Yes" ><i class="fa fa-check"></i> Ok</button>
				<button class="btn btn-danger btn-sm" id="confirmBox_No"><i class="fa fa-times"></i> Cancel</button>
			</div>
			</div>
		</div>
		<div class="modal-footer text-right"></div>
	</div>
	</div>
</div>

<div class="wrapper">
	<header class="main-header">
		<a href="<?php echo base_url(ADMIN_PATH) ?>" class="logo"><span class="logo-lg"><b>Inovant S</b></span></a>
		<nav class="navbar navbar-static-top">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown messages-menu">
						<a href="#" id="member-notifications" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="label label-success">10</span>
						</a>
						<ul class="dropdown-menu" id="member-notifications-list">
							<li class="header">You have 10 notifications</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li>
										<a href="#">
											<i class="fa fa-users text-aqua"></i> 5 new members joined today
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="#">View all</a></li>
						</ul>
					</li>
					<!-- Notifications: style can be found in dropdown.less -->
					<li class="dropdown notifications-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-flag-o"></i>
							<span class="label label-warning">10</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 10 notifications</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li>
										<a href="#">
											<i class="fa fa-users text-aqua"></i> 5 new members joined today
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="#">View all</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</nav>
	</header>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: adminX - Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<!-- Custom Css -->
<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="<?php echo base_url();?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
<!-- Page Loader -->
<div class="page-loader-wrapper">
	<div class="loader">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
		<p>Please wait...</p>
	</div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Search  -->
<div class="search-bar">
	<div class="search-icon"> <i class="material-icons">search</i> </div>
	<input type="text" placeholder="Explor adminX...">
	<div class="close-search"> <i class="material-icons">close</i> </div>
</div>

<!-- Top Bar -->
<nav class="navbar clearHeader">
	<div class="col-12">
		<div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">admin<img class="logo" src="assets/images/logo.svg" alt="profile img"></a> </div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
			<li class="dropdown menu-app"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-apps"></i> </a>
				<ul class="dropdown-menu">
					<li class="body">
						<ul class="menu">
							<li>
								<ul>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-email"></i><span>Mail</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
									<li><a href="javascript:void(0)"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="dropdown msg-notification"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-email"></i>
				<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
				</a>
				<ul class="dropdown-menu">
					<li class="header">Messages</li>
					<li class="body">
						<ul class="menu">
							<li> <a href="javascript:void(0);">
								<div class="icon-circle"> <img src="assets/images/xs/avatar1.jpg" alt=""> </div>
								<div class="menu-info">
									<h4>David Belle</h4>
									<p class="ellipsis">Cum sociis natoque penatibus et magnis dis parturient montes</p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle"> <img src="assets/images/xs/avatar2.jpg" alt=""> </div>
								<div class="menu-info">
									<h4>David Belle</h4>
									<p class="ellipsis">Cum sociis natoque penatibus et magnis dis parturient montes</p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle"> <img src="assets/images/xs/avatar3.jpg" alt=""> </div>
								<div class="menu-info">
									<h4>David Belle</h4>
									<p class="ellipsis">Cum sociis natoque penatibus et magnis dis parturient montes</p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle"> <img src="assets/images/xs/avatar4.jpg" alt=""> </div>
								<div class="menu-info">
									<h4>David Belle</h4>
									<p class="ellipsis">Cum sociis natoque penatibus et magnis dis parturient montes</p>
								</div>
								</a> </li>
						</ul>
					</li>
					<li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
				</ul>
			</li>
			<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
				<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
				</a>
				<ul class="dropdown-menu">
					<li class="header">NOTIFICATIONS</li>
					<li class="body">
						<ul class="menu">
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-light-green"> <i class="material-icons">person_add</i> </div>
								<div class="menu-info">
									<h4>12 new members joined</h4>
									<p> <i class="material-icons">access_time</i> 14 mins ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-cyan"> <i class="material-icons">add_shopping_cart</i> </div>
								<div class="menu-info">
									<h4>4 sales made</h4>
									<p> <i class="material-icons">access_time</i> 22 mins ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-red"> <i class="material-icons">delete_forever</i> </div>
								<div class="menu-info">
									<h4><b>Nancy Doe</b> deleted account</h4>
									<p> <i class="material-icons">access_time</i> 3 hours ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-orange"> <i class="material-icons">mode_edit</i> </div>
								<div class="menu-info">
									<h4><b>Nancy</b> changed name</h4>
									<p> <i class="material-icons">access_time</i> 2 hours ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-blue-grey"> <i class="material-icons">comment</i> </div>
								<div class="menu-info">
									<h4><b>John</b> commented your post</h4>
									<p> <i class="material-icons">access_time</i> 4 hours ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-light-green"> <i class="material-icons">cached</i> </div>
								<div class="menu-info">
									<h4><b>John</b> updated status</h4>
									<p> <i class="material-icons">access_time</i> 3 hours ago </p>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<div class="icon-circle bg-purple"> <i class="material-icons">settings</i> </div>
								<div class="menu-info">
									<h4>Settings updated</h4>
									<p> <i class="material-icons">access_time</i> Yesterday </p>
								</div>
								</a> </li>
						</ul>
					</li>
					<li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
				</ul>
			</li>
			<li class="dropdown task"> <a href="javascript:void(0);" class="dropdown-toggle " data-toggle="dropdown" role="button"> <i class="zmdi zmdi-format-list-bulleted"></i>
				<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
				</a>
				<ul class="dropdown-menu">
					<li class="header">TASKS</li>
					<li class="body">
						<ul class="menu tasks">
							<li> <a href="javascript:void(0);">
								<h4> Footer display issue <small>72%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<h4> Make new buttons <small>56%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<h4> Create new dashboard <small>68%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<h4> Solve transition issue <small>77%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
							<li> <a href="javascript:void(0);">
								<h4> Answer GitHub questions <small>87%</small> </h4>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								</a> </li>
						</ul>
					</li>
					<li class="footer"> <a href="javascript:void(0);">View All Tasks</a> </li>
				</ul>
			</li>
			<li><a href="sign-in2.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
			<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-sort-amount-desc"></i></a></li>
		</ul>
	</div>
</nav>
<!-- #Top Bar --> 
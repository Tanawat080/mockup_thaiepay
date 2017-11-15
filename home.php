
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>THAIEPAY: Pay All Online - We create e-commerce system and payment gateway 
    for Thais to sell products worldwide.
</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href="http://localhost/mockup/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="http://localhost/mockup/assets/plugins/morrisjs/morris.css" rel="stylesheet" />
<!-- Custom Css -->
<link href="http://localhost/mockup/assets/css/main.css" rel="stylesheet">
<link href="http://localhost/mockup/assets/css/custom.css" rel="stylesheet">
<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="http://localhost/mockup/assets/css/themes/all-themes.css" rel="stylesheet" />
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
			<li class="dropdown menu-app"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-money"></i> </a>
				<ul class="dropdown-menu">
				<li class="header">อัตราแลกเปลี่ยน</li>
					<li class="body">
						<ul class="menu">
								<div class="table-responsive">
									<table class="table table-hover text-center">
										<thead>
											<tr>
												<th>Country</th>
												<th>Currency</th>
												<th>Buying T/T</th>
											</tr>
										</thead>
										<tbody>
											<tr>											
												<td><img src="assets/images/exchange-flag/usd.gif"></td>
												<td>USD</td>
												<td class="text-muted">31.36</td>
											</tr>
											<tr>											
												<td><img src="assets/images/exchange-flag/GBP.gif"></td>
												<td>GBP</td>
												<td class="text-muted">40.89</td>
											</tr>										
											<tr>											
												<td><img src="assets/images/exchange-flag/EUR.gif"></td>
												<td>EUR</td>
												<td class="text-muted">36.40</td>
											</tr>
											<tr>											
												<td><img src="assets/images/exchange-flag/CHF.gif"></td>
												<td>CHF</td>
												<td class="text-muted">31.90</td>
											</tr>
											<tr>											
												<td><img src="assets/images/exchange-flag/JPY.gif"></td>
												<td>JPY</td>
												<td class="text-muted">27.82</td>
											</tr>	
											<tr>											
												<td><img src="assets/images/exchange-flag/SGD.gif"></td>
												<td>SGD</td>
												<td class="text-muted">22.59</td>
											</tr>	
											<tr>											
												<td><img src="assets/images/exchange-flag/HKD.gif"></td>
												<td>HKD</td>
												<td class="text-muted">3.65</td>
											</tr>	
											<tr>											
												<td><img src="assets/images/exchange-flag/AUD.gif"></td>
												<td>AUD</td>
												<td class="text-muted">23.51</td>
											</tr>											
										</tbody>
									</table>
								</div>
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
<!-- #Top Bar --> <!--Side menu and right menu -->
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
	<!-- Menu -->
	<div class="menu">
		<ul class="list">
			<li> 
				<!-- User Info -->
				<div class="user-info">
					<div class="admin-image"> <img src="assets/images/sm/avatar1.jpg" alt="profile img"> </div>
					<div class="admin-action-info"> <span>Welcome</span>
						<h3>John Smith</h3>
						<ul>
							<li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
							<li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>
							<li><a data-placement="bottom" title="Full Screen" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- #User Info --> 
			</li>
			<li class="header">เมนูหลัก</li>
			<li class="active open"><a href="http://localhost/mockup/"><i class="zmdi zmdi-home"></i><span>หน้าแรก</span> </a></li>
			<li > <a href="javascript:void(0);" class="menu-toggle"> <i class="material-icons">account_balance</i> <span class="icon-name">ข้อมูลร้านค้า</span> </a>
				<ul class="ml-menu">
					
					<li ><a href="http://localhost/mockup/merchant/merchant/total_income">ยอดรวมรายได้</a></li>
					<li><a href="">ข้อมูลส่วนตัวและบัญชีธนาคาร</a></li>
					<li><a href="">ข้อมูลบริการห</a></li>
					<li><a href="">ที่อยู่ใบกำกับภาษี</a></li>
					<li><a href="">Pay.Sn Merchant Description</a></li>
					<li><a href="">Upload Document</a></li>
				</ul>
			</li>
			<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>การสั่งซื้อและผู้ซื้อ</span> </a>
				<ul class="ml-menu">
					<li > <a href="">รายการสั่งซื้อทั้งหมด</a></li>
					<li> <a href="">คืนเงินหรือยกเลิกรายการ</a></li>
					<li> <a href="">เค้าเตอร์เซอร์วิส</a></li>
				</ul>
			</li>
			<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>ระบบการทำงาน</span> </a>
				<ul class="ml-menu">
					<li> <a href="">SMS Alert</a> </li>
					<li> <a href="">ตั้งค่าเบื้องต้น</a> </li>
					<li> <a href="">วิธีการเชื่อมต่อระบบ</a></li>
					<li> <a href="">การส่งค่ากลับ</a> </li>
					<li> <a href="">ดาวน์โหลด</a> </li>

				</ul>
			</li>
			<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>สินค้าและบริการ</span> </a>
				<ul class="ml-menu">

					<li> <a href="normal-tables.html">เพิ่มสินค้าและบริการ</a> </li>
					<li> <a href="normal-tables.html">การจัดการสินค้า</a> </li>
					<li> <a href="jquery-datatable.html">ช่องทางการชำระเงิน</a> </li>
					<li> <a href="editable-table.html">วิธีการขนส่งสินค้า</a> </li>
				</ul>
			</li>
			<li ><a href="http://localhost/mockup/"><i class="material-icons">attach_money</i> <span class="icon-name">อัตราแลกเปลี่ยน</span> </a></li>
			<li ><a href="http://localhost/mockup/"><i class="material-icons">highlight</i> <span class="icon-name">ทิปการใช้งาน</span> </a></li>
			<li ><a href="http://localhost/mockup/"><i class="material-icons">event_note</i> <span class="icon-name">ข่าวสารใหม่</span> </a></li>
			<li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">contact_phone</i><span>ติดต่อเรา</span> </a>
				<ul class="ml-menu">

					<li> <a href="normal-tables.html">Support</a> </li>
					<li> <a href="normal-tables.html">ฝ่ายบัญชี</a> </li>
				</ul>
			</li>
			<li ><a href="http://localhost/mockup/"><i class="material-icons">gamepad</i> <span class="icon-name">เงื่อนไขการให้บริการ</span> </a></li>
			
		</ul>
	</div>
	<!-- #Menu --> 
</aside>
<!-- #END# Left Sidebar --> 
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs tab-nav-right">
		<li class="nav-item"><a href="#settings" class="nav-link active" data-toggle="tab">Setting</a></li>
        <li class="nav-item"><a href="#chat" class="nav-link" data-toggle="tab">Chat</a></li>
        <li class="nav-item"><a href="#activities" class="nav-link" data-toggle="tab">Activities</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane in active" id="settings">
            <div class="slim-scroll">
                <div class="card">
                    <div class="header">
                        <h2>Color OPTIONS</h2>
                    </div>
                    <div class="body" >
                        <ul class="choose-skin m-b-0">
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue" class="active">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                        </ul>
                        <ul class="list-unstyled m-b-0 theme-light-dark m-t-15">
                            <li>
                                <div class="t-dark">Dark</div>
                            </li>
                            <li>
                                <div class="t-light">Light</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>GENERAL SETTINGS</h2>
                    </div>
                    <div class="body" >
                        <ul class="setting-list">
                            <li> <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                            <li> <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="chat">
            <div class="slim-scroll">
                <div class="m-t-15 m-l-15 m-r-15">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Search..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <h6>Online</h6>
                    <ul>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar3.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar3.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Offline</h6>
                    <ul>
                        <li class="offline">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar4.jpg" alt=""> </a>
                                <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the simply dummy text</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the you share the</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media"> <a  role="button" tabindex="0"> <img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""> </a>
                                <div class="media-body">
                                    <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti</span> <span class="badge badge-outline status"></span> </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane activities" id="activities">
            <div class="slim-scroll">
                <div class="m-t-15 m-l-15 m-r-15">
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <div class="sl-content">
                                <div class="text-muted">Just now</div>
                                <p>Finished task <a href="" class="text-info">#features 4</a>.</p>
                            </div>
                        </div>
                        <div class="sl-item b-info">
                            <div class="sl-content">
                                <div class="text-muted">10:30</div>
                                <p><a href="">@Jessi</a> retwit your post</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">12:30</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-warning">
                            <div class="sl-content">
                                <div class="text-muted">1 days ago</div>
                                <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">2 days ago</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">3 days ago</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-warning">
                            <div class="sl-content">
                                <div class="text-muted">4 Week ago</div>
                                <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                            </div>
                        </div>
                        <div class="sl-item b-warning">
                            <div class="sl-content">
                                <div class="text-muted">5 days ago</div>
                                <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">5 Week ago</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-primary">
                            <div class="sl-content">
                                <div class="text-muted">3 Week ago</div>
                                <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                            </div>
                        </div>
                        <div class="sl-item b-warning">
                            <div class="sl-content">
                                <div class="text-muted">1 Month ago</div>
                                <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- #END# Right Sidebar --> <!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>Dashboard</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>			
				<li class="breadcrumb-item active">Dashboard</li>
			</ul>
		</div>
		<div class="row clearfix">
			<div class="col-lg-5 col-md-12 col-sm-12">
				<div class="row clearfix top-report">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="body">
								<h3 class="m-t-0">50.5 Gb</h3>
								<p class="text-muted">Traffic this month</p>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="success">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								<small>4% higher than last month</small>							
							</div>							
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="body">
								<h3 class="m-t-0">$ 14,500</h3>
								<p class="text-muted">Total Sale</p>
								<div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="warning">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
								</div>
								<small>15% higher than last month</small>
							</div>							
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="body">
								<div class="sparkline" data-type="bar" data-width="97%" data-height="77px" data-bar-Width="5" data-bar-Spacing="4" data-bar-Color="rgb(69, 127, 202)"> 6,7,8,6,7,5,8,5,7,6,8,7,6,7,5,6</div>
								<p class="m-b-0 p-t-10 text-center">Server Uptime 95.5%</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="body">
								<div class="sparkline" data-type="bar" data-width="97%" data-height="77px" data-bar-Width="5" data-bar-Spacing="4" data-bar-Color="rgb(120, 184, 62)"> 4,2,8,6,7,6,8,3,5,8,5,6,2,8,6,7,6 </div>
								<p class="m-b-0 p-t-10 text-center">Visitors 2,105</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="card email-state">
							<div class="header">
								<h2>Emails Sent</h2>
								<ul class="header-dropdown m-r--5">
									<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i></a>
										<ul class="dropdown-menu pull-right">
											<li><a href="javascript:void(0);">Action</a></li>
											<li><a href="javascript:void(0);">Another action</a></li>
											<li><a href="javascript:void(0);">Something else here</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="body">
								<div class="row clearfix">
									<div class="col-md-7 col-sm-6  text-center">
										<input type="text" class="knob" value="93" data-width="110" data-height="110" data-thickness="0.1" data-fgColor="#f0ad4e" readonly>
									</div>
									<div class="col-md-5 col-sm-6  text-center">
										<p><i class="zmdi zmdi-circle text-warning"></i> 215 Read</p>
										<p><i class="zmdi zmdi-circle col-blue-grey"></i> 34 Unread</p>
										<hr>
										<small>810 Sent Email in Total</small> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 col-sm-12 ">
				<div class="card product-report">
					<div class="header">
						<h2>Product Report</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);">Action</a></li>
									<li><a href="javascript:void(0);">Another action</a></li>
									<li><a href="javascript:void(0);">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div class="row clearfix m-b-25">
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="icon"><i class="zmdi zmdi-chart-donut"></i></div>
								<div class="col-in">
									<h3 class="counter m-b-0">$4516</h3>
									<small class="text-muted m-t-0">Sales Report</small> </div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="icon"><i class="zmdi zmdi-chart"></i></div>
								<div class="col-in">
									<h3 class="counter m-b-0">$6481</h3>
									<small class="text-muted m-t-0">Annual Revenue </small> </div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="icon"><i class="zmdi zmdi-card"></i></div>
								<div class="col-in">
									<h3 class="counter m-b-0">$3915</h3>
									<small class="text-muted m-t-0">Monthly Revenue</small> </div>
							</div>
						</div>
						<div id="area_chart" class="graph"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 col-lg-12">
				<div class="card visitors-map">
					<div class="header">
						<h2>Visitors Statistics</h2>
					</div>
					<div class="body">
						<div class="row">							
							<div class="col-md-7 col-sm-12 col-lg-8 col-xl-9">
								<div id="world-map-markers" class="jvector-map"></div>
							</div>
							<div class="col-md-5 col-sm-12 col-lg-4 col-xl-3">
								<div class="table-responsive">
									<table class="table table-hover">
										<tbody>
											<tr>											
												<td>USA</td>
												<td>$2,009</td>
												<td class="text-muted">4.22%</td>
												<td class="text-danger">-0.01%</td>
											</tr>
											<tr>											
												<td>Germany</td>
												<td>$3,526</td>
												<td class="text-muted">4.17%</td>
												<td class="text-success">+0.06%</td>
											</tr>										
											<tr>											
												<td>Australia</td>
												<td>$2,357</td>
												<td class="text-muted">3.15%</td>
												<td class="text-danger">-0.12%</td>
											</tr>
											<tr>											
												<td>Canada</td>
												<td>$3,129</td>
												<td class="text-muted">4.01%</td>
												<td class="text-success">+0.07%</td>
												</tr>
											<tr>											
												<td>France</td>
												<td>$2,143</td>
												<td class="text-muted">2.80%</td>
												<td class="text-success">+0.06%</td>
											</tr>											
										</tbody>
									</table>
								</div>
								<div class="progress-list">
									<h4>All <span class="badge pull-right bg-green">47%</span></h4>
									<div class="progress-xs not-rounded progress">
										<div class="progress-bar bg-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40%</span> </div>
									</div>
								</div>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-sm-12">
			<div class="card">
				<div class="body">
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6 text-center">
							<p class="m-t-10">Page View</p>
							<input type="text" class="knob" value="42" data-linecap="round" data-width="80" data-height="80" data-thickness="0.15" data-fgColor="#8f78db" readonly>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 text-center">
							<p class="m-t-10">Storage</p>
							<input type="text" class="knob" value="81" data-linecap="round" data-width="80" data-height="80" data-thickness="0.15" data-fgColor="#49cdd0" readonly>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 text-center">
							<p class="m-t-10">New User</p>
							<input type="text" class="knob" value="62" data-linecap="round" data-width="80" data-height="80" data-thickness="0.15" data-fgColor="#00adef" readonly>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 text-center">
							<p class="m-t-10">Total Visit</p>
							<input type="text" class="knob" value="38" data-linecap="round" data-width="80" data-height="80" data-thickness="0.15" data-fgColor="#5edb8c" readonly>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 text-center">
							<p class="m-t-10">Network</p>
							<input type="text" class="knob" value="62" data-linecap="round" data-width="80" data-height="80" data-thickness="0.15" data-fgColor="#f67a82" readonly>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 text-center">
							<p class="m-t-10">Server Storage</p>
							<input type="text" class="knob" value="38" data-linecap="round" data-width="80" data-height="80" data-thickness="0.15" data-fgColor="#f7bb97" readonly>
						</div>
					</div>
				</div>
			</div>
			<div>
		</div>
		<div class="row clearfix">
			<div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
				<div class="card">
					<div class="header">
						<h2>Browser Used</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);">Action</a></li>
									<li><a href="javascript:void(0);">Another action</a></li>
									<li><a href="javascript:void(0);">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div id="donut_chart" class="graph dashboard-donut-chart"></div>
						<div class="sparkline" data-type="bar" data-width="97%" data-height="45px" data-bar-Width="5" data-bar-Spacing="4" data-bar-Color="rgb(0, 0, 0)"> 6,7,8,6,7,5,8,5,6,8,5,6,7,6,8,7,6,7,5,8,5,6</div>
						<p class="m-b-0 p-t-10 text-center">Pageviews 2,105</p>
					</div>
				</div>
			</div>			
			<div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
				<div class="card">
					<div class="carousel slide twitter-feed" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item row text-center active">
								<div class="col-sm-12"><i class="zmdi zmdi-twitter"></i></div>
								<div class="col-sm-12">
									<p><i class="zmdi zmdi-quote"></i>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the industry's standard</p>
								</div>
							</div>
							<div class="carousel-item row text-center">
								<div class="col-sm-12">
									<i class="zmdi zmdi-twitter"></i>
								</div>
								<div class="col-sm-12">
									<p><i class="zmdi zmdi-quote"></i>It is a long established fact that a reader will ontent of a page when looking at its layout.</p>
								</div>
							</div>							
						</div>
					</div>
				</div>
				<div class="card">
					<div class="carousel slide facebook-feed" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item row text-center active">
								<div class="col-sm-12">
									<i class="zmdi zmdi-facebook"></i>
								</div>
								<div class="col-sm-12">
									<p><i class="zmdi zmdi-quote"></i>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the industry's standard</p>
								</div>								
							</div>
							<div class="carousel-item row text-center">
								<div class="col-sm-12"><i class="zmdi zmdi-facebook"></i></div>
								<div class="col-sm-12">
									<p><i class="zmdi zmdi-quote"></i>It is a long established fact that a reader will ontent of a page when looking at its layout.</p>
								</div>								
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
				<div class="card">
					<div class="header">
						<h2>INBOX</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<ul class="inbox-widget list-unstyled clearfix">
							<li class="inbox-inner"> <a href="javascript:void(0)">
								<div class="inbox-item">
									<div class="inbox-img"> <img src="assets/images/xs/avatar1.jpg" alt=""> </div>
									<div class="inbox-item-info">
										<p class="author">Aaron	Enlightened</p>
										<p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
										<p class="inbox-date">13:34 PM</p>
									</div>
								</div>
								</a> </li>
							<li class="inbox-inner"> <a href="javascript:void(0)">
								<div class="inbox-item">
									<div class="inbox-img"> <img src="assets/images/xs/avatar2.jpg" alt=""> </div>
									<div class="inbox-item-info">
										<p class="author">Alvin Doe</p>
										<p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
										<p class="inbox-date">13:34 PM</p>
									</div>
								</div>
								</a> </li>
							<li class="inbox-inner"> <a href="javascript:void(0)">
								<div class="inbox-item">
									<div class="inbox-img"> <img src="assets/images/xs/avatar3.jpg" alt=""> </div>
									<div class="inbox-item-info">
										<p class="author">Austin</p>
										<p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
										<p class="inbox-date">13:34 PM</p>
									</div>
								</div>
								</a> </li>
							<li class="inbox-inner"> <a href="javascript:void(0)">
								<div class="inbox-item">
									<div class="inbox-img"> <img src="assets/images/xs/avatar4.jpg" alt=""> </div>
									<div class="inbox-item-info">
										<p class="author">John Benjamin</p>
										<p class="inbox-message">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
										<p class="inbox-date">13:34 PM</p>
									</div>
								</div>
								</a> </li>
							<li class="inbox-inner"> <a href="javascript:void(0)">
								<div class="inbox-item">
									<div class="inbox-img"> <img src="assets/images/xs/avatar5.jpg" alt=""> </div>
									<div class="inbox-item-info">
										<p class="author">Broderick</p>
										<p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
										<p class="inbox-date">13:34 PM</p>
									</div>
								</div>
								</a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-sm-12 col-md-12 col-lg-5 col-xl-4">
				<div class="card activities">
					<div class="header">
						<h2>Activities</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div class="streamline b-l b-accent">
							<div class="sl-item">
								<div class="sl-content">
									<div class="text-muted-dk">Just now</div>
									<p>Finished task <a href="" class="text-info">#features 4</a>.</p>
								</div>
							</div>
							<div class="sl-item b-info">
								<div class="sl-content">
									<div class="text-muted-dk">11:30</div>
									<p><a href="">@Jessi</a> retwit your post</p>
								</div>
							</div>
							<div class="sl-item b-primary b-l">
								<div class="sl-content">
									<div class="text-muted-dk">10:30</div>
									<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
								</div>
							</div>
							<div class="sl-item b-warning">
								<div class="sl-content">
									<div class="text-muted-dk">3 days ago</div>
									<p><a href="" class="text-info">Jessi</a> commented your post.</p>
								</div>
							</div>
							<div class="sl-item b-primary b-l">
								<div class="sl-content">
									<div class="text-muted-dk">10:30</div>
									<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
								</div>
							</div>
							<div class="sl-item b-primary b-l">
								<div class="sl-content">
									<div class="text-muted-dk">10:30</div>
									<p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
								</div>
							</div>
							<div class="sl-item b-warning">
								<div class="sl-content">
									<div class="text-muted-dk">3 days ago</div>
									<p><a href="" class="text-info">Jessi</a> commented your post.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
				<div class="card">
					<div class="header">
						<h2>Recent Orders</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);">Action</a></li>
									<li><a href="javascript:void(0);">Another action</a></li>
									<li><a href="javascript:void(0);">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Invoice#</th>
										<th>Name</th>
										<th>Item</th>										
										<th>Date</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#2583</td>
										<td>Jhone Doe</td>
										<td><span class="label label-info">iPhone7</span></td>										
										<td>Sept 11, 2017</td>
										<td><span class="text-success">$350</span></td>
									</tr>
									<tr>
										<td>#2584</td>
										<td>Deborah Young</td>
										<td><span class="label label-info">Nokia 6</span></td>										
										<td>Sept 13, 2017</td>
										<td><span class="text-success">$180</span></td>
									</tr>
									<tr>
										<td>#2584</td>
										<td>Deborah Young</td>
										<td><span class="label label-info">Nokia 6</span></td>										
										<td>Sept 13, 2017</td>
										<td><span class="text-success">$180</span></td>
									</tr>
									<tr>
										<td>#2585</td>
										<td>Mike Dake</td>
										<td><span class="label label-info">Redmi Note4</span></td>
										<td>Sept 18, 2017</td>
										<td><span class="text-success">$120</span></td>
									</tr>
									<tr>
										<td>#2586</td>
										<td>Jhone Doe</td>
										<td><span class="label label-info">iPhonex</span></td>
										<td>Sept 18, 2017</td>
										<td><span class="text-success">$870</span></td>
									</tr>
									<tr>
										<td>#2587</td>
										<td>Jhonson lee</td>
										<td><span class="label label-info">iPhone7</span></td>
										<td>Sept 22, 2017</td>
										<td><span class="text-success">$350</span></td>
									</tr>
									<tr>
										<td>#2588</td>
										<td>Lew Shawon</td>
										<td><span class="label label-info">iPhone 6s</span></td>
										<td>Sept 29, 2017</td>
										<td><span class="text-success">$315</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row sales-report">
							<div class="col-md-6 col-sm-6">									
								<h4>September 2017</h4>
								<p class="m-b-0">SALES REPORT</p>
							</div>
							<div class="col-md-6 col-sm-6  ">
								<h2 class="text-right text-success m-b-0">$2,185</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-sm-12 col-md-12 col-lg-4">
				<div class="card current_progress">
					<div class="header">
						<h2>CHAT Box</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div class="chat-widget">
							<ul class="chat-scroll-list">
								<li class="left"> <img src="assets/images/xs/avatar1.jpg" alt="">
									<div class="chat-info"> <a class="name" href="javascript:void(0)">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> It was popularised in the 1960s with the release of Letraset sheets containing</span> </div>
								</li>
								<li class="right-me"> <img src="assets/images/xs/avatar2.jpg" alt="">
									<div class="chat-info"> <a class="name" href="javascript:void(0)">Austin</a> <span class="datetime">6:12</span> <span class="message">Richard McClintock, a Latin professor at Hampden-Sydney College</span> </div>
								</li>
								<li class="left"> <img src="assets/images/xs/avatar1.jpg" alt="">
									<div class="chat-info"> <a class="name" href="javascript:void(0)">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </span> </div>
								</li>
								<li class="right-me"> <img src="assets/images/xs/avatar2.jpg" alt="">
									<div class="chat-info"> <a class="name" href="javascript:void(0)">Austin</a> <span class="datetime">6:12</span> <span class="message">There are many variations of passages of Lorem Ipsum available,</span> </div>
								</li>
							</ul>
						</div>
						<div class="input-group">
							<div class="form-line">
								<input type="text" class="form-control date" placeholder="Enter your email...">
							</div>
							<span class="input-group-addon"> <i class="material-icons">send</i> </span> </div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-8">
				<div class="card">
					<div class="header">
						<h2>Social Media</h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);">Action</a></li>
									<li><a href="javascript:void(0);">Another action</a></li>
									<li><a href="javascript:void(0);">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
						<div class="table-responsive social_media_table">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Media</th>
										<th>Name</th>
										<th>Like</th>
										<th>Comments</th>
										<th>Share</th>
										<th>Members</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span class="list-icon linkedin"><i class="zmdi zmdi-linkedin"></i></span></td>
										<td><span class="list-name">Linked In</span> <span class="text-muted">Florida, United States</span></td>
										<td>19K</td>
										<td>14K</td>
										<td>10K</td>
										<td><span class="label label-success">2341</span></td>
									</tr>
									<tr>
										<td><span class="list-icon twitter-table"><i class="zmdi zmdi-twitter"></i></span></td>
										<td><span class="list-name">Twitter</span> <span class="text-muted">Arkansas, United States</span></td>
										<td>7K</td>
										<td>11K</td>
										<td>21K</td>
										<td><span class="label label-success">952</span></td>
									</tr>
									<tr>
										<td><span class="list-icon facebook"><i class="zmdi zmdi-facebook"></i></span></td>
										<td><span class="list-name">Facebook</span> <span class="text-muted">Illunois, United States</span></td>
										<td>15K</td>
										<td>18K</td>
										<td>8K</td>
										<td><span class="label label-success">6127</span></td>
									</tr>
									<tr>
										<td><span class="list-icon google"><i class="zmdi zmdi-google-plus"></i></span></td>
										<td><span class="list-name">Google Plus</span> <span class="text-muted">Arizona, United States</span></td>
										<td>15K</td>
										<td>18K</td>
										<td>154</td>
										<td><span class="label label-success">325</span></td>
									</tr>
									<tr>
										<td><span class="list-icon youtube"><i class="zmdi zmdi-youtube-play"></i></span></td>
										<td><span class="list-name">YouTube</span> <span class="text-muted">Alaska, United States</span></td>
										<td>15K</td>
										<td>18K</td>
										<td>200</td>
										<td><span class="label label-success">160</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-sm-12 col-md-12">
				<div class="card">
					<div class="body" id="footer">
						<div class="row">
							<div class="col-sm-12 col-md-8 col-lg-4">
								<h5>Email Newsletters</h5>
								<p>Sign up for new MaterialWrap content, updates, and offers.</p>
								<div class="input-group">
									<div class="form-line">
										<input type="text" class="form-control date" placeholder="Enter your email...">
									</div>
									<span class="input-group-addon"> <i class="material-icons">send</i> </span> </div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-2">
								<h5>Company</h5>
								<ul class="list-unstyled company">
									<li><a href="javascript:void(0)">About Us </a></li>
									<li><a href="javascript:void(0)">Careers</a></li>
									<li><a href="javascript:void(0)">Privacy Policy</a></li>
									<li><a href="javascript:void(0)">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6">
								<h5>Want to Work with Us?</h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							</div>
							<div class="col-sm-12">
								<p class="copy m-b-0">© Copyright
									<time class="year">2017</time>
									WrapTheme  - All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js --> 

<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js --> 
<script src="assets/bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js --> 
<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Flot Charts Plugin Js --> 

<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script> <!-- Jquery Knob Plugin Js --> 
<script src="assets/bundles/jvectormapscripts.bundle.js"></script><!-- JVectorMap Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/index.js"></script> 
<script src="assets/js/pages/charts/sparkline.js"></script> 
<script src="assets/js/pages/maps/jvectormap.js"></script> 
<script src="assets/js/pages/charts/jquery-knob.js"></script>
</body>
</html>
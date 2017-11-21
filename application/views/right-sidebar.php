<!--Side menu and right menu -->
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
	<!-- Menu -->
	<div class="menu">
		<ul class="list">
			<li> 
				<!-- User Info -->
				<div class="user-info">
					<div class="admin-image"> <img src="<?php echo base_url();?>assets/images/sm/avatar1.jpg" alt="profile img"> </div>
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

			<li class= "open active"><a href="<?php echo base_url(); ?>"><i class="zmdi zmdi-home"></i><span>หน้าแรก</span> </a></li>
			<li class=""> <a href="javascript:void(0);" class="menu-toggle"> <i class="material-icons">account_balance</i> <span class="icon-name">ข้อมูลร้านค้า</span> </a>
				<ul class="ml-menu">
					
					<li class=""><a href="<?php echo base_url();?>merchant/merchant/total_income">ยอดรวมรายได้</a></li>
					<li><a href="<?php echo base_url();?>merchant/merchant/merchant_bank_detail">ข้อมูลส่วนตัวและบัญชีธนาคาร</a></li>
					<li><a href="<?php echo base_url();?>merchant/merchant/service">ข้อมูลบริการ</a></li>
					<li><a href="<?php echo base_url(); ?>merchant/merchant/billing_address">ที่อยู่ใบกำกับภาษี</a></li>
					<li><a href="<?php echo base_url(); ?>merchant/merchant/merchant_description">Pay.Sn Merchant Description</a></li>
					<li><a href="<?php echo base_url(); ?>merchant/merchant/upload_doc">Upload Document</a></li>
				</ul>
			</li>
			<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>การสั่งซื้อและผู้ซื้อ</span> </a>
				<ul class="ml-menu">
					<li > <a href="<?php echo base_url();?>orders/orders/view_all_orders">รายการสั่งซื้อทั้งหมด</a></li>
					<li> <a href="<?php echo base_url();?>orders/orders/refund">คืนเงินหรือยกเลิกรายการ</a></li>
				</ul>
			</li>
			<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>ระบบการทำงาน</span> </a>
				<ul class="ml-menu">
					<li> <a href="<?php echo base_url();?>system_s/system_s/primary_setting">ตั้งค่าเบื้องต้น</a> </li>
					<li> <a href="<?php echo base_url();?>system_s/system_s/System_Connection">วิธีการเชื่อมต่อระบบ</a></li>
					<li> <a href="<?php echo base_url(); ?>system_s/system_s/return_param">การส่งค่ากลับ</a> </li>
					<li> <a href="<?php echo base_url(); ?>system_s/system_s/down_load">ดาวน์โหลด</a> </li>

				</ul>
			</li>
			<li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>สินค้าและบริการ</span> </a>
				<ul class="ml-menu">

					<li> <a href="<?php echo base_url(); ?>productservice/productservice/Addnewproduct_service">เพิ่มสินค้าและบริการ</a> </li>
					<li> <a href="<?php echo base_url(); ?>productservice/productservice/customize_product">การจัดการสินค้า</a> </li>
					<li> <a href="<?php echo base_url(); ?>productservice/productservice/payment_method">ช่องทางการชำระเงิน</a> </li>
					<li> <a href="<?php echo base_url(); ?>productservice/productservice/shipping_method">วิธีการขนส่งสินค้า</a> </li>
				</ul>
			</li>
			<li ><a href="<?php echo base_url(); ?>exchangerate/exchangerate/exchange_rate"><i class="material-icons">attach_money</i> <span class="icon-name">อัตราแลกเปลี่ยน</span> </a></li>
			<li ><a href="<?php echo base_url(); ?>TipsTricks/TipsTricks/Tips_Tricks"><i class="material-icons">highlight</i> <span class="icon-name">ทิปการใช้งาน</span> </a></li>
			<li ><a href="<?php echo base_url(); ?>/news/news/new_s"><i class="material-icons">event_note</i> <span class="icon-name">ข่าวสารใหม่</span> </a></li>
			<li> <a href="javascript:void(0);" class="menu-toggle"><i class="material-icons">contact_phone</i><span>ติดต่อเรา</span> </a>
				<ul class="ml-menu">

					<li> <a href="<?php echo base_url(); ?>/contact/contact/support">Support</a> </li>
					<li> <a href="<?php echo base_url(); ?>/contact/contact/accounting">Account</a> </li>
				</ul>
			</li>
			<li ><a href="<?php echo base_url(); ?>TermsConditions/TermsConditions/Terms_Conditions"><i class="material-icons">gamepad</i> <span class="icon-name">เงื่อนไขการให้บริการ</span> </a></li>
			
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
<!-- #END# Right Sidebar --> 
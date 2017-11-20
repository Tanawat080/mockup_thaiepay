<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>หน้าแรก</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><i class="material-icons">home</i><a href="<?php echo base_url(); ?>">หน้าแรก</a></li>			
			</ul>
		</div>
		<div class="row clearfix">
			<div class="row">
				<div class="col-sm-8">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="card widget-stat  info-box-3 bg-blue">
			                    	<div class="body">
			                        	<div class="media">
			                            	<div class="media-icon bg-light-green">
			                                	<i class="zmdi zmdi-money zmdi-hc-2x"></i>
			                            	</div>
				                            <div class="media-text">
				                                <span class="title col-white">Summary GMS By Month</span>
				                                <span class="value col-white">29,248,340</span>
				                            </div>
			                        	</div> 
			                    	</div>
			                	</div>
			            </div><!-- summary by month -->
			            <div class="col-lg-6 col-md-6 col-sm-12">
							<div class="card widget-stat info-box-3 bg-light-green">
			                    <div class="body">
			                        <div class="media">
			                            <div class="media-icon bg-blue">
			                                <i class="zmdi zmdi-gamepad zmdi-hc-2x"></i>
			                            </div>
				                        <div class="media-text">
					                        <span class="title col-white">Count transactions By Month</span>
					                        <span class="value col-white">62,507</span>
				                        </div>
			                        </div> 
			                    </div>
			                </div>
		                </div>
					</div>
					<div class="card product-report">
						<div class="header">
							<h2>Summary GMS By Date</h2>
						</div>
						<div class="body">
							<canvas id="line_chart" height="200"></canvas>
						</div>
					</div>
					
				</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="row clearfix top-report">
            		<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="card widget-stat ">
						    <div class="body">
                        		<div class="table-responsive">
									<table class="table table-hover text-center">
										<thead>
											<tr>
												<th>Country</th>
												<th>Currency</th>
												<th>Buying</th>
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
												<td><img src="assets/images/exchange-flag/JPY.gif"></td>
												<td>JPY</td>
												<td class="text-muted">27.82</td>
											</tr>	
																				
										</tbody>
									</table>
									<a href="">อัตราการแลกเปลี่ยนอื่นๆ</a>
								</div>
                    		</div>
                		</div>
            		</div><!-- exchange rate -->
            		<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="card widget-stat ">
							<div class="header">
								<h2>ถาม-ตอบยอดนิยม</h2>
							</div>
						    <div class="body">
                        		<ol>
                        			<li><a href="" class="col-blue-grey">ในกรณีที่ไม่ได้รับสินค้าจากร้านค้า ผู้ซื้อต้องทำอย่างไร?</a></li>
                        			<li><a href="" class="col-blue-grey">ร้านค้าต้องทำอย่างไรเมื่อรายการสั่งซื้อถูกเปลี่ยนสถานะเป็น Request Document</a></li>
                        			<li><a href="" class="col-blue-grey">ไทยอีเพย์กำหนดวงเงินสูงสุดในการทำรายการไว้ที่เท่าไหร่?</a></li>
                        			<li><a href="" class="col-blue-grey">ในกรณีที่ไม่ได้รับสินค้าจากร้านค้า ผู้ซื้อต้องทำอย่างไร?</a></li>
                        			<li><a href="" class="col-blue-grey">ร้านค้าต้องทำอย่างไรเมื่อรายการสั่งซื้อถูกเปลี่ยนสถานะเป็น Request Document</a></li>
                        		</ol>
                        		<a href="">ถาม-ตอบอื่นๆ</a>
                    		</div>
                		</div>
            		</div>

				</div>
			</div>
		</div> <!-- row -->
		

			<div class="col-sm-12">
				<div class="card">
					<div class="header">
						<h2>20 รายการสั่งซื้อล่าสุด</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>OrderNo</th>
                                        <th>Detail</th>
                                        <th>Card</th>
                                        <th>Total</th>
                                        <th>Date Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
												<td><img src="assets/images/sign/CP.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/N.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/RF.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/CP.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/N.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/RF.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/CP.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/N.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/RF.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/CP.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/N.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/RF.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/CP.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/N.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/RF.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/CP.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/N.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/RF.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/CP.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><img src="assets/images/sign/N.png"></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
                                </tbody>
                            </table>
                            <a href="<?php echo base_url(); ?>orders/orders/view_all_orders">รายการสั่งซื้อทั้งหมด คลิกที่นี่</a>
                        </div>
					</div>
				</div>
			</div> <!-- last 20 orders -->
		</div><!-- row clearfix -->
		
	</div><!-- contianer -->

		
		<div class="row clearfix">
			<div class="col-sm-12 col-md-12">
				<div class="card">
					<div class="body" id="footer">
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
</section>

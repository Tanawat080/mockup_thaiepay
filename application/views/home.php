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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                        	<div class="body">
							<div class="row">
								<div class="col-sm-2"></div>
								<div class="col-sm-4">
									<div class="card widget-stat  info-box-3 ">
				                    	<div class="body">
				                        	<div class="media">
				                            	<div class="media-icon text-warning">
				                                	<i class="zmdi zmdi-money zmdi-hc-2x"></i>
				                            	</div>
					                            <div class="media-text">
					                                <span class="title ">Summary GMS By Month</span>
					                                <span class="value ">29,248,340</span>
					                            </div>
				                        	</div> 
				                    	</div>
				                	</div>
				            	</div>
				            	<div class="col-sm-4">
				            		<div class="card widget-stat info-box-3">
			                    <div class="body">
			                        <div class="media">
			                            <div class="media-icon text-warning">
			                                <i class="zmdi zmdi-gamepad zmdi-hc-2x"></i>
			                            </div>
				                        <div class="media-text">
					                        <span class="title ">Count transactions By Month</span>
					                        <span class="value ">62,507</span>
				                        </div>
			                        </div> 
			                    </div>
			                </div>
				            	</div>
				            </div>
							<canvas id="line_chart" height="100"></canvas>
						</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

               <div class="row clearfix">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <div class="card">
	                	<div class="body">
			                        		<div class="table-responsive">
												<table class="table table-hover">
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
												<td><img src="assets/images/exchange-flag/CHF.gif"></td>
												<td>CHF</td>
												<td class="text-muted">32.07</td>
											</tr>
											<tr>											
												<td><img src="assets/images/exchange-flag/JPY.gif"></td>
												<td>JPY</td>
												<td class="text-muted">28.16</td>
											</tr>
											<tr>											
												<td><img src="assets/images/exchange-flag/SGD.gif"></td>
												<td>SGD</td>
												<td class="text-muted">22.69</td>
											</tr>										
											<tr>											
												<td><img src="assets/images/exchange-flag/HKD.gif"></td>
												<td>HKD</td>
												<td class="text-muted">3.60</td>
											</tr>
											<tr>											
												<td><img src="assets/images/exchange-flag/AUD.gif"></td>
												<td>AUD</td>
												<td class="text-muted">23.00</td>
											</tr>									
													</tbody>
												</table>
												<a href="">อัตราการแลกเปลี่ยนอื่นๆ</a>
											</div>
			                    		</div>
					</div>
				</div>
</div>
		<div class="row clearfix">
			<div class="col-sm-12">
				<div class="card">
					<div class="header">
						<h2>20 รายการสั่งซื้อล่าสุด</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr >
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
												<td><i class="material-icons text-success">check</i></td>
												<td><a href="<?php echo base_url(); ?>orders/orders/orders_details">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-warning">hourglass_full</i></td>
												<td><a href="<?php echo base_url(); ?>orders/orders/counter_details">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-danger">close</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-success">check</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-warning">hourglass_full</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-danger">close</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-success">check</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-warning">hourglass_full</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-danger">close</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-success">check</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-warning">hourglass_full</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-danger">close</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-success">check</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-warning">hourglass_full</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-danger">close</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-success">check</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-warning">hourglass_full</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-danger">close</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-success">check</i></td>
												<td><a href="">02258118</a></td>
												<td>Refund (OrderNo#02258102 OrderID#1098572 )</td>
												<td>M5737</td>
												<td>-1.00Baht</td>
												<td>14-11-2560 16:41:44</td>
											</tr>
											<tr>
												<td><i class="material-icons text-warning">hourglass_full</i></td>
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



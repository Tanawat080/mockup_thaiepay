
<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>ยอดรวมรายได้</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><i class="material-icons">account_balance</i><a href="<?php echo base_url();?>merchant/merchant/merchant"> ข้อมูลร้านค้า</a></li>			
				<li class="breadcrumb-item active"><i class="material-icons">attach_money</i>ยอดรวมรายได้</li>
			</ul>
		</div>

		

		<div class="row clearfix">
			<div class="col-md-12 col-lg-12">
				<div class="card visitors-map">
					<div class="header">
						<h2 class="col-blue-grey">สรุปยอดได้ตามช่วงเวลา</h2>
					</div>
					<div class="body ">
						<div class="row">							
							<div class="col-sm-12">	
								<p class="indent">คุณสามารถคำนวณยอดรวมรายได้ร้านค้า โดยเลือก วันเริ่มต้น และวันที่สิ้นสุด การคำนวณยอดเงิน จะรวมเงินทั้งหมด ออกมาในหน่วยของสกุลเงินบาท ซึ่งในกรณีที่ร้านค้าของคุณรับชำระเงินด้วยสกุลเงินอื่นๆ นอกเหนือจาก สกุลเงินบาท การแปลงค่าเงินเหล่านี้ สามารถตรวจสอบได้จากเมนู "รายการสั่งซื้อ" ซึ่งจะบอกรายละเอียดว่า รายการสั่งซื้อใด แปลงเป็นหน่วยเงินบาทได้เท่าไร โดยอ้างอิงจากอัตราแลกเปลี่ยนของวันที่เท่าไร </p>
							</div>	
							<div class="col-sm-2">
								
								<p class="indent"><b>ระหว่างวันที่:*</b></p>
							</div>	
							<div class="col-sm-3">
							 	<div class="input-group"> <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control datetime" placeholder="Please choose Date...">
                                        </div>
                               	</div>
                            </div>	
                            <div class="col-sm-1 text-center">
                               <p>ถึง</p>
                            </div>
                            <div class="col-sm-3">
							 	<div class="input-group"> <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control datetime" placeholder="Please choose Date...">
                                        </div>
                               	</div>
                            </div>
                            <div class="col-sm-3 text-center">
                            	<button type="button" data-color="blue" class="btn btn-raised bg-blue waves-effect">submit</button>

                            </div>
                            <div class="col-sm-12">
                            <br/>
	                            <table width="100%" class="table table-hover">
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/CP.png"> รายการสั่งซื้อ "อนุมัติ" :	</td>
	                            		<td align="right">3 รายการ</td>
	                            	</tr>
	                            		<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/RF.png"> รายการสั่งซื้อ "ถูกปฎิเสธ" :	</td>
	                            		<td align="right">8 รายการ</td>
	                            	</tr>
	                            		<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/HO.png"> รายการสั่งซื้อ "ถูกยึดหน่วย" :	</td>
	                            		<td align="right">0 รายการ</td>
	                            	</tr>
	                            		<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/N.png"> รายการสั่งซื้อ "รอการชำระเงิน" :	</td>
	                            		<td align="right">11 รายการ</td>
	                            	</tr>
	                            </table>
	                            <br/><br/>
	                            <table width="100%" class="table table-hover">
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/visa.png" width="44" height="28"> รวมยอดเงินจากบัตร Visa :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/mastercard.png" width="44" height="28"> รวมยอดเงินจากบัตร MasterCard :</td>
	                            		<td align="center"></td>
	                            		<td align="right">199.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/amex.png" width="44" height="28"> รวมยอดเงินจากบัตร American Express :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/jcb.png" width="44" height="28"> รวมยอดเงินจากบัตร Japan Credit Bureau :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/cup.png" width="44" height="28"> รวมยอดเงินจากบัตร China Unionpay :	</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/counterservice.jpg" width="44" height="28"> รวมยอดเงินจากบัตร Counter Service :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/paypalre.png" width="50" height="28"> รวมยอดเงินจากบริการ PayPal :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/bitcoin.png" width="50" height="28"> รวมยอดเงินจากบริการ Bitcoin :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/a.png" width="44" height="28"> รวมยอดเงินจากบริการ mPOS :	</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            		<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/iBanking.png" width="44" height="28"> รวมยอดเงินจากบริการ iBanking :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left"><img src="<?php echo base_url(); ?>assets/images/sign/COD.png" width="44" height="28">:	</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left">รวมยอดเงินอื่นๆ :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            </table>
	                            <div class="row sales-report">
									<div class="col-md-6 col-sm-6">									
										<h4 class="text-success">รวมทั้งสิ้น (บาท)</h4>

									</div>
									<div class="col-md-6 col-sm-6 ">
										<h3 class="text-right text-success">฿199.00</h3>
									</div>
								</div>

	                            <table width="100%" class="table table-hover">

	                            	<tr>
	                            		<td align="left">หักค่าธรรมเนียม 0.00% (รวมภาษีมูลค่าเพิ่ม) :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left">บัตร American Express หักค่าธรรมเนียม 4.75% (รวมภาษีมูลค่าเพิ่ม) :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left">PayPal หักค่าธรรมเนียม 4.75% (รวมภาษีมูลค่าเพิ่ม) :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            	<tr>
	                            		<td align="left">หักค่าธรรมเนียม mPOS 3.50% (รวมภาษีมูลค่าเพิ่ม) :</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00 Baht</td>
	                            	</tr>
	                            </table>
	                            	<div class="row sales-report">
										<div class="col-md-6 col-sm-6">									
											
										</div>
										<div class="col-md-6 col-sm-6  ">
											<h5 class="text-right text-success m-b-0">0.00 Baht</h5>
										</div>
									</div>
	                           	<table width="100%" class="table table-hover">
	                            	<tr>
	                            		<td align="left">หักหรือเพิ่มรายการอื่นๆ:</td>
	                            		<td align="center">Refund Amount OrderNo#02249329	</td>
	                            		<td align="right">-199.00 Baht</td>
	                            	</tr>
	                            	</table>
	                            	<div class="row sales-report">
										<div class="col-md-6 col-sm-6">									
											
										</div>
										<div class="col-md-6 col-sm-6  ">
											<h5 class="text-right text-success m-b-0">-199.00 Baht</h5>
										</div>
									</div>
	                            	<table width="100%" class="table table-hover">

	                            		<td align="left">รายการคืนเงิน:</td>
	                            		<td align="center"></td>
	                            		<td align="right">0.00Baht</td>
	                            	</tr>
	                            	</tr>
	                            	
	                            </table>
	                            <div class="row sales-report">
									<div class="col-md-6 col-sm-6">									
										<h3 class="text-success">ยอดเงินรายได้ร้านค้าสุทธิ </h3>

									</div>
									<div class="col-md-6 col-sm-6  ">
										<h2 class="text-right text-success m-b-0">฿0.00</h2>
									</div>
								</div>
	                        </div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- summary by period -->

		<div class="row clearfix">
			<div class="col-md-12 col-lg-12">
				<div class="card visitors-map">
					<div class="header">
						<h2 class="col-blue-grey">ประวัติการโอนเงินย้อนหลัง 6 เดือน</h2>
					</div>
					<div class="body">	
							<p class="indent">นอกจากคุณจะสามารถเลือกแสดงยอดรวมรายได้ตามช่วงวันเวลาในหัวข้อก่อนหน้านี้ได้แล้ว ระบบของเรายังแสดงประวัติการโอนเงินย้อนหลัง 6 เดือนเพื่ออำนวยความสะดวกให้คุณตรวจสอบประวัติยอดรวมรายได้ของร้านค้าที่ผ่านมาได้ </p>

							<div class="body table-responsive "> 
								<table class="table table-hover js-basic-example ">
                                <thead>
                                    <tr>
                                        <th width="10%">สถานะ</th>
                                        <th width="50%">รายได้ระหว่างวันที่</th>
                                        <th width="20%">วันที่โอนเงิน</th>
                                        <th width="20%">ยอดโอนเงิน</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>สถานะ</th>
                                        <th>รายได้ระหว่างวันที่</th>
                                        <th>วันที่โอนเงิน</th>
                                        <th>ยอดโอนเงิน</th>
                                       
                                    </tr>
                                </tfoot>
                                <tbody>
                                  	<tr>
						                <td><img src="<?php echo base_url();?>assets/images/sign/PE.png" /></td>
						                <td>16 ต.ค. 2560 - 31 ต.ค. 2560</td>
						                <td>10 พ.ย. 2560</td>
						                <td>60.00 Baht</td>
					            	</tr>
        							<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/PE.png" /></td>
                						<td>1 ต.ค. 2560 - 15 ต.ค. 2560</td>
                						<td>25 ต.ค. 2560</td>
                						<td>0.96 Baht</td>
            						</tr>
            						<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/NO.png" /></td>
                						<td>16 ก.ย. 2560 - 30 ก.ย. 2560</td>
                						<td>10 ต.ค. 2560</td>
                						<td>0.00 Baht</td>
            						</tr>
            						<tr>
						                <td><img src="<?php echo base_url();?>assets/images/sign/PE.png" /></td>
						                <td>1 ก.ย. 2560 - 15 ก.ย. 2560</td>
						                <td>25 ก.ย. 2560</td>
						                <td>0.96 Baht</td>

					            	</tr>
        							<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/NO.png" /></td>
                						<td>1 ส.ค. 2560 - 15 ส.ค. 2560</td>
                						<td>25 ส.ค. 2560</td>
                						<td>0.00 Baht</td>
            						</tr>
            						<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/NO.png" /></td>
                						<td>16 ก.ค. 2560 - 31 ก.ค. 2560</td>
                						<td>10 ส.ค. 2560</td>
                						<td>0.00 Baht</td>
            						</tr>
            						<tr>
						                <td><img src="<?php echo base_url();?>assets/images/sign/NO.png" /></td>
						                <td>1 ก.ค. 2560 - 15 ก.ค. 2560</td>
						                <td>25 ก.ค. 2560</td>
						                <td>47.99 Baht</td>
					            	</tr>
        							<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/PE.png" /></td>
                						<td>16 มิ.ย. 2560 - 30 มิ.ย. 2560</td>
                						<td>10 ก.ค. 2560</td>
                						<td>0.00 Baht</td>
            						</tr>
            						<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/NO.png" /></td>
                						<td>16 มิ.ย. 2560 - 30 มิ.ย. 2560</td>
                						<td>10 ก.ค. 2560</td>
                						<td>0.00 Baht</td>
            						</tr>
            						<tr>
						                <td><img src="<?php echo base_url();?>assets/images/sign/NO.png" /></td>
						                <td>16 ต.ค. 2560 - 31 ต.ค. 2560</td>
						                <td>10 พ.ย. 2560</td>
						                <td>60.00 Baht</td>
					            	</tr>
        							<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/NO.png" /></td>
                						<td>1 มิ.ย. 2560 - 15 มิ.ย. 2560</td>
                						<td>25 มิ.ย. 2560</td>
                						<td>0.00 Baht</td>
            						</tr>
            						<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/NO.png" /></td>
                						<td>16 พ.ค. 2560 - 31 พ.ค. 2560</td>
                						<td>10 มิ.ย. 2560</td>
                						<td>0.00 Baht</td>
            						</tr>
            						<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/PE.png" /></td>
                						<td>1 พ.ค. 2560 - 15 พ.ค. 2560</td>
                						<td>25 พ.ค. 2560</td>
                						<td>0.00 Baht</td>
            						</tr>
            						<tr>
                						<td><img src="<?php echo base_url();?>assets/images/sign/NO.png" /></td>
                						<td>16 เม.ย. 2560 - 30 เม.ย. 2560</td>
                						<td>10 พ.ค. 2560</td>
                						<td>479.94 Baht</td>
            						</tr>
                                </tbody>
                            </table>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- History last 6 months -->
		

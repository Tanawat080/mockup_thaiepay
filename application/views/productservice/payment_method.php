
<!-- main content -->
<section class="content home">
  <div class="container-fluid">
    <div class="block-header">
      <h2>สินค้าและบริการ</h2>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">หน้าแรก</a></li>     
        <li class="breadcrumb-item active">แก้ไขวิธีการชำระเงินของร้านค้า</li>
      </ul>
    </div>
    <div class="row clearfix">
      <div class="col-md-12 col-lg-12">
        <div class="card visitors-map">
          <div class="header">
            <h2>แก้ไขวิธีการชำระเงินของร้านค้า</h2>
          </div>
          <div class="body">
            <div class="row">             
              <div class="col-sm-12"> 
                <p class="indent">คุณสามารถแก้ไขวิธีการชำระเงินของร้านค้าได้ผ่านการกรอกข้อมูลลงในแบบฟอร์มด้านล่างนี้ </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div><!-- income monthly -->

<div class="row clearfix">
    <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h3>ข้อมูลการเชื่อมต่อระบบชำระเงิน</h3>
                        
                    </div>
                    <div class="col-sm-12"> 
                    	<div class="body">
		                <p class="indent">ข้อมูลเหล่านี้ใช้สำหรับแจ้งให้ ผู้ให้บริการระบบชำระเงินทราบ อย่างเช่น Url สำหรับส่งค่ากลับหรือ Post Back Url เพื่อให้การเชื่อมต่อสมบูรณ์ </p>
		            	</div>
		            </div>

		            <div class="body">


		                <table id="ctl00_CphBody_Table1" class="form2">
							<tr>
								<td>
					    <span id="ctl00_CphBody_LblPostBackUrl" class="btext">Url สำหรับส่งค่ากลับ (Post Back Url)</span>
					    :<br />
					    <div class="graybox">
					     <span id="ctl00_CphBody_LblPostBackUrlValue">https://www.thaiepay.com/payment/postbackct.aspx</span>
					    </div>
					    
					    <br />
					    <br />
					        <span id="ctl00_CphBody_LblReturnUrl" class="btext">Url สำหรับแสดงผลเมื่อชำระเงินผ่าน (Return Url)</span>
					    :<br />
					    <div class="graybox">
					     <span id="ctl00_CphBody_LblReturnUrlValue">https://www.thaiepay.com/payment/placeorder.aspx</span>
					    </div>
					    
					    <br />
					    </td>
							</tr>
						</table>
					</div>

                                  
                </div>
            </div>
    </div>

    <div class="row clearfix">
    		<div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h3>แก้ไขข้อมูลระบบชำระเงิน</h3>
                        
                    </div>
                    
                    	<div class="body">
		                <p class="indent"> ให้กรอกข้อมูลทับลงในช่องที่ต้องการแก้ไข แล้วคลิกที่ปุ่ม Submit</p>
		            	</div>

		            	<div class="body">
		            	<table>
								<tr>
									<td class="left">
						    <span id="ctl00_CphBody_LblStatus">สถานะ</span>:*</td>
									<td>
						 <input id="ctl00_CphBody_ChkEnable" type="checkbox" name="ctl00$CphBody$ChkEnable" class="filled-in" checked="checked" /><label for="ctl00_CphBody_ChkEnable">เปิดใช้งาน วิธีการชำระเงินนี้</label>
						    </td>
								</tr>
								<tr>
									<td class="left">
						     <span id="ctl00_CphBody_LblNameEN">ชื่อวิธีการชำระเงิน (อังกฤษ)</span>:*</td>
									<td>
						    <input name="ctl00$CphBody$TxtNameEN" type="text" value="Credit card online by THAIEPAY (VISA, MasterCard, American Express, PayPal, Japan Credit Bureau and China Unionpay)" maxlength="255" id="ctl00_CphBody_TxtNameEN" class="textboxl" />
						      <span id="ctl00_CphBody_ReqTxtNameEN" style="color:Red;visibility:hidden;">Please fill Name</span>     

						    </td>
								</tr>
								<tr>
									<td class="left">
						     <span id="ctl00_CphBody_LblNameTH">ชื่อวิธีการชำระเงิน (ไทย)</span>:*</td>
									<td>
						    <input name="ctl00$CphBody$TxtNameTH" type="text" value="ชำระเงินผ่านบัตรเครดิต VISA, MasterCard, American Express, PayPal, Japan Credit Bureau และ China Unionpay ออนไลน์ด้วยระบบของ THAIEPAY" maxlength="255" id="ctl00_CphBody_TxtNameTH" class="textboxl" />
						      <span id="ctl00_CphBody_ReqTxtNameTH" style="color:Red;visibility:hidden;">Please fill Name</span>     

						    </td>
								</tr>
								<tr>
									<td class="left">
						    <span id="ctl00_CphBody_LblLogo">โลโก้</span>:*</td>
									<td>
						    <input id="ctl00_CphBody_RadOldLogo" type="radio" name="ctl00$CphBody$RadOldLogo" value="RadOldLogo" checked="checked" /> 
						    <span id="ctl00_CphBody_LblOldLogo">ใช้โลโก้เดิม:</span> <img id="ctl00_CphBody_ImgOldLogo" src="http://www.thaiepay.com/shop/merchant/4411/logo_s.png" alt="logo_s.png" style="border-width:0px;" /><br />
						    <input id="ctl00_CphBody_RadNewLogo" type="radio" name="ctl00$CphBody$RadNewLogo" value="RadNewLogo" /> 
						    <span id="ctl00_CphBody_LblNewLogo">เปลี่ยนโลโก้ใหม่:</span> 
						    <input type="file" name="ctl00$CphBody$FupNewLogo" id="ctl00_CphBody_FupNewLogo" />
						                </td>
								</tr>
								<tr>
									<td></td>
									<td>
						                                   
						                  <input type="submit" name="ctl00$CphBody$BtnSubmit" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$CphBody$BtnSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_CphBody_BtnSubmit" class="btn btn-raised btn-primary waves-effect" />
						                                    &nbsp;</td>
								</tr>
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
              <div class="col-sm-12">
                <p class="copy m-b-0">© Copyright
                  <time class="year">2017</time>
                  WrapTheme  - All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
   
</section>

<html>
<head>
<link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
</head>

<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>สินค้าและบริการ</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">หน้าแรก</a></li>			
				<li class="breadcrumb-item active">แก้ไข/ลบสินค้าและบริการ</li>
			</ul>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 col-lg-12">
				<div class="card visitors-map">
					<div class="header">
						<h2>แก้ไข/ลบสินค้าและบริการ</h2>
					</div>
					<div class="body">
						<div class="row">							
							<div class="col-sm-12">	
								<p class="indent"> ระบบจะแสดงรายการสินค้าและบริการทั้งหมดที่มีอยู่ในร้านค้า คุณสามารถลบรายการสินค้าที่ไม่ต้องการ หรือคลิกเพื่อแก้ไขข้อมูล รูปภาพ หรือ สถานะของสินค้านั้นๆ ได้</p>
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
                        <h3>แสดงสินค้าหรือบริการทั้งหมด </h3>
                        
                    </div>
                    <div class="body">
                        <ol>

                           คุณสามารถค้นหา และเรียกแสดงผลสินค้าหรือบริการได้ 2 วิธีคือ <br /> <br />


                            <li>ค้นหาสินค้าหรือบริการจาก ช่วงวันที่สร้างสินค้าหรือบริการ โดยให้คุณคลิกที่ไอคอนเพื่อเลือก วันเริ่มต้น และวันที่สิ้นสุดในการค้นหา คุณสามารถเพิ่มเติมรายละเอียดได้อีกว่า จะให้ค้นหาเฉพาะรายการที่มีสถานะเป็นแบบใด</li>
                            <li>ค้นหาจาก คำค้น โดยให้คุณกรอกข้อความที่ต้องการค้นหา และเลือกฟิลด์ข้อมูล</li>

                        </ol>
                        เมื่อสินค้าหรือบริการทั้งหมด ถูกแสดงผลออกมา คุณสามารถคลิกที่ลิงค์ชื่อ สินค้าหรือบริการ เพื่อดูรายละเอียดรายการสั่งซื้อนั้นๆ ได้ หรือคลิกที่รูป Edit ด้านท้ายเพื่อแก้ไข หรือคลิกที่รูป Email เพื่อส่งอีเมลรายละเอียดสินค้าหรือบริการนั้นๆ ไปยังลูกค้าโดยตรง<br />
                    </div>
                                <div class="demo-radio-button">
                                      <input name="group1" type="radio" id="radio_1" class="with-gap radio-col-indigo" checked />
                                      <label for="radio_1"><b>สินค้าที่สร้างขึ้นวันที่ :</b><br />
                                      </label>

                                      <div class="col-md-4">
                                        <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" placeholder="Ex: 01-11-2017">
                                            </div>
                                            
                                        </div>
                                     
                                        <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">date_range</i> </span>

                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" placeholder="Ex: 16-11-2017">
                                            </div>
                                        </div>

                                        <select class="form-control show-tick">
                                          <option selected="selected" value=""> ----- All ----- </option>
                                          <option value="1">สินค้าหรือบริการ</option>
                                          <option value="2">ใบแจ้งชำระเงิน</option>
                                          <option value="3">แบบฟอร์มจองห้องพัก/โรงแรม/รีสอร์ท</option>

                                        </select>
                                    </div>

                                    



                                      <br />
                                      <input name="group1" type="radio" id="radio_2" class="with-gap radio-col-indigo"/>
                                      <label for="radio_2"><b>สินค้าที่มีคำค้น :</b></label>
                                      <div class="col-md-4">
                                        <div class="form-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="คำค้น" />
                                        </div> 
                                      </div><b>ฟิลด์</b>

                                     

                                        <select class="form-control show-tick">
                                          
                                          <option selected="selected" value="Name">Name</option>
                                          <option value="Code">Code</option>
                                          <option value="Description">Description</option>

                                        </select>

                                    </div>
                                    
                                      
                                  </div>

                              

                                <div class="body">
                                    <div class="button-demo">
                                        <button type="button" class="btn btn-raised btn-primary waves-effect">SUMBIT</button>
                                    </div>
                                </div>



              
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <div class="card">

                                      
                                  <div class="body table-responsive">
                                    <table class="table table-striped">
                                      <tr class="l-blue">
                                        <th scope="col">Select</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">ShortDescription</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Create Time</th>
                                        <th scope="col">Style</th>
                                        <th scope="col">Action</th>
                                      </tr><tr>
                                        <td>

                                          <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                                                            <label for="basic_checkbox_1"></label>

                                                    
                                            </td><td>
                                              <a href='editproducts.aspx?pid=197828'>M</a>
                                                    
                                            </td><td>200</td><td>
                                              M0001
                                                    
                                            </td><td>
                                            2,000.00
                                            Baht
                                            </td><td>
                                    16-11-2560 16:59:56
                                            </td><td>
                                            สินค้าหรือบริการ
                                            </td><td>
                                            
                                                          <a href='addproducts.aspx?pid=197828'><img id="ctl00_CphBody_GvListProducts_ctl03_ImgCopy" Title="Copy" src="App_Themes/DefaultThemeNew/images/copy.png" alt="Copy" align="absmiddle" style="border-width:0px;" /></a> &nbsp; 
                                            <input type="image" name="ctl00$CphBody$GvListProducts$ctl03$ImgBtnDelete" id="ctl00_CphBody_GvListProducts_ctl03_ImgBtnDelete" title="Delete" src="App_Themes/DefaultThemeNew/images/delete.png" alt="Delete" align="absmiddle" onclick="return confirm(&#39;Are you certain that you want to delete this product?&#39;);" style="border-width:0px;" /> &nbsp; 
                                               <a href='sendmailproducts.aspx?pid=197828'><img id="ctl00_CphBody_GvListProducts_ctl03_ImgEmail" Title="Email" src="App_Themes/DefaultThemeNew/images/mail.png" alt="Email" align="absmiddle" style="border-width:0px;" /></a>
                                           
                                            </td>
                                      </tr><tr>
                                        <td>
                                              <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                                                            <label for="basic_checkbox_2"></label>
                                                    
                                            </td><td>
                                              <a href='editinvoice.aspx?pid=197822'>Test By ThaiePay</a>
                                                    
                                            </td><td>001</td><td>
                                              Test By ThaiePay
                                                    
                                            </td><td>
                                            1.00
                                            Baht
                                            </td><td>
                                    16-11-2560 16:43:35
                                            </td><td>
                                            ใบแจ้งชำระเงิน
                                            </td><td>
                                            
                                                          <a href='addinvoice.aspx?pid=197822'><img id="ctl00_CphBody_GvListProducts_ctl04_ImgCopy" Title="Copy" src="App_Themes/DefaultThemeNew/images/copy.png" alt="Copy" align="absmiddle" style="border-width:0px;" /></a> &nbsp; 
                                            <input type="image" name="ctl00$CphBody$GvListProducts$ctl04$ImgBtnDelete" id="ctl00_CphBody_GvListProducts_ctl04_ImgBtnDelete" title="Delete" src="App_Themes/DefaultThemeNew/images/delete.png" alt="Delete" align="absmiddle" onclick="return confirm(&#39;Are you certain that you want to delete this product?&#39;);" style="border-width:0px;" /> &nbsp; 
                                               <a href='sendmailproducts.aspx?pid=197822'><img id="ctl00_CphBody_GvListProducts_ctl04_ImgEmail" Title="Email" src="App_Themes/DefaultThemeNew/images/mail.png" alt="Email" align="absmiddle" style="border-width:0px;" /></a>
                                           
                                            </td>
                                      </tr><tr>
                                        <td>
                                             <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                                                            <label for="basic_checkbox_3"></label>

                                            </td><td>
                                              <a href='editinvoice.aspx?pid=176855'>โอนเงินคืนรายการ 02027603 (bestbag.bynb)</a>
                                                    
                                            </td><td>20170404-001</td><td>
                                              โอนเงินคืนลูกค้าเนื่องจากร้านค้าไม่ได้ส่งสินค้า
                                                    
                                            </td><td>
                                            23,049.00
                                            Baht
                                            </td><td>
                                    04-04-2560 10:52:25
                                            </td><td>
                                            ใบแจ้งชำระเงิน
                                            </td><td>
                                            
                                                          <a href='addinvoice.aspx?pid=176855'><img id="ctl00_CphBody_GvListProducts_ctl05_ImgCopy" Title="Copy" src="App_Themes/DefaultThemeNew/images/copy.png" alt="Copy" align="absmiddle" style="border-width:0px;" /></a> &nbsp; 
                                            <input type="image" name="ctl00$CphBody$GvListProducts$ctl05$ImgBtnDelete" id="ctl00_CphBody_GvListProducts_ctl05_ImgBtnDelete" title="Delete" src="App_Themes/DefaultThemeNew/images/delete.png" alt="Delete" align="absmiddle" onclick="return confirm(&#39;Are you certain that you want to delete this product?&#39;);" style="border-width:0px;" /> &nbsp; 
                                               <a href='sendmailproducts.aspx?pid=176855'><img id="ctl00_CphBody_GvListProducts_ctl05_ImgEmail" Title="Email" src="App_Themes/DefaultThemeNew/images/mail.png" alt="Email" align="absmiddle" style="border-width:0px;" /></a>
                                           
                                            </td>
                                      </tr><tr>
                                        <td>
                                              <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                                                            <label for="basic_checkbox_4"></label>
                                                    
                                            </td><td>
                                              <a href='editproducts.aspx?pid=170216'>Test1</a>
                                                    
                                            </td><td>002</td><td>
                                              Test by Admin
                                                    
                                            </td><td>
                                            100.00
                                            Baht
                                            </td><td>
                                    31-01-2560 11:39:02
                                            </td><td>
                                            สินค้าหรือบริการ
                                            </td><td>
                                            
                                                          <a href='addproducts.aspx?pid=170216'><img id="ctl00_CphBody_GvListProducts_ctl06_ImgCopy" Title="Copy" src="App_Themes/DefaultThemeNew/images/copy.png" alt="Copy" align="absmiddle" style="border-width:0px;" /></a> &nbsp; 
                                            <input type="image" name="ctl00$CphBody$GvListProducts$ctl06$ImgBtnDelete" id="ctl00_CphBody_GvListProducts_ctl06_ImgBtnDelete" title="Delete" src="App_Themes/DefaultThemeNew/images/delete.png" alt="Delete" align="absmiddle" onclick="return confirm(&#39;Are you certain that you want to delete this product?&#39;);" style="border-width:0px;" /> &nbsp; 
                                               <a href='sendmailproducts.aspx?pid=170216'><img id="ctl00_CphBody_GvListProducts_ctl06_ImgEmail" Title="Email" src="App_Themes/DefaultThemeNew/images/mail.png" alt="Email" align="absmiddle" style="border-width:0px;" /></a>
                                           
                                            </td>
                                      </tr><tr>
                                        <td>
                                              <input type="checkbox" id="basic_checkbox_5 class="filled-in">
                                                            <label for="basic_checkbox_5"></label>
                                                    
                                            </td><td>
                                              <a href='editinvoice.aspx?pid=159603'>Test</a>
                                                    
                                            </td><td>001</td><td>
                                              Test by admin
                                                    
                                            </td><td>
                                            1,000.00
                                            Baht
                                            </td><td>
                                    02-11-2559 16:45:55
                                            </td><td>
                                            ใบแจ้งชำระเงิน
                                            </td><td>
                                            
                                                          <a href='addinvoice.aspx?pid=159603'><img id="ctl00_CphBody_GvListProducts_ctl07_ImgCopy" Title="Copy" src="App_Themes/DefaultThemeNew/images/copy.png" alt="Copy" align="absmiddle" style="border-width:0px;" /></a> &nbsp; 
                                            <input type="image" name="ctl00$CphBody$GvListProducts$ctl07$ImgBtnDelete" id="ctl00_CphBody_GvListProducts_ctl07_ImgBtnDelete" title="Delete" src="App_Themes/DefaultThemeNew/images/delete.png" alt="Delete" align="absmiddle" onclick="return confirm(&#39;Are you certain that you want to delete this product?&#39;);" style="border-width:0px;" /> &nbsp; 
                                               <a href='sendmailproducts.aspx?pid=159603'><img id="ctl00_CphBody_GvListProducts_ctl07_ImgEmail" Title="Email" src="App_Themes/DefaultThemeNew/images/mail.png" alt="Email" align="absmiddle" style="border-width:0px;" /></a>
                                           
                                            </td>
                                      </tr>
                                    </table>

                                    <div align="center">
                                      <button type="button" class="btn  btn-raised btn-danger waves-effect">DELETE</button>
                                    </div>
                                 
                                  </div>
                                </div>
                                </div>

                </div>
            </div>

					
				</div>
			</div>
		</div><!-- last 10 orders -->

		
		</div><!-- news and promotion -->

		
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


<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

</html>
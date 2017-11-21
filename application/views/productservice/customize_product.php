<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>สินค้าและบริการ</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">create</i> แก้ไข-ลบสินค้าและบริการ</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2 class="col-blue-grey">แก้ไข/ลบสินค้าและบริการ</h2>
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
                        <h2 class="col-blue-grey">แสดงสินค้าหรือบริการทั้งหมด </h2>
                    </div>
                    <div class="body">
                        <ol>
                            คุณสามารถค้นหา และเรียกแสดงผลสินค้าหรือบริการได้ 2 วิธีคือ <br /> <br />
                            <li>ค้นหาสินค้าหรือบริการจาก ช่วงวันที่สร้างสินค้าหรือบริการ โดยให้คุณคลิกที่ไอคอนเพื่อเลือก วันเริ่มต้น และวันที่สิ้นสุดในการค้นหา คุณสามารถเพิ่มเติมรายละเอียดได้อีกว่า จะให้ค้นหาเฉพาะรายการที่มีสถานะเป็นแบบใด</li>
                            <li>ค้นหาจาก คำค้น โดยให้คุณกรอกข้อความที่ต้องการค้นหา และเลือกฟิลด์ข้อมูล</li>
                        </ol>
                        <p class="indent">เมื่อสินค้าหรือบริการทั้งหมด ถูกแสดงผลออกมา คุณสามารถคลิกที่ลิงค์ชื่อ สินค้าหรือบริการ เพื่อดูรายละเอียดรายการสั่งซื้อนั้นๆ ได้ หรือคลิกที่รูป Edit ด้านท้ายเพื่อแก้ไข หรือคลิกที่รูป Email เพื่อส่งอีเมลรายละเอียดสินค้าหรือบริการนั้นๆ ไปยังลูกค้าโดยตรง</p><br />
                        <div class="row">
                        <div class="col-sm-2">
                                <p><b>รายการสั่งซื้อวันที่:*</b></p>
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
                                <div class="form-line">
                                    <select class="form-control">
                                        <option selected="selected" value=""> ----- All ----- </option>
                                        <option value="1">สินค้าหรือบริการ</option>
                                        <option value="2">ใบแจ้งชำระเงิน</option>
                                        <option value="3">แบบฟอร์มจองห้องพัก/โรงแรม/รีสอร์ท</option>
                                    </select>
                                </div>
                            </div>
                            
                                <div class="col-sm-2">
                                    <p><b>รายการสั่งซื้อที่มีคำค้น :</b></p>
                                </div>  
                                <div class="col-sm-4">
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">search</i> </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" Value="" required>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-sm-3 text-center">
                                    <div class="form-line">
                                        <select class="form-control">
                                            <option>ฟิลด์</option>
                                            <option value="Name">Name</option>
                                            <option value="Code">Code</option>
                                            <option value="Description">Description</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <center>
                                        <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>
                                    </center>
                                </div>
                            </div>
                    </div>
                </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>พารามิเตอร์ที่ใช้งานในระบบ</h2>
                            </div>   
                                <form method="post">
                                    <div class="body table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="l-blue">
                                                    <th>Select</th>
                                                    <th>Name</th>
                                                    <th>Code</th>
                                                    <th>ShortDescription</th>
                                                    <th>Price</th>
                                                    <th>Create Time</th>
                                                    <th>Style</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr class="l-blue">
                                                    <th>Select</th>
                                                    <th>Name</th>
                                                    <th>Code</th>
                                                    <th>ShortDescription</th>
                                                    <th>Price</th>
                                                    <th>Create Time</th>
                                                    <th>Style</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="check2" class="filled-in chk-col-light-blue" />
                                                    <label for="check2"></label>
                                                </td>
                                                <td><a href="<?php echo base_url(); ?>productservice/productservice/edit_product">M</a></td>
                                                <td>200</td>
                                                <td>M0001</td>
                                                <td>2,000.00 Baht</td>
                                                <td>16-11-2560 16:59:56</td>
                                                <td>สินค้าหรือบริการ</td>
                                                <td>
                                                    <span class="label bg-amber">
                                                        <a href="">
                                                            <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                        </a>
                                                        <a href="">
                                                            <img src="<?php echo base_url(); ?>assets/images/sign/delete.png">
                                                        </a>
                                                        <a href="">                                              
                                                            <img src="<?php echo base_url(); ?>assets/images/sign/mail.png">
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" id="check" class="filled-in chk-col-light-blue" />
                                                    <label for="check"></label>
                                                </td>
                                                <td><a href="<?php echo base_url(); ?>productservice/productservice/edit_voice">Test By ThaiePay</a></td>
                                                <td>001</td>
                                                <td>Test By ThaiePay</td>
                                                <td>1.00 Baht</td>
                                                <td>16-11-2560 16:43:35</td>
                                                <td>ใบแจ้งชำระเงิน</td>
                                                <td>
                                                    <span class="label bg-amber">
                                                        <a href="">
                                                            <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                        </a>
                                                        <a href="">
                                                            <img src="<?php echo base_url(); ?>assets/images/sign/delete.png">
                                                        </a>
                                                        <a href="">                                              
                                                            <img src="<?php echo base_url(); ?>assets/images/sign/mail.png">
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>






<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>เคาท์เตอร์เซอร์วิส</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">การสั่งซื้อและผู้ซื้อ</a></li>           
                <li class="breadcrumb-item active">เคาท์เตอร์เซอร์วิส</li>
            </ul>
        </div>

        <div class="row clearfix">
            <div class="col-md-3 col-lg-3">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>ดูข้อมูลที่ทำรายการ</h2>
                    </div>
                    <div class="body">
                        <p class="indent">ตรวจสอบข้อมูล ใบเสร็จที่สร้างไว้ สถานะการยืนยัน </p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-9">
                <div class="card visitors-map">

                    <div class="body">
                        <p class="indent">คุณสามารถค้นหา และเรียกแสดงผลรายการสั่งซื้อได้ 2 วิธีคือ</p>
                        <ol>
                            <li>ค้นหารายการสั่งซื้อจาก ช่วงวันที่เกิดรายการ โดยให้คุณคลิกที่ไอคอนเพื่อเลือก วันเริ่มต้น และวันที่สิ้นสุดในการค้นหา คุณสามารถเพิ่มเติมรายละเอียดได้อีกว่า จะให้ค้นหาเฉพาะรายการที่มีสถานะเป็นแบบใด</li>
                            <li>ค้นหาจาก คำค้น โดยให้คุณกรอกข้อความที่ต้องการค้นหา และเลือกฟิลด์ข้อมูล</li>
                        </ol>

                    </div>
                </div>
            </div>
        </div><!-- view list  -->

        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>แสดงรายการสั่งซื้อทั้งหมด</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="indent">เมื่อรายการสั่งซื้อทั้งหมด ถูกแสดงผลออกมา คุณสามารถคลิกที่ลิงค์หมายเลข OrderNo เพื่อดูรายละเอียดรายการสั่งซื้อนั้นๆ ได้ </p>
                                <br/>
                            </div>
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
                                        <option>สถานะ</option>
                                        <option value=""> ----- All ----- </option>
                                        <option value="COMPLETED">COMPLETED</option>
                                        <option value="PENDING">PENDING</option>
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
                                        <option value="TranID">TranID</option>
                                        <option value="Title">Title</option>
                                        <option value="Description">Description</option>
                                        <option value="CustomerEmail">CustomerEmail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <center>
                                    <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>
                                </center>
                            </div>
                            <div class="col-sm-12">
                                <div class="body table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" width="100%">
                                        <thead>
                                            <tr class="l-blue">
                                                <th >Status:</th>
                                                <th >TranID</th>
                                                <th >Title</th>
                                                <th >Description</th>
                                                <th >Price</th>
                                                <th >Create Date</th>
                                                <th >Payment Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90047121">90047121</a></td><td>
                                                    พรสิรี สาลีกงชัย -
                                                </td><td>
                                                    test
                                                </td><td>
                                                    100

                                                </td><td>
                                                    14-11-2017 16:33:45
                                                </td><td>
                                                    01-01-1900 00:00:00
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046792">90046792</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    1.TEST New CouterService
                                                </td><td>
                                                    60

                                                </td><td>
                                                    30-10-2017 13:00:44
                                                </td><td>
                                                    30-10-2017 13:10:12
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/Y.png'
                                                         alt='Y' title='Y' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046759">90046759</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    60

                                                </td><td>
                                                    27-10-2017 18:21:51
                                                </td><td>
                                                    27-10-2017 18:35:14
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046758">90046758</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    60

                                                </td><td>
                                                    27-10-2017 17:47:34
                                                </td><td>
                                                    01-01-1900 00:00:00
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046747">90046747</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    90

                                                </td><td>
                                                    27-10-2017 12:22:49
                                                </td><td>
                                                    01-01-1900 00:00:00
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046746">90046746</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    90

                                                </td><td>
                                                    27-10-2017 12:19:32
                                                </td><td>
                                                    01-01-1900 00:00:00
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046745">90046745</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    90

                                                </td><td>
                                                    27-10-2017 12:13:29
                                                </td><td>
                                                    01-01-1900 00:00:00
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046719">90046719</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 25/10/2560
                                                </td><td>
                                                    60

                                                </td><td>
                                                    25-10-2017 16:26:12
                                                </td><td>
                                                    27-10-2017 17:07:41
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046714">90046714</a></td><td>
                                                    Achita Kanasiri TEST -
                                                </td><td>
                                                    1.fdsf 2.nggre
                                                </td><td>
                                                    91.5

                                                </td><td>
                                                    25-10-2017 15:04:32
                                                </td><td>
                                                    25-10-2017 15:38:02
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046564">90046564</a></td><td>
                                                    asd -
                                                </td><td>
                                                    dfdsfsdf
                                                </td><td>
                                                    500

                                                </td><td>
                                                    14-10-2017 00:07:12
                                                </td><td>
                                                    01-01-1900 00:00:00
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046504">90046504</a></td><td>
                                                    Attaporn -
                                                </td><td>
                                                    รายละเอียดสินค้า
                                                </td><td>
                                                    500

                                                </td><td>
                                                    07-10-2017 00:28:09
                                                </td><td>
                                                    01-01-1900 00:00:00
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046500">90046500</a></td><td>
                                                    สุรันดร -
                                                </td><td>
                                                    https://pay.sn/thaicpdonline
                                                </td><td>
                                                    500

                                                </td><td>
                                                    06-10-2017 15:13:45
                                                </td><td>
                                                    01-01-1900 00:00:00
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- serac and table  -->

        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>Meanings of Order Status</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="indent">Status of each order might be different. You can learn the meaning of each status according to the details below. </p>
                            </div>
                            <div class="col-sm-12">
                                <div class="body table-responsive">
                                    <table width="100%">
                                        <tr class="l-pink">
                                            <td>
                                                <img src="<?php echo base_url(); ?>assets/images/sign/Y.png"/> 
                                            </td>   
                                            <td>COMPLETED</td>
                                            <td>Transaction has been "Approved"</td>
                                        </tr>
                                        <tr class="l-blue">
                                            <td>
                                                <img src="<?php echo base_url(); ?>assets/images/sign/N.png"/> 
                                            </td>   
                                            <td>PENDING</td>
                                            <td>Transaction is in "Checking Process"</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--  meanning of order status -->


        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>จัดการใบเสร็จ</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="indent">แก้ไขใบเสร็จ </p>
                                <p class="indent">คุณสามารถค้นหา และเรียกแสดงผลรายการสั่งซื้อได้ 2 วิธีคือ</p>

                                <ol>
                                    <li>ค้นหารายการสั่งซื้อจาก ช่วงวันที่เกิดรายการ โดยให้คุณคลิกที่ไอคอนเพื่อเลือก วันเริ่มต้น และวันที่สิ้นสุดในการค้นหา คุณสามารถเพิ่มเติมรายละเอียดได้อีกว่า จะให้ค้นหาเฉพาะรายการที่มีสถานะเป็นแบบใด</li>
                                    <li>ค้นหาจาก คำค้น โดยให้คุณกรอกข้อความที่ต้องการค้นหา และเลือกฟิลด์ข้อมูล</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--  edit bill -->

        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>แสดงรายการสั่งซื้อทั้งหมด</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="indent">เมื่อรายการสั่งซื้อทั้งหมด ถูกแสดงผลออกมา คุณสามารถคลิกที่ลิงค์หมายเลข OrderNo เพื่อดูรายละเอียดรายการสั่งซื้อนั้นๆ ได้ </p>
                                <br/>
                            </div>
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
                                        <option>สถานะ</option>
                                        <option value=""> ----- All ----- </option>
                                        <option value="COMPLETED">COMPLETED</option>
                                        <option value="PENDING">PENDING</option>
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
                                        <option value="TranID">TranID</option>
                                        <option value="Title">Title</option>
                                        <option value="Description">Description</option>
                                        <option value="CustomerEmail">CustomerEmail</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <center>
                                    <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>
                                </center>
                            </div>
                            <div class="col-sm-12">
                                <div class="body table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" width="100%">
                                        <thead>
                                            <tr class="l-blue">
                                                <th >Status:</th>
                                                <th >TranID</th>
                                                <th >Title</th>
                                                <th >Description</th>
                                                <th >Price</th>
                                                <th >Date Time</th>
                                                <th >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90047121">90047121</a></td><td>
                                                    พรสิรี สาลีกงชัย -
                                                </td><td>
                                                    test
                                                </td><td>
                                                    100

                                                </td><td>
                                                    14-11-2017 16:33:45
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046792">90046792</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    1.TEST New CouterService
                                                </td><td>
                                                    60

                                                </td><td>
                                                    30-10-2017 13:00:44
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/Y.png'
                                                         alt='Y' title='Y' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046759">90046759</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    60

                                                </td><td>
                                                    27-10-2017 18:21:51
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046758">90046758</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    60

                                                </td><td>
                                                    27-10-2017 17:47:34
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046747">90046747</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    90

                                                </td><td>
                                                    27-10-2017 12:22:49
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046746">90046746</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    90

                                                </td><td>
                                                    27-10-2017 12:19:32
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046745">90046745</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 02/10/2560
                                                </td><td>
                                                    90

                                                </td><td>
                                                    27-10-2017 12:13:29
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046719">90046719</a></td><td>
                                                    Achita Kanasiri -
                                                </td><td>
                                                    Product ทดสอบ 25/10/2560
                                                </td><td>
                                                    60

                                                </td><td>
                                                    25-10-2017 16:26:12
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046714">90046714</a></td><td>
                                                    Achita Kanasiri TEST -
                                                </td><td>
                                                    1.fdsf 2.nggre
                                                </td><td>
                                                    91.5

                                                </td><td>
                                                    25-10-2017 15:04:32
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046564">90046564</a></td><td>
                                                    asd -
                                                </td><td>
                                                    dfdsfsdf
                                                </td><td>
                                                    500

                                                </td><td>
                                                    14-10-2017 00:07:12
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046504">90046504</a></td><td>
                                                    Attaporn -
                                                </td><td>
                                                    รายละเอียดสินค้า
                                                </td><td>
                                                    500

                                                </td><td>
                                                    07-10-2017 00:28:09
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <img src='<?php echo base_url(); ?>assets/images/sign/N.png'
                                                         alt='N' title='N' align="AbsMiddle"
                                                         border="0" />
                                                </td><td><a href="counterdetail.aspx?TRAN_ID=90046500">90046500</a></td><td>
                                                    สุรันดร -
                                                </td><td>
                                                    https://pay.sn/thaicpdonline
                                                </td><td>
                                                    500

                                                </td><td>
                                                    06-10-2017 15:13:45
                                                </td><td>
                                                    <img src="<?php echo base_url(); ?>assets/images/sign/copy.png">
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- serac and table  -->


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


<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>รายการสั่งซื้อทั้งหมด</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-delicious"></i><a href="<?php echo base_url(); ?>orders/orders/orders_des"> การสั่งซื้อและผู้ซื้อ</a></li>          
                <li class="breadcrumb-item active"><i class="material-icons">receipt</i> รายการสั่งซื้อทั้งหมด</li>
            </ul>
        </div>


        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <a class="" role="button" data-toggle="collapse" href="#detailsTitle" aria-expanded="false"
                               aria-controls="detailsTitle"><h2>แสดงรายการสั่งซื้อทั้งหมด<i class="material-icons">arrow_drop_down</i></h2></a>
                    </div>
                    <div class="body">
                        <div class="row">                           
                            <div class="col-sm-12"> 
                                <div class="collapse" id="detailsTitle">
                                    <div class="well">
                                            <p > คุณสามารถค้นหา และเรียกแสดงผลรายการสั่งซื้อได้ 2 วิธีคือ</p>
                                        <ol>
                                            <li>ค้นหารายการสั่งซื้อจาก ช่วงวันที่เกิดรายการ โดยให้คุณคลิกที่ไอคอนเพื่อเลือก วันเริ่มต้น และวันที่สิ้นสุดในการค้นหา คุณสามารถเพิ่มเติมรายละเอียดได้อีกว่า จะให้ค้นหาเฉพาะรายการที่มีสถานะเป็นแบบใด</p></li>
                                            <li>ค้นหาจาก คำค้น โดยให้คุณกรอกข้อความที่ต้องการค้นหา และเลือกฟิลด์ข้อมูล</li>
                                        </ol>
                                            <p>เมื่อรายการสั่งซื้อทั้งหมด ถูกแสดงผลออกมา คุณสามารถคลิกที่ลิงค์หมายเลข OrderNo เพื่อดูรายละเอียดรายการสั่งซื้อนั้นๆ ได้ </p>
                                        <br/>
                                    </div>
                                </div>
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
                                        <option value="CB">CHARGE BACK</option>
                                        <option value="CD">CUSTOMER DUE DILIGENCE</option>
                                        <option value="CP">COMPLETED</option>
                                        <option value="HO">HOLD</option>
                                        <option value="NS">NOT SUBMIT</option>
                                        <option value="PE">PENDING</option>
                                        <option value="RD">REQUEST DOCUMENT</option>
                                        <option value="RE">REJECTED</option>
                                        <option value="RF">REFUND</option>
                                        <option value="RR">REQUEST REFUND</option>
                                        <option value="TC">TEST COMPLETED</option>
                                        <option value="VC">VBV CHECKING</option>
                                        <option value="VO">VOIDED</option>
                                        <option value="VR">VBV REJECTED</option>
                                        <option value="WA">CASH ON DELEVERY</option>

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
                                        <option value="OrderNo">OrderNo</option>
                                        <option value="OrderID">OrderID</option>
                                        <option value="RefNo">RefNo</option>
                                        <option value="ProductDetail">ProductDetail</option>
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
                                <br/>
                                <div class="body table-responsive">
                                    <table width="100%" class="table ">
                                        <thead>
                                            <tr>
                                                <th >Status</th>
                                                <th >OrderNo</th>
                                                <th >RefNo</th>
                                                <th >Detail</th>
                                                <th >Card Type</th>
                                                <th >Card</th>
                                                <th >Total</th>
                                                <th >Total (Baht)</th>
                                                <th >Date Time</th>
                                                <th >Payment Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="material-icons text-success">check</i>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>orders/orders/orders_details">02258118</a>
                                                </td>
                                                <td>
                                                    1510651922
                                                </td>
                                                <td>
                                                    Refund (OrderNo#02258102 OrderID#1098572 ) 
                                                </td>
                                                <td>  
                                                    <div align="center">
                                                        <img src='App_Themes/DefaultThemeNew/images/M_cardlogo.png'  border="0" />
                                                    </div>     
                                                </td>
                                                <td>
                                                    M5737
                                                </td>
                                                <td>
                                                    -1.00 Baht
                                                </td>
                                                <td>
                                                    -1.00 Baht
                                                </td>
                                                <td>
                                                    14-11-2560 16:41:44
                                                </td>
                                                <td>
                                                    14-11-2560 16:41:44
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  <i class="material-icons text-warning">hourglass_full</i>
                                                </td><td><a href="<?php echo base_url(); ?>orders/orders/counter_details">90047121</a></td><td>1510651925</td><td>
                                                    test
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/CounterService_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    CounterService-
                                                </td><td>
                                                    100.00
                                                    Baht
                                                </td><td>
                                                    100.00
                                                    Baht
                                                </td><td>
                                                    14-11-2560 16:33:45
                                                </td><td>
                                                    14-11-2560 16:33:45
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="material-icons text-danger">close</i>
                                                </td><td><a href="orderdetail.aspx?id=1098572">02258102</a></td><td>1510651922</td><td>
                                                    test
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/M_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    M5737
                                                </td><td>
                                                    1.00
                                                    Baht
                                                </td><td>
                                                    1.00
                                                    Baht
                                                </td><td>
                                                    14-11-2560 16:35:12
                                                </td><td>
                                                    14-11-2560 16:35:12
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                    <i class="material-icons text-success">check</i>
                                                </td><td><a href="orderdetail.aspx?id=1095115">02253136</a></td><td>0000000012</td><td>
                                                    Refund (OrderNo#02253129 OrderID#1095110 ) 
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/M_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    M5737
                                                </td><td>
                                                    -1.00
                                                    Baht
                                                </td><td>
                                                    -1.00
                                                    Baht
                                                </td><td>
                                                    08-11-2560 15:28:28
                                                </td><td>
                                                    08-11-2560 15:28:28
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <i class="material-icons text-danger">close</i>
                                                </td><td><a href="orderdetail.aspx?id=1095110">02253129</a></td><td>0000000012</td><td>
                                                    Order 12
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/M_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    M5737
                                                </td><td>
                                                    1.00
                                                    Baht
                                                </td><td>
                                                    1.00
                                                    Baht
                                                </td><td>
                                                    08-11-2560 15:25:04
                                                </td><td>
                                                    08-11-2560 15:25:04
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                   <i class="material-icons text-danger">close</i>
                                                </td><td><a href="orderdetail.aspx?id=1093823">02251336</a></td><td>0000000043</td><td>
                                                    Refund (OrderNo#02249329 OrderID#1092479 ) 
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/M_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    M5568
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    06-11-2560 17:31:07
                                                </td><td>
                                                    06-11-2560 17:31:07
                                                </td>
                                            </tr><tr>
                                                <td>
                                                   <i class="material-icons text-success">check</i>
                                                </td><td><a href="orderdetail.aspx?id=1092479">02249329</a></td><td>0000000043</td><td>
                                                    Order 43
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/M_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    M5568
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    03-11-2560 16:34:57
                                                </td><td>
                                                    03-11-2560 16:34:57
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                   <i class="material-icons text-danger">close</i>
                                                </td><td><a href="orderdetail.aspx?id=1092467">02249316</a></td><td>0000000042</td><td>
                                                    Refund (OrderNo#02249309 OrderID#1092464 ) 
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/M_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    M5568
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    03-11-2560 16:16:02
                                                </td><td>
                                                    03-11-2560 16:16:02
                                                </td>
                                            </tr><tr>
                                                <td>
                                                   <i class="material-icons text-warning">hourglass_full</i>
                                                </td><td><a href="orderdetail.aspx?id=1092466">02249315</a></td><td>0000000041</td><td>
                                                    Refund (OrderNo#02249288 OrderID#1092446 ) 
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/V_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    V9245
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    03-11-2560 16:15:52
                                                </td><td>
                                                    03-11-2560 16:15:52
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                   <i class="material-icons text-success">check</i>
                                                </td><td><a href="orderdetail.aspx?id=1092465">02249313</a></td><td>0000000040</td><td>
                                                    Refund (OrderNo#02249282 OrderID#1092439 ) 
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/V_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    V9245
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    03-11-2560 16:15:39
                                                </td><td>
                                                    03-11-2560 16:15:39
                                                </td>
                                            </tr><tr>
                                                <td>
                                                   <i class="material-icons text-warning">hourglass_full</i>
                                                </td><td><a href="orderdetail.aspx?id=1092464">02249309</a></td><td>0000000042</td><td>
                                                    Order 42
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/M_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    M5568
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    03-11-2560 16:12:42
                                                </td><td>
                                                    03-11-2560 16:12:42
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                  <i class="material-icons text-warning">hourglass_full</i>
                                                </td><td><a href="orderdetail.aspx?id=1092446">02249288</a></td><td>0000000041</td><td>
                                                    Order 41
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/V_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    V9245
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    03-11-2560 15:48:26
                                                </td><td>
                                                    03-11-2560 15:48:26
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <i class="material-icons text-success">check</i>
                                                </td><td><a href="orderdetail.aspx?id=1092439">02249282</a></td><td>0000000040</td><td>
                                                    Order 40
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/V_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    V9245
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    03-11-2560 15:40:18
                                                </td><td>
                                                    03-11-2560 15:40:18
                                                </td>
                                            </tr><tr class="separate">
                                                <td>
                                                   <i class="material-icons text-danger">close</i>
                                                </td><td><a href="orderdetail.aspx?id=1092417">02249243</a></td><td>0000000039</td><td>
                                                    Refund (OrderNo#02249229 OrderID#1092409 ) 
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/V_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    V9245
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    -199.00
                                                    Baht
                                                </td><td>
                                                    03-11-2560 15:04:32
                                                </td><td>
                                                    03-11-2560 15:04:32
                                                </td>
                                            </tr><tr>
                                                <td>
                                                    <i class="material-icons text-success">check</i>
                                                </td><td><a href="orderdetail.aspx?id=1092409">02249229</a></td><td>0000000039</td><td>
                                                    Order 39
                                                </td><td>  <div align="center">

                                                        <img src='<?php echo base_url(); ?>assets/images/sign/V_cardlogo.png'  border="0" /> </div>     
                                                </td><td>
                                                    V9245
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    199.00
                                                    Baht
                                                </td><td>
                                                    03-11-2560 14:54:12
                                                </td><td>
                                                    03-11-2560 14:54:12
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-12 text-right">
                                <button type="button" class="btn  btn-raised btn-info waves-effect">export</button>
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
                        <h2>รายการสั่งซื้อทั้งหมด</h2>
                    </div>
                    <div class="body">
                        <div class="row">                           
                            <div class="col-sm-12"> 
                                <p class="indent">รายการสั่งซื้อสินค้าและบริการของร้านค้าทั้งหมด ได้แสดงอยู่ในหัวข้อนี้ รายการสั่งซื้อที่เกิดขึ้น ทั้งที่อนุมัติและไม่อนุมัติ จะมีรายละเอียดวันที่ เวลา ชื่อผู้ซื้อสินค้า และรายละเอียดบัตรเครดิตในทุกๆ รายการ </p>
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- total income -->

        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>ความหมายของสถานะการชำระเงิน</h2>
                    </div>
                    <div class="body">
                        <div class="row">   
                            <div class="col-sm-12">
                                <p class="indent">สถานะการชำระเงินทั้งหมด มีหลายรูปแบบและมีความหมายแตกต่างกันออกไป ดังรายละเอียดต่อไปนี้ </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- sign payment -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/CP.png' border="0" alt='COMPLETED' title='COMPLETED'>

                                    <span class="label bg-light-green">COMPLETED</span>
                                    <p class="">รายการสั่งซื้อ "อนุมัติ"</p>
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/PE.png' border="0" alt='PENDING' title='PENDING'>
                                    <span class="label bg-brown">PENDING</span>
                                    <p>รายการที่อยู่ใน "ระหว่างตรวจสอบ"</p>
                                </div>

                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/RE.png' border="0" alt='REJECTED' title='REJECTED'>
                                    <span class="label bg-red">REJECTED</span>
                                    <p >รายการสั่งซื้อ "ไม่อนุมัติ"</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/RF.png' border="0" alt='REFUND' title='REFUND'>
                                    <span class="label bg-red">REFUND</span>
                                    <p >รายการที่ "คืนเงิน" เรียบร้อย</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ------------ -->
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/RR.png' border="0" alt='REQUEST REFUND' title='REQUEST REFUND'>
                                    <span class="label bg-brown">REQUEST REFUND</span>
                                    <p >รายการที่ทำเรื่องขอ "คืนเงิน"</p>
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/VO.png' border="0" alt='VOIDED' title='VOIDED'>
                                    <span class="label bg-red">VOIDED</span>
                                    <p >รายการที่ "คืนเงิน" เรียบร้อย</p>
                                </div>

                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/WA.png' border="0" alt='CASH ON DELEVERY' title='CASH ON DELEVERY'>
                                    <span class="label bg-blue">CASH ON DELEVERY</span>
                                    <p >รายการชำระเงินปลายทาง</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <span class="label bg-blue-grey">CUSTOMER DUE DILIGENCE</span>
                                    <p>รายการชำระเงินที่ลูกค้าต้องแสดงตน</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------ -->
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/CB.png' border="0" alt='CHARGE BACK' title='CHARGE BACK'>
                                    <span class="label bg-red">CHARGE BACK</span>
                                    <p>รายการสั่งซื้อที่ถูก "ปฎิเสธการชำระเงิน" โดยผู้ถือบัตร</p> 
                                </div>

                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/VC.png' border="0" alt='VBV CHECKING' title='VBV CHECKING'>
                                    <span class="label bg-pink">VBV CHECKING</span>
                                    <p >รายการที่อยู่ในระหว่าง "ตรวจสอบ VBV"</p>
                                </div>

                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/NS.png' border="0" alt='NOT SUBMIT' title='NOT SUBMIT'>
                                    <span class="label bg-blue-grey">NOT SUBMIT</span>
                                    <p>ลูกค้าของคุณยังไม่ได้กรอกข้อมูลบัตรเครดิต</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/VR.png' border="0" alt='VBV REJECTED' title='VBV REJECTED'>
                                    <span class="label bg-red">VBV REJECTED</span>
                                    <p>รายการสั่งซื้อ "ไม่อนุมัติ" เนื่องจากกรอกรหัส VBV ไม่ผ่าน</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- -- -->
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/TC.png' border="0" alt='TEST COMPLETED' title='TEST COMPLETED'>
                                    <span class="label bg-light-green">TEST COMPLETED</span>
                                    <p>รายการทดสอบที่ "อนุมัติ" (ใช้บัตรทดสอบทำรายการ ไม่มีใช่การชำระเงินจริง)</p>
                                </div>                            
                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/RD.png' border="0" alt='REQUEST DOCUMENT' title='REQUEST DOCUMENT'>
                                    <span class="label bg-amber">REQUEST DOCUMENT</span>
                                    <p>รายการที่ รอเอกสารจากร้านค้า เนื่องจากผู็ถือบัตรขอตรวจสอบรายการ (มีแนวโน้มที่จะปฎิเสธการชำระเงิน)</p>
                                </div>

                            </div>                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="text-center">
                                    <img src='<?php echo base_url() ?>assets/images/sign/HO.png' border="0" alt='HOLD' title='HOLD'>
                                    <span class="label bg-amber">HOLD</span>
                                    <p >รายการสั่งซื้อที่ถูก "ยึดหน่วง" ยอดการชำระเงินเอาไว้ เนื่องจากรายการสั่งซื้อดังกล่าวอาจจะมีปัญหาจากากรถูกปฏิเสธการชำระเงินได้ในภายหลัง (โปรดอ่านคำแนะนำในอีเมลที่แจ้งเปลี่ยนสถานะเป็น HOLD)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


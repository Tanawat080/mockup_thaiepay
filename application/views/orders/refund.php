
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>คืนเงินหรือยกเลิกรายการ</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-delicious"></i><a href="<?php echo base_url(); ?>orders/orders/orders_des"> การสั่งซื้อและผู้ซื้อ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">cached</i> คืนเงินหรือยกเลิกรายการ</li>
            </ul>
        </div>


        <div class="row clearfix">
           
                <div class="col-sm-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <a class="" role="button" data-toggle="collapse" href="#detailsTitle" aria-expanded="false"
                               aria-controls="detailsTitle"><h2>รายการสั่งซื้อที่สามารถคืนเงินหรือยกเลิกได้ทั้งหมด<i class="material-icons">arrow_drop_down</i></h2></a>
                        </div>
                        <div class="body">
                            <div class="col-sm-12"> 
                                <div class="collapse" id="detailsTitle">
                                    <div class="well">
                                            <p class="indent"> ระบบจะแสดงรายการทั้งหมดที่สามารถคืนเงินหรือยกเลิกรายการได้ ซึ่งมีเงื่อนไขดังต่อไปนี้</p>
                            <ol>
                                <li>จะต้องเป็นรายการสั่งซื้อที่เกิดขึ้นภายใน 120 วัน</li>
                                <li>จะต้องเป็นรายการที่มีสถานะ Completed, Hold หรือ Pending</li>
                                <li>รายการสั่งซื้อที่เกิดขึ้นตั้งแต่ 7 วันขึ้นไป เมื่อทำการคืนเงินหรือยกเลิกรายการจะต้องเสียค่าบริการ 300.00 ต่อรายการ</li>
                                <li>รายการใดที่คุณต้องการคืนเงินหรือยกเลิกรายการให้คลิกเลือกที่หน้ารายการ (หากคุณต้องการคืนเงินบางส่วน ให้กรอกตัวเลิกยอดเงินทับลงไป) แล้วคลิกปุ่ม Refund ด้านล่าง</li>
                            </ol>
                                        <br/>
                                    </div>
                                </div>
                                
                            </div>  
                            <form id="form_advanced_validation" method="POST">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <p><b>ค้นหาด้วยเลข Orders :</b></p>
                                    </div>  
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">

                                        <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">search</i> </span>
                                            <div class="form-line">
                                                <input type="number" name="orderNumber" class="form-control" Value="" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-sm-6 text-center">
                                    <div class="form-group">
                                        <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">     
                                <div class="body table-responsive">
                                    <table class="table " width="100%">
                                        <thead>
                                            <tr>
                                                <th >Status</th>
                                                <th >OrderNo</th>
                                                <th >RefNo</th>
                                                <th >Detail</th>
                                                <th >Card</th>
                                                <th >Total</th>
                                                <th >Total (Baht)</th>
                                                <th >Date Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>
                                                   <i class="material-icons text-success">check</i>                                                 
                                                </td>
                                                <td><a href="<?php echo base_url(); ?>orders/orders/refund_des">02208141</a></td><td>0000000212</td>
                                                <td>
                                                    Order 43
                                                </td>
                                                <td>
                                                    M5737
                                                </td>
                                                <td>
                                                    1.00 Baht
                                                </td>
                                                <td>
                                                    1.00 Baht
                                                </td>
                                                <td>
                                                    08-09-2560 11:14:25
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                  <i class="material-icons text-success">check</i>                                                 
                                                </td>
                                                <td><a href="<?php echo base_url(); ?>orders/orders/refund_des">02225184</a></td>
                                                <td>1000000003</td>
                                                <td>
                                                    Product ทดสอบ 02/10/2560
                                                </td>
                                                <td>
                                                    M5737
                                                </td>
                                                <td>
                                                    199.00 Baht
                                                </td>
                                                <td>
                                                    199.00 Baht
                                                </td>
                                                <td>
                                                    08-09-2560 11:14:25
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>คืนเงินหรือยกเลิกรายการ</h2>
                    </div>
                    <div class="body">
                        <p class="indent">คุณสามารถคืนเงินหรือยกเลิกรายการได้ผ่านหัวข้อนี้ การคืนเงินหรือยกเลิกรายการนั้น ร้านค้าของคุณจะต้องมียอดเงินคงเหลือ ไม่น้อยกว่า ยอดเงินที่ต้องการขอคืนเงิน และคุณก็สามารถที่จะคืนเงินเต็มจำนวนหรือคืนเงินเพียงบางส่วนได้</p>

                    </div>
                </div>
            </div>
        </div><!-- refund -->



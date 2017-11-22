
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>แก้ไขวิธีการชำระเงินของร้านค้า</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">dock</i><a href="<?php echo base_url(); ?>productservice/productservice/payment_method"> 
                        วิธีการชำระเงินของร้านค้า</a></li> 
                <li class="breadcrumb-item active"><i class="material-icons">receipt</i> แก้ไขวิธีการชำระเงินของร้านค้า</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2 class="col-blue-grey">แก้ไขวิธีการชำระเงินของร้านค้า</h2>
                    </div>
                    <div class="body">
                        <p class="indent"> คุณสามารถแก้ไขวิธีการชำระเงินของร้านค้าได้ผ่านการกรอกข้อมูลลงในแบบฟอร์มด้านล่างนี้ </p>
                    </div>
                </div>
            </div>
        </div><!-- refund -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="col-blue-grey">ข้อมูลการเชื่อมต่อระบบชำระเงิน</h2>
                            </div>
                            <div class="body">
                                <form id="form_advanced_validation" method="POST">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="form-label">สถานะ:*</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <input id="ctl00_CphBody_ChkEnable" class="filled-in" type="checkbox" name="ctl00$CphBody$ChkEnable" checked="checked" />
                                                <label for="ctl00_CphBody_ChkEnable">เปิดใช้งาน วิธีการจัดส่งนี้</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="form-label">ชื่อวิธีการชำระเงิน (อังกฤษ):*</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name_eng" value="Credit card online by THAIEPAY (VISA, MasterCard, American Express, PayPal, Japan Credit Bureau and China Unionpay)" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="form-label">ชื่อวิธีการชำระเงิน (ไทย):*</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name_th" value="ชำระเงินผ่านบัตรเครดิต VISA, MasterCard, American Express, PayPal, Japan Credit Bureau และ China Unionpay ออนไลน์ด้วยระบบของ THAIEPAY" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>                         
            </div>
        </div>                       
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <div class="card product-report">
                    <div class="header">
                        <h2 class="col-blue-grey">รายละเอียด (อังกฤษ)</h2>
                    </div>
                    <div class="body">
                        <textarea id="ckeditor">
                            <table align="center" border="0" cellpadding="5" cellspacing="0" style="width:90%">
    <tbody>
        <tr>
            <td>PORAR WEB APPLICATION CO., LTD.<br />
            <br />
            <img src="http://www.thaiepay.com/images/tfb.gif" />&nbsp;Kasikorn Bank (Din Daeng Sub- Branch) 703-2-28368-8<br />
            <img src="http://www.thaiepay.com/images/bbl.gif" />&nbsp;Bangkok Bank (Asoke-Din Daeng Branch office)185-0-79689-5<br />
            <img src="http://www.thaiepay.com/images/scb.gif" />&nbsp;Siam Commercial Bank (Din Daeng Road Sub-Branch) 144-2-03810-2&nbsp;<br />
            <img src="http://www.thaiepay.com/images/krungsri.gif" />&nbsp;Bank of Ayudhya (Din Daeng Branch Office) 052-1-60705-3<br />
            <img src="http://www.thaiepay.com/images/uob.gif" />&nbsp;UOB Bank (Ammarin Plaza Branch Office) 004-1-03497-6<br />
            <img src="http://www.thaiepay.com/images/krungthai.gif" />&nbsp;Krung Thai Bank&nbsp;(Asoke-Din Daeng Branch office) 056-1-50006-1<br />
            <img src="http://www.thaiepay.com/images/scib.gif" />&nbsp;ธ. Siam City Bank&nbsp;(Asoke-Din Daeng Branch office) 080-2-06556-5&nbsp;<br />
            <img src="http://www.thaiepay.com/images/bt.gif" />&nbsp;BANKTHAI Bank (Fortune Town Sub-Branch) 067-2-02044-4</td>
        </tr>
    </tbody>
</table>

<p>&nbsp;</p>

                        </textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="col-blue-grey">รายละเอียด (ไทย)</h2>
                            </div>
                            <div class="body">
                                <textarea id="ckeditor2">
                                     <table align="center" border="0" cellpadding="5" cellspacing="0" style="width:90%">
    <tbody>
        <tr>
            <td>ชื่อบัญชี: บริษัท โพลาร์ เว็บแอปพลิเคชั่น จำกัด<br />
            <br />
            <img src="http://www.thaiepay.com/images/tfb.gif" />&nbsp;ธ. กสิกรไทย สาขาย่อยดินแดง 703-2-28368-8<br />
            <img src="http://www.thaiepay.com/images/bbl.gif" />&nbsp;ธ. กรุงเทพฯ สาขาอโศก-ดินแดง 185-0-79689-5<br />
            <img src="http://www.thaiepay.com/images/scb.gif" />&nbsp;ธ. ไทยพาณิชย์ สาขาย่อย ถ.ดินแดง 144-2-03810-2&nbsp;<br />
            <img src="http://www.thaiepay.com/images/krungsri.gif" />&nbsp;ธ. กรุงศรีอยุธยา สาขาดินแดง 052-1-60705-3<br />
            <img src="http://www.thaiepay.com/images/uob.gif" />&nbsp;ธ. ยูโอบี สาขาอัมรินทร์พลาซ่า 004-1-03497-6 (บัญชีกระแสรายวัน)<br />
            <img src="http://www.thaiepay.com/images/krungthai.gif" />&nbsp;ธ. กรุงไทย&nbsp;สาขาอโศก-ดินแดง 056-1-50006-1<br />
            <img src="http://www.thaiepay.com/images/scib.gif" />&nbsp;ธ. นครหลวงไทย&nbsp;สาขาอโศก-ดินแดง 080-2-06556-5&nbsp;<br />
            <img src="http://www.thaiepay.com/images/bt.gif" />&nbsp;ธ. ไทยธนาคาร สาขาย่อยฟอร์จูน 067-2-02044-4</td>
        </tr>
    </tbody>
</table>

                                </textarea>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="col-blue-grey">โลโก้</h2>
                            </div>
                            <div class="body">
                                <div class="col-sm-12">
                                    <div class=" form-line">
                                        <div class="demo-radio-button">
                                            <input name="group1" type="radio" id="radio_1" class="with-gap" checked="checked" />
                                            <label for="radio_1">ใช้โลโก้เดิม : <img class="img-responsive img-fluid img-thumbnail" src="<?php echo base_url(); ?>assets/images/logo/logo_s.png"></label>

                                            <br/>
                                            <input name="group1" type="radio" id="radio_2" class="with-gap" checked="checked" />
                                            <label for="radio_2">เปลี่ยนโลโก้ใหม่</label> 
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-12">
                                    <form action="/" id="" class="dropzone" method="post" enctype="multipart/form-data">
                                        <div class="dz-message">
                                            <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                            <h3>Drop files here or click to upload.</h3>
                                            <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>

                                        <br/>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>
                                </div> 
                                </form> 
                            </div>                      
                        </div>   
                    </div>
                </div> 
            </div>
        </div>
    </div>                      
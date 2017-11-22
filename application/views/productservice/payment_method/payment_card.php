
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>แก้ไขวิธีการชำระเงินของร้านค้า</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/payment_method"> สินค้าและบริการ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">dock</i><a href="<?php echo base_url(); ?>productservice/productservice/customize_product"> 
วิธีการชำระเงินของร้านค้า</a></li> 
                <li class="breadcrumb-item active"><i class="material-icons">receipt</i> แก้ไขวิธีการชำระเงินของร้านค้าออนไลน์ด้วยระบบของ THAIEPAY</li>
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
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p class="indent"> ข้อมูลเหล่านี้ใช้สำหรับแจ้งให้ ผู้ให้บริการระบบชำระเงินทราบ อย่างเช่น Url สำหรับส่งค่ากลับหรือ Post Back Url เพื่อให้การเชื่อมต่อสมบูรณ์ </p>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="card widget-stat info-box-3 bg-blue-grey">
                                            <div class="body">
                                                <div class="media">
                                                    <div class="media-icon bg-red">
                                                        <i class="zmdi zmdi-globe zmdi-hc-2x"></i>
                                                    </div>
                                                    <div class="media-text">
                                                        <span class="title col-white">Url สำหรับส่งค่ากลับ (Post Back Url) :</span>
                                                        <p class="col-white">https://www.thaiepay.com/payment/postbackct.aspx</p>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="card widget-stat info-box-3 bg-blue-grey">
                                            <div class="body">
                                                <div class="media">
                                                    <div class="media-icon bg-red">
                                                        <i class="zmdi zmdi-globe zmdi-hc-2x"></i>
                                                    </div>
                                                    <div class="media-text">
                                                        <span class="title col-white">Url สำหรับแสดงผลเมื่อชำระเงินผ่าน (Return Url) :</span>
                                                        <p class="col-white">https://www.thaiepay.com/payment/placeorder.aspx</p>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>                         
            </div>
        </div>                       
        <div class="row clearfix">
            
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <div class="card product-report">
                    <div class="body">
                        <form id="form_advanced_validation" method="POST">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">สถานะ:*</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input id="ctl00_CphBody_ChkEnable" class="filled-in" type="checkbox" name="ctl00$CphBody$ChkEnable" checked="checked" />
                                    <label for="ctl00_CphBody_ChkEnable">เปิดใช้งาน วิธีการจัดส่งนี้</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">ชื่อวิธีการชำระเงิน (อังกฤษ):*</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name_eng" value="Credit card online by THAIEPAY (VISA, MasterCard, American Express, PayPal, Japan Credit Bureau and China Unionpay)" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">ชื่อวิธีการชำระเงิน (ไทย):*</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name_th" value="ชำระเงินผ่านบัตรเครดิต VISA, MasterCard, American Express, PayPal, Japan Credit Bureau และ China Unionpay ออนไลน์ด้วยระบบของ THAIEPAY" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">MerchantID หรือ Email:*</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="merchantId" value="" required/>
                                    </div>
                                    <div class="help-info">(สำหรับระบบชำระเงินออนไลน์อย่าง THAIEPAY, Kbank ให้กรอกค่า MerchantID แต่ถ้าเป็น Paypal ให้กรอกเป็นค่าอีเมล)</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">TerminalID :</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="terminalId" class="form-control" value="" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="col-blue-grey">โลโก้</h2>
                            </div>
                            <div class="body">
                                 <div class="col-sm-12">
                                        <p class="col-blue-grey">ภาพขนาดใหญ่</p>
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

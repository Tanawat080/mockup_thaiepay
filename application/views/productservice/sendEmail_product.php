
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ส่งเมลรายละเอียดสินค้าและบริการ</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/payment_method"> สินค้าและบริการ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">dock</i><a href="<?php echo base_url(); ?>productservice/productservice/customize_product"> 
                        วิธีการชำระเงินของร้านค้า</a></li> 
                <li class="breadcrumb-item active"><i class="material-icons">mail_outline</i> ส่งเมลรายละเอียดสินค้าและบริการ</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2 class="col-blue-grey">ส่งเมลรายละเอียดสินค้าและบริการ</h2>
                    </div>
                    <div class="body">
                        <p class="indent">  ร้านค้าสามารถส่งอีเมลแจ้งรายละเอียดสินค้าหรือบริการ เพื่อให้ลูกค้าเข้าชำระเงินโดยตรงผ่าน Url ที่ระบุในอีเมล  </p>
                    </div>
                </div>
            </div>
        </div><!-- refund -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <form id="form_advanced_validation" method="POST">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <p>ส่งจากอีเมล:*</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <div class=" form-line">
                                                    <div class="demo-radio-button">
                                                        <input name="group1" type="radio" id="radio_1" class="with-gap" checked="checked" />
                                                        <label for="radio_1">support@thaiepay.com</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <p>ถึงอีเมล:*</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" name="email" value="" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <p>หัวข้อ:*</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" name="title" value="Payment detail from  (MerchantID: 17904411)" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <p>เนื้อความ:</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <textarea id="ckeditor">                       
<table width="100%" cellpadding="5" cellspacing="0" align="center">
<tbody><tr>
<td><a href="http://www.thaiepay.com" target="_blank"><img src="https://control.thaiepay.com//images/defaultlogo.png" border="0"></a></td>
</tr>
    <tr>
        <td>
       <hr><br>
<table align="center" cellpadding="5" cellspacing="0" width="90%" class="table">
    <tbody><tr>
        <td>
            <strong>Subject: </strong>Payment detail from  (MerchantID: 17904411)<br>
        </td>
    </tr>
    <tr>
        <td>
            Dear Customer,<br><br>
<br><br>
 
This e-mail is sent by THAIEPAY, online credit card payment gateway system. 
We <b></b> would like to inform you to make a payment of product or service according to details below. 
<br>
<br><br>
<table width="90%" cellpadding="5" cellspacing="0" align="center">
<tbody><tr>
<td width="100"><b>Name</b>:</td><td>M</td>
</tr>
<tr>
<td width="100"><b>Detail</b>:</td><td>M0001</td>
</tr>
<tr>
<td width="100"><b>Total</b>:</td><td>2,000.00 Baht</td>
</tr>
</tbody></table>
<br>
            <br>
<font color="red">1. The deposit/payment is non-refundable.
2. Processing Fee is 5%</font><br><br>We are kindly to request you to make a payment through this URL. <br>
===================================================<br>
<a href="https://www.thaiepay.com/epayflow/cart.aspx?puid=00179044118390197828">https://www.thaiepay.com/epayflow/cart.aspx?puid=00179044118390197828</a><br>
===================================================<br>
(Copy this URL and replace in the Address box on the browser)<br>
<br>
<br>
Best Regards,
            <br>
            <br>
</td>
    </tr>
</tbody></table>

       <br>
       <hr> 
       <br><br>
        </td>
    </tr>
    <tr>
        <td align="center">
       <br>
       <br>
          <table width="80%">
<tbody><tr>
<td width="50%"><h3>English Information</h3>
<p>
<b>THAIEPAY.COM</b><br>
THAIEPAY THAIEPAY<br>
               522 Ratchadapisek Rd., Samsennok <br>
               Huaykwang Bangkok 10310 THAILAND<br><br>
               Tel: 02 541 4100 <br>
               
               Fax: 02 541 4098<br><br>

               <br>
               
               </p></td>
<td>               <h3>ข้อมูลภาษาไทย</h3>
               <p>
<b>THAIEPAY.COM</b><br>
THAIEPAY THAIEPAY<br>
               522 Ratchadapisek Rd., Samsennok <br>
               Huaykwang กรุงเทพ ฯ 10310 THAILAND<br><br>
               โทร: 02 541 4100 <br>
               
               แฟกซ์: 02 541 4098<br><br>

               <br>
               </p></td>
</tr>
</tbody></table>


               <p>
                              อีเมล:  <br>
               อีเมลรับออร์เดอร์: support@thaiepay.com<br>
               มือถือ:  <br>
               เว็บไซต์: http://www.thaiepay.com<br>
               โดเมนเนม: thaiepay.com<br><br>
               </p>
               
               
       <br>
       <br> 
        </td>
    </tr>
</tbody></table>


                                                </textarea>
                                            </div>
                                        </div>
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

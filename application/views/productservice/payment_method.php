
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>วิธีการชำระเงินของร้านค้า</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>    
                <li class="breadcrumb-item active"><i class="material-icons">dock</i> วิธีการชำระเงินของร้านค้า</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>วิธีการชำระเงินของร้านค้า</h2>
                    </div>
                    <div class="body">
                        <div class="row">             
                            <div class="col-sm-12"> 
                                <p class="indent">นอกจากระบบชำระเงินของ THAIEPAY แล้ว คุณสามารถเลือกเพิ่มการชำระเงินผ่านช่องทางอื่นได้อีก อย่างเช่น ให้ข้อมูลการโอนเงินผ่านธนาคาร หรือระบบชำระเงินออนไลน์เสริมอื่นๆ เช่น Paypal และ Kbank เป็นต้น </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- payment method -->

        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="col-sm-12"> 
                        <div class="body">
                            <div class="body table-responsive">

                                <table class="table">
                                    <tr>
                                        <th scope="col">Payment Method</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Enable</th>
                                    </tr>
                                    <tr>
                                        <td><a href="<?php echo base_url(); ?>productservice/payment_method/payment_card">ชำระเงินผ่านบัตรเครดิต VISA, MasterCard, American Express, PayPal, Japan Credit Bureau และ China Unionpay ออนไลน์ด้วยระบบของ THAIEPAY</a>
                                        </td>
                                        <td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/logo/logo_s.png' border='0' />
                                        </td>
                                        <td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />                   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        	<a href="<?php echo base_url(); ?>productservice/payment_method/payment_card">ชำระเงินผ่านบัตรเครดิต VISA, MasterCard ออนไลน์ด้วยระบบของ Kasikorn Bank</a></td>
                                        <td></td>
                                        <td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/False.gif' Alt='False' title='False' align="AbsMiddle" border="0" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        	<a href="<?php echo base_url(); ?>productservice/payment_method/payment_card">ชำระเงินผ่านระบบ Paypal</a>
                                        </td><td >
                                        </td>
                                        <td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/False.gif' Alt='False' title='False' align="AbsMiddle" border="0" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        	<a href="<?php echo base_url(); ?>productservice/payment_method/payment_data">โอนเงินผ่านธนาคารหรือตู้ ATM เข้ามายังบัญชีของ THAIEPAY</a>
                                        </td>
                                        <td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/logo/logo_s.png' border='0' />
                                        </td>
                                        <td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        	<a href="<?php echo base_url(); ?>productservice/payment_method/payment_data">โอนเงินผ่านธนาคารหรือตู้ ATM มายังบัญชีของร้านค้า</a>
                                        </td>
                                        <td ></td>
                                        <td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        	<a href="<?php echo base_url(); ?>productservice/payment_method/payment_data">ชำระเงินด้วยเงินสดหรือเช็คสั่งจ่ายที่</a>
                                        </td>
                                        <td ></td>
                                        <td>
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


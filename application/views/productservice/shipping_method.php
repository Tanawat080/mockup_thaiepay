
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>สินค้าและบริการ</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">หน้าแรก</a></li>     
                <li class="breadcrumb-item active">วิธีการจัดส่งสินค้า</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2 class="col-blue-grey">วิธีการจัดส่งสินค้า</h2>
                    </div>
                    <div class="body">
                        <div class="row">             
                            <div class="col-sm-12"> 
                                <p class="indent">สำหรับสินค้าที่ต้องมีระบบจัดส่งสินค้า คุณก็สามารถตั้งค่าผ่านระบบของเราได้เช่นกัน ซึ่งระบบของเรามีทั้งข้อมูลค่าจัดส่งสินค้าสากลคือ TNT, UPS, ไปรษณีย์ไทย หรือค่าจัดส่งในอัตราที่คุณกำหนดเอง</p>
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
                        <h2 class="col-blue-grey">เปิดระบบคำนวณค่าจัดส่งสินค้า</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-1">
                                <p>สถานะ :</p>
                            </div>
                            <div class="col-sm-10">
                                <input id="ctl00_CphBody_ChkEnable" class="filled-in" type="checkbox" name="ctl00$CphBody$ChkEnable" checked="checked" /><label for="ctl00_CphBody_ChkEnable">เปิดใช้งานระบบคำนวณค่าจัดส่งสินค้า</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <p>โปรโมชั่น:</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <p>ฟรี! ค่าจัดส่งเมื่อสั่งซื้อสินค้าเป็นมูลค่า</p>
                                    <p>(กรอก 0 ถ้าไม่ต้องการใช้โปรโมชั่นนี้)</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="0.00" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <p>Baht</p>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group text-center">
                                  <button type="submit" name="Submit" value="Submit" id="" class="btn btn-raised btn-primary waves-effect" />Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2 class="col-blue-grey">แก้ไขระบบจัดส่งสินค้า</h2>

                    </div>

                    <div class="col-sm-12"> 
                        <p class="indent"> คุณสามรถ ปิด เปิด หรือแก้ไขรายละเอียดวิธีการจัดส่งสินค้า ของร้านค้าคุณได้ ด้วยการคลิกที่ วิธีการจัดการนั้นๆ แล้วแก้ไขข้อมูล </p>
                    </div>




                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body table-responsive">

                                <table class="table table-striped">
                                    <tr class="l-blue">
                                        <th scope="col">Shipping Method</th>
                                        <th scope="col">Delivery</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Enable</th>
                                    </tr><tr>
                                        <td><a href="<?php echo base_url(); ?>productservice/shipping_method/pickup_store">มารับสินค้าเอง</a></td>
                                        <td>จัดส่งทั้งภายในประเทศและต่างประเทศ</td>
                                        <td class="enable">
                                            <img src='http://www.thaiepay.com/shop/merchant/4411/' border='0' />
                                        </td>
                                        <td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />                                                 

                                        </td>
                                    </tr><tr>
                                        <td><a href="<?php echo base_url(); ?>productservice/shipping_method/render_service">รับบริการด้วยตัวเอง</a></td>
                                        <td>จัดส่งทั้งภายในประเทศและต่างประเทศ</td><td class="enable">

                                        </td>
                                        <td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/False.gif' Alt='False' title='False' align="AbsMiddle" border="0" />                                                 

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="<?php echo base_url(); ?>productservice/shipping_method/render_service">รับบริการด้วยตัวเอง ณ ที่พักที่จองไว้</a></td><td>จัดส่งทั้งภายในประเทศและต่างประเทศ</td><td class="enable">

                                        </td><td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/False.gif' Alt='False' title='False' align="AbsMiddle" border="0" />                                                 

                                        </td>
                                    </tr><tr>
                                        <td><a href="<?php echo base_url(); ?>productservice/shipping_method/domestic_parcel">พัสดุไปรษณีย์ในประเทศ</a></td><td>จัดส่งภายในประเทศ</td><td class="enable">
                                            <img src='http://www.thaiepay.com/shop/merchant/4411/icon_thailandpost.gif' border='0' />
                                        </td><td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />                                                 

                                        </td>
                                    </tr><tr>
                                        <td><a href="shipintparcel.aspx">พัสดุไปรษณีย์ระหว่างประเทศ</a></td><td>จัดส่งต่างประเทศ</td><td class="enable">
                                            <img src='http://www.thaiepay.com/shop/merchant/4411/icon_thailandpost.gif' border='0' />
                                        </td><td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />                                                 

                                        </td>
                                    </tr><tr>
                                        <td><a href="shipinttnt.aspx">จัดส่งต่างประเทศโดย TNT</a></td><td>จัดส่งต่างประเทศ</td><td class="enable">
                                            <img src='http://www.thaiepay.com/shop/merchant/4411/icon_tnt.gif' border='0' />
                                        </td><td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />                                                 

                                        </td>
                                    </tr><tr>
                                        <td><a href="shipdomtnt.aspx">จัดส่งในประเทศโดย TNT</a></td><td>จัดส่งภายในประเทศ</td><td class="enable">
                                            <img src='http://www.thaiepay.com/shop/merchant/4411/icon_tnt.gif' border='0' />
                                        </td><td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />                                                 

                                        </td>
                                    </tr><tr>
                                        <td><a href="shipups.aspx">จัดส่งต่างประเทศโดย UPS</a></td><td>จัดส่งต่างประเทศ</td><td class="enable">
                                            <img src='http://www.thaiepay.com/shop/merchant/4411/icon_ups.gif' border='0' />
                                        </td><td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/True.gif' Alt='True' title='True' align="AbsMiddle" border="0" />                                                 

                                        </td>
                                    </tr><tr>
                                        <td><a href="shipcustom.aspx">ค่าจัดส่งสินค้าตามอัตราของร้านค้า</a></td><td>จัดส่งทั้งภายในประเทศและต่างประเทศ</td><td class="enable">
                                            <img src='http://www.thaiepay.com/shop/merchant/4411/' border='0' />
                                        </td><td class="enable">
                                            <img src='<?php echo base_url(); ?>assets/images/sign/False.gif' Alt='False' title='False' align="AbsMiddle" border="0" />                                                 

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
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

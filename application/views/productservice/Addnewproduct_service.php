<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>สินค้าและบริการ</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>        
                <li class="breadcrumb-item active"><i class="material-icons">add_shopping_cart</i> เพิ่มสินค้าหรือบริการใหม่</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2 class="col-blue-grey">เพิ่มสินค้าหรือบริการใหม่</h2>
                    </div>
                    <div class="body">
                        <div class="row">             
                            <div class="col-sm-12"> 
                                <p class="indent">คุณสามารถเพิ่มสินค้าและบริการใหม่ของคุณได้ด้วยการกรอกข้อมูลลงไปในแบบฟอร์มด้านล่างนี้ การกรอกข้อมูลควรกรอกข้อมูลให้ครบถ้วนถูกต้องเพื่อความน่าเชื่อถือของร้านค้า และเป็นการให้ข้อมูลที่ถูกต้องครบถ้วนแก่ลูกค้า  </p>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="body">
                    <form method="post" action="<?php echo base_url() ?>productservice/productservice/add_product_invoice">
                        <div class="card">
                            <div class="header">
                                <h2 class="col-blue-grey">เลือกรูปแบบสินค้าหรือบริการ*</h2>
                            </div>
                            <div class="body">
                                <div class="row">             
                                    <div class="col-sm-12"> 
                                        <p class="indent">เนื่องจากระบบของ THAIEPAY อำนวยความสะดวกในการเก็บข้อมูลและการแสดงผล ให้ถูกต้องเหมาะสม ตรงกับชนิดของสินค้าหรือบริการที่คุณต้องการสร้าง ดังนั้น คุณจะต้องเลือกรูปแบบของสินค้าที่คุณต้องการสร้างก่อน กรอกข้อมูลรายละเอียดทั้งหมด  </p>
                                    </div>      
                                </div>
                            </div>
                            <br>

                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="body>">
                                            <div class="row">
                                                <div class="col-sm-3 text-center">
                                                    <label class="form-label">รูปแบบสินค้าหรือบริการ :*</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="demo-radio-button">
                                                        <input name="group1" type="radio" id="radio_1" value="product" class="with-gap radio-col-indigo" checked />
                                                        <label for="radio_1"><b>สินค้าหรือบริการ</b><br />รูปแบบนี้เหมาะสำหรับสินค้าหรือบริการ ซึ่งมีการเก็บข้อมูลรายละเอียดเกี่ยวกับสินค้าอย่างครบถ้วน เหมาะสำหรับสินค้าที่มีราคาคงที่ สามารถนำลิงค์ไปแทรกบนหน้าเว็บไซต์ของคุณได้</label><br />
                                                        <input name="group1" type="radio" id="radio_2" value="invoice" class="with-gap radio-col-indigo"/>
                                                        <label for="radio_2"><b>ใบแจ้งชำระเงิน</b><br />เป็นแบบฟอร์มชำระเงินโดยตรง เหมาะสำหรับการแจ้งชำระเงินเป็นครั้งคราว ซึ่งมียอดชำระเงินไม่คงที่</label>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-sm-3 text-center">
                                                    <label class="form-label">ข้อมูลสินค้าหรือบริการ :*</label>
                                                </div>
                                                <div class="col-sm-4"> 
                                                    <div class="demo-radio-button">
                                                        <input name="group2" type="radio" id="radio_3" class="with-gap radio-col-indigo" checked />
                                                        <label for="radio_3"><b>สร้างสินค้าโดยใช้ข้อมูลใหม่</b></label><br />
                                                        <input name="group2" type="radio" id="radio_4" class="with-gap radio-col-indigo"/>
                                                        <label for="radio_4"><b>สร้างสินค้าโดยอาศัยข้อมูลเดิมจากสินค้า :</b></label>
                                                        <select class="form-control show-tick">
                                                            <option value="">-- Please select --</option>
                                                            <option value="114936">eShop : ระบบร้านค้าออนไลน์</option>
                                                            <option value="114937">eShop : ระบบร้านค้าออนไลน์ ลด 50%</option>
                                                            <option value="197828">M</option>
                                                            <option value="170216">Test1</option>
                                                            <option value="112615">Testing by ThaiePay</option>
                                                            <option value="117605">สินค้าทดสอบ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </br>    
                                            </div>
                                        </div> 
                                    </div> 
                                </div>

                                <div class="col-sm-12">
                                    <center>
                                        <button class="btn btn-raised btn-primary waves-effect "  type="submit">NEXT</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





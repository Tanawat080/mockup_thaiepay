
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>จัดส่งในประเทศโดย TNT</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">local_shipping</i><a href="<?php echo base_url(); ?>productservice/productservice/shipping_method"> วิธีการจัดส่งสินค้า</a></li>
                <li class="breadcrumb-item active"><i class="material-icons">label</i> จัดส่งในประเทศโดย TNT</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>วิธีการจัดส่งสินค้าแบบ ในประเทศโดย TNT</h2>
                    </div>
                    <div class="body">
                        <p class="indent">วิธีการจัดส่งสินค้านี้ จะใช้ระบบจัดส่งพัสดุไปรษณีย์ของ TNT ซึ่งจะกำหนดค่าจัดส่งเบื้องต้นและ ค่าจัดส่งเมื่อน้ำหนักเพิ่ม ผ่านแบบฟอร์มด้านล่างนี้ </p>

                    </div>
                </div>
            </div>
        </div><!-- shipdomestic -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card product-report">
                    <div class="header">
                        <h2 class="col-blue-grey">กำหนดค่าการจัดส่งเบื้องต้น</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="form-label">สถานะ:*</label>
                            </div>
                            <div class="col-sm-9">
                                <input id="ctl00_CphBody_ChkEnable" class="filled-in" type="checkbox" name="ctl00$CphBody$ChkEnable" required /><label for="ctl00_CphBody_ChkEnable">เปิดใช้งาน วิธีการจัดส่งนี้</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-label">ชื่อวิธีการจัดส่ง (อังกฤษ):*</label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="TNT International Shipping" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-label">ชื่อวิธีการจัดส่ง (ไทย):*</label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"  value="จัดส่งต่างประเทศโดย TNT" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-label">ค่าจัดส่ง 1Kg. แรก:*</label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control"  value="" required />
                                    </div>
                                    <div class="help-info"><label>Baht</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-label">ค่าจัดส่งทุก 1Kg. ถัดไป:*</label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control"  value="" required />
                                    </div>
                                    <div class="help-info"><label>Baht</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-label">น้ำหนักสูงสุดที่ใช้ได้:*</label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="0.00" required />
                                    </div>
                                    <div class="help-info"><label>Kg.</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="form-label">โลโก้:*</label>
                            </div>
                            <div class="col-sm-4">
                                <div class="demo-radio-button">
                                    <input name="group2" type="radio" class="with-gap" id="radio_3" checked="checked" />
                                    <label for="radio_3">ใช้โลโก้เดิม <a href="">s_banner_mac.png</a> 
                                        <a href=""><img src="<?php echo base_url(); ?>assets/images/sign/trashcan.png">
                                        </a>
                                    </label><br/>
                                    <input name="group2" type="radio" id="radio_5" class="with-gap" />
                                    <label for="radio_5">เปลี่ยนโลโก้ใหม่</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-9">
                                <form action="/" id="" class="dropzone" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> 
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>  
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <div class="form-group">
                                <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

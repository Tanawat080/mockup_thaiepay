
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>จัดส่งต่างประเทศโดย TNT</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">local_shipping</i><a href="<?php echo base_url(); ?>productservice/productservice/shipping_method"> วิธีการจัดส่งสินค้า</a></li>
                <li class="breadcrumb-item active"><i class="material-icons">label</i> จัดส่งต่างประเทศโดย TNT</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>วิธีการจัดส่งสินค้าแบบ ระหว่างประเทศโดย TNT</h2>
                    </div>
                    <div class="body">
                        <p class="indent">วิธีการจัดส่งสินค้านี้ จะใช้ระบบจัดส่งพัสดุไปรษณีย์ระหว่างประเทศของ TNT ซึ่งจะกำหนดค่าจัดส่งเบื้องต้นและ ค่าจัดส่งเมื่อน้ำหนักเพิ่ม ผ่านแบบฟอร์มด้านล่างนี้ </p>

                    </div>
                </div>
            </div>
        </div><!-- shipdomestic -->
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <div class="card product-report">
                    <div class="header">
                        <h2 class="col-blue-grey">กำหนดค่าการจัดส่งเบื้องต้น</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="form-label">สถานะ:*</label>
                            </div>
                            <div class="col-sm-8">
                                <input id="ctl00_CphBody_ChkEnable" class="filled-in" type="checkbox" name="ctl00$CphBody$ChkEnable" required /><label for="ctl00_CphBody_ChkEnable">เปิดใช้งาน วิธีการจัดส่งนี้</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">ชื่อวิธีการจัดส่ง (อังกฤษ):*</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="TNT International Shipping" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">ชื่อวิธีการจัดส่ง (ไทย):*</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"  value="จัดส่งต่างประเทศโดย TNT" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">น้ำหนักสูงสุดที่ใช้ได้:*</label>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="0.00" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label class="form-label">Kg.</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-label">รูปแบบบริการ:*</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <select class="form-control show-tick" required>
                                        <option selected="selected" value="EE">ECONOMY EXPRESS - ITLL</option>
                                        <option value="EN">ECONOMY EXPRESS - NONE</option>
                                        <option value="EP">ECONOMY EXPRESS - PRIORITY</option>
                                        <option value="GI">GLOBAL EXPRESS - ITLL</option>
                                        <option value="GN">GLOBAL EXPRESS - NONE</option>
                                        <option value="GP">GLOBAL EXPRESS - PRIORITY</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">จัดส่งจากประเทศ:*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <select class="form-control show-tick" required>
                                                <option selected="selected" value="AF">AFGHANISTAN</option>
                                                <option value="AL">ALBANIA</option>
                                                <option value="DZ">ALGERIA</option>
                                                <option value="AS">AMERICAN SAMOA</option>
                                                <option value="AD">ANDORRA</option>
                                                <option value="AO">ANGOLA</option>
                                                <option value="AI">ANGUILLA</option>
                                                <option value="AQ">ANTARCTICA</option>
                                                <option value="AG">ANTIGUA AND BARBUDA</option>
                                                <option value="AR">ARGENTINA</option>
                                                <option value="AM">ARMENIA</option>
                                                <option value="AW">ARUBA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">จัดส่งจากจังหวัด:*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control"  value="" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">จัดส่งจากรหัสไปรษณีย์:*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="form-control"  value="T" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">TNT UserID:*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control"  value="" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">TNT Password:*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="Password" class="form-control"  value="" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">ค่าจัดส่งโดยปริยาย:*</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" class="form-control"  value="0.00" required />
                                            </div>
                                            <div class="help-info"><label>(ค่าจัดส่งโดยปริยาย จะถูกใช่เมื่อระบบไม่สามารถคำนวณค่าจัดส่งผ่านระบบออนไลน์ของ TNT ได้)</label></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label class="form-label">Baht</label>
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class="col-blue-grey">โลโก้</h2>
                    </div>
                    <div class="body">
                        <div class=" form-line">
                            <div class="demo-radio-button">
                                <input name="group2" type="radio" class="with-gap" id="radio_3" checked="checked" />
                                <label for="radio_3">ใช้โลโก้เดิม <a href="">s_banner_mac.png</a> 
                                    <a href=""><img src="<?php echo base_url(); ?>assets/images/sign/trashcan.png">
                                    </a>
                                </label><br/>
                                <input name="group2" type="radio" id="radio_5" class="with-gap" />
                                <label for="radio_5">เปลี่ยนโลโก้ใหม่</label>
                            </div>
                        </div><br/>
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
                        <div class="form-group text-center">
                            <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>   
                        </div>               
                    </div>                          
                </div>
            </div>
        </div>

<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>พัสดุไปรษณีย์ในประเทศ</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">local_shipping</i><a href="<?php echo base_url(); ?>productservice/productservice/shipping_method"> วิธีการจัดส่งสินค้า</a></li>
                <li class="breadcrumb-item active"><i class="material-icons">label</i> พัสดุไปรษณีย์ในประเทศ</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>วิธีการจัดส่งสินค้าแบบ พัสดุไปรษณีย์ในประเทศ</h2>
                    </div>
                    <div class="body">
                        <p class="indent">วิธีการจัดส่งสินค้านี้ จะใช้ระบบจัดส่งพัสดุไปรษณีย์ในประเทศของ ไปรษณีย์ไทย ซึ่งจะกำหนดค่าจัดส่งเบื้องต้นและ ค่าจัดส่งเมื่อน้ำหนักเพิ่ม ผ่านแบบฟอร์มด้านล่างนี้</p>

                    </div>
                </div>
            </div>
        </div><!-- shipdomestic -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card product-report">
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-1">
                                <label class="form-label">สถานะ:*</label>
                            </div>
                            <div class="col-sm-10">
                                 <div class="checkbox ">
                                    <label>
                                        <input name="optionsCheckboxes" type="checkbox" checked="checked">
                                        <span class="checkbox-material"><span class="check"></span></span> เปิดใช้งาน วิธีการจัดส่งนี้</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="form-label">ชื่อวิธีการจัดส่ง (อังกฤษ):*</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group"><span class="input-group-addon"> <i class="material-icons">featured_play_list</i> </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="Domestic Parcel" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="form-label">ชื่อวิธีการจัดส่ง (ไทย):*</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group"><span class="input-group-addon"> <i class="material-icons">featured_play_list</i> </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="พัสดุไปรษณีย์ในประเทศ" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="form-label">ค่าจัดส่ง 1Kg. แรก:*</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group form-float"><span class="input-group-addon"> <i class="material-icons">directions_bike</i> </span>
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="0.00" />
                                    </div>
                                    <div class="help-info">Baht</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="form-label">ค่าจัดส่งทุก 1Kg. ถัดไป:*</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group form-float"><span class="input-group-addon"> <i class="material-icons">directions_bike</i> </span>
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="0.00" />
                                    </div>
                                    <div class="help-info">Baht</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="">
                                    <label class="form-label">น้ำหนักสูงสุดที่ใช้ได้:*</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group form-float"><span class="input-group-addon"> <i class="material-icons">aspect_ratio</i> </span>
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="0.00" />
                                    </div>
                                    <div class="help-info">Kg.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="col-blue-grey">โลโก้</h2>
                            </div>
                            <div class="body">
                                <div class=" form-line">
                                            <div class="demo-radio-button">
                                                <input name="group2" type="radio" class="with-gap radio-col-blue" id="radio_3" checked="checked" />
                                                <label for="radio_3">ใช้โลโก้เดิม <a href="">s_banner_mac.png</a> 
                                                    <a href=""><img src="<?php echo base_url(); ?>assets/images/sign/trashcan.png">
                                                    </a>
                                                </label><br/>
                                                <input name="group2" type="radio" id="radio_5" class="with-gap redio-col-blues" />
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
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card product-report">
                    <div class="body text-center">
                         <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>
                    </div>
                </div>
            </div>
        </div>



<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>พัสดุไปรษณีย์ระหว่างประเทศ</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">local_shipping</i><a href="<?php echo base_url(); ?>productservice/productservice/shipping_method"> วิธีการจัดส่งสินค้า</a></li>
                <li class="breadcrumb-item active"><i class="material-icons">label</i> พัสดุไปรษณีย์ระหว่างประเทศ</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>วิธีการจัดส่งสินค้าแบบ พัสดุไปรษณีย์ระหว่างประเทศ</h2>
                    </div>
                    <div class="body">
                        <p class="indent"> วิธีการจัดส่งสินค้านี้ จะใช้ระบบจัดส่งพัสดุไปรษณีย์ระหว่างประเทศของ ไปรษณีย์ไทย ซึ่งจะกำหนดค่าจัดส่งเบื้องต้นและ ค่าจัดส่งเมื่อน้ำหนักเพิ่ม ผ่านแบบฟอร์มด้านล่างนี้ </p>

                    </div>
                </div>
            </div>
        </div><!-- shipdomestic -->
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <div class="card product-report">
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
                                        <input type="text" class="form-control" value="International Parcel" required/>
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
                                        <input type="text" class="form-control"  value="พัสดุไปรษณีย์ระหว่างประเทศ" required />
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
                            <div class="col-sm-8">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="0.00" required />
                                    </div>
                                    <div class="help-info">Kg.</div>
                                </div>
                            </div>
                        </div>
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
                                    <label class="form-label">จัดส่งจากรหัสไปรษณีย์:*</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="" required />
                                    </div>
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
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card product-report">
                    <div class="header">
                        <h2 class="col-blue-grey">กำหนดค่าจัดส่งตามประเทศปลายทาง</h2>
                    </div>
                    <div class="body">
                        <p class="indent">คุณสามารถกำหนดค่าจัดส่งตามประเทศปลายทางได้จากการคลิกที่ Edit หน้าประเทศนั้นๆ </p>
                        <div class="body table-responsive "> 
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable ">
                                <thead>
                                    <tr class="l-blue">
                                        <th></th>
                                        <th>Country</th>
                                        <th>1st Kg.</th>
                                        <th>Next Kg.</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="l-blue">
                                        <th></th>
                                        <th>Country</th>
                                        <th>1st Kg.</th>
                                        <th>Next Kg.</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#editRate">Edit</a>
                                        </td>
                                        <td>AFGHANISTAN</td>
                                        <td>1,100.00</td>
                                        <td>350.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="">Edit</a>
                                        </td>
                                        <td>ALBANIA</td>
                                        <td>1,100.00</td>
                                        <td>350.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="">Edit</a>
                                        </td>
                                        <td>ALGERIA</td>
                                        <td>900.00</td>
                                        <td>380.00</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="editRate" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-l" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title col-blue-grey"" id="largeModalLabel">แก้ไข</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="row ">
                        <div class="col-sm-12 text-center">
                            <span class="label bg-indigo">AFGHANISTAN</span>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <p class="col-blue-grey"><b>1st Kg.</b></p>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" value="1100.00" required />
                                </div>
                                <div class="help-info">Baht</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <p class="col-blue-grey"><b>Next Kg.</b></p>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" value="350.00" required />
                                </div>
                                <div class="help-info">Baht</div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">บันทึก</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
            </div>
            </form>
        </div>
    </div>
</div>

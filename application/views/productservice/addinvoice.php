<!-- main content -->
<section class="content home">
  <div class="container-fluid">
    <div class="block-header">
      <h2>เพิ่มใบแจ้งชำระเงินใหม่</h2>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>        
                <li class="breadcrumb-item active"><i class="material-icons">add_shopping_cart</i> เพิ่มสินค้าหรือบริการใหม่</li>     
        <li class="breadcrumb-item active"><i class="material-icons">note_add</i>เพิ่มสินค้าหรือบริการใหม่</li>
      </ul>
    </div>
    <div class="row clearfix">
      <div class="col-md-12 col-lg-12">
        <div class="card visitors-map">
          <div class="header">
            <h2 class="col-blue-grey">เพิ่มใบแจ้งชำระเงินใหม่</h2>
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
                <div class="card product-report">
                    <div class="header">
                        <h2 class="col-blue-grey">รายละเอียดสินค้าทั่วไป*</h2>
                    </div>
                    <div class="body">
                        <p class="indent">หัวข้อนี้เป็นข้อมูลทั่วไปของสินค้า ทั้งชื่อสินค้า ราคา และรายละเอียด ซึ่งคุณจะต้องกรอกให้ครบถ้วนและถูกต้อง </p>
                        </br>

                        <div class="row">
                            <div class="col-sm-1">
                                <label class="form-label">ใช้งาน:*</label>
                            </div>
                            <div class="col-sm-8">
                                <div class="col-sm-12 demo-checkbox">
                                    <input type="checkbox" id="md_checkbox_3" class="filled-in chk-col-blue"  checked/>
                                    <label for="md_checkbox_3">เปิดใช้งาน</label>
                                </div></br>

                            </div>                          
                            <div class="col-sm-12">
                                <label class="form-label">ชื่อสินค้า:*</label>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">card_giftcard</i> </span>
                                    <div class="form-line">
                                        <input type="text" name="productName" class="form-control" Value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">คำอธิบายสินค้าแบบย่อ:*</label>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">chrome_reader_mode</i> </span>
                                    <div class="form-line">
                                        <input type="text" name="briefDetail" class="form-control" Value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">รหัสสินค้า:</label>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">blur_on</i> </span>
                                    <div class="form-line">
                                        <input type="number" name="productId" class="form-control" Value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">ราคาปกติ:</label>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">attach_money</i> </span>
                                            <div class="form-line">
                                                <input type="number" name="price" class="form-control" Value="0.00" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control show-tick" name="currency">
                                            <option selected="selected" value="00">Baht</option>
                                            <option value="01">U.S. dollar</option>
                                            <option value="02">Yen</option>
                                            <option value="03">Singapore dollar</option>
                                            <option value="04">Hongkong dollar</option>
                                            <option value="05">Euro</option>
                                            <option value="06">British pound</option>
                                            <option value="07">Australian dollar</option>
                                            <option value="08">Swiss Franc</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">ราคาพิเศษ:* </label>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">monetization_on</i> </span>
                                    <div class="form-line">
                                        <input type="number" name="exclusivePrice" class="form-control" Value="0.00" required>
                                    </div>

                                </div>
                                <p class="col-red">(ถ้าคุณกรอก ราคาพิเศษ ระบบจะแสดงผลโดยขีดฆ่าราคาปกติเช่น <strike>100</strike> 50 และจะยึดราคาพิเศษเป็นหลัก)</p>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">น้ำหนัก:</label>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">view_compact</i> </span>
                                    <div class="form-line">
                                        <input type="number" name="weight" class="form-control" Value="0.00" required>

                                    </div>
                                    <div class="help-info">KGs.</div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label class="form-label">รายละเอียด:</label>
                            </div>
                            <div class="col-sm-12">
                                <textarea id="ckeditor" name="descriptions">
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
                                <h2 class="col-blue-grey">รูปสินค้า</h2>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <p class="indent"> รูปภาพสินค้าในระบบจะมี 3 ขนาดด้วยกัน คือ ขนาดใหญ่, ขนาดกลางและขนาดเล็ก ซึ่งคุณสามารถอัปโหลดเฉพาะ <u>ไฟล์ภาพใหญ่เพียงไฟล์เดียว</u>แล้วให้ระบบของเราย่อขนาดภาพที่เหลือเองอัตโนมัติได้ หรือถ้าคุณต้องการใส่ภาพทุกขนาดด้วยตนเองก็สามารถทำได้ ด้วยการเลือกตัวเลือกใส่ภาพด้วยตัวเอง แล้ว browse ใส่ไฟล์ของคุณลงไป </p>

                                    <div class="col-sm-4">
                                        <p class="col-blue-grey">ภาพขนาดใหญ่</p>
                                        <div class=" form-line">
                                            <div class="demo-radio-button">
            
                                            </div>
                                        </div>
                                        <p class="indent">(ในกรณีที่คุณไม่ใส่ภาพขนาดใหญ่นี้ เนื่องจากไม่มีภาพสินค้า ระบบจะแสดงผลด้วย ภาพแทนที่ ซึ่งกำหนดเอาไว้ในเมนู 'ตั้งค่าเบื้องต้น') </p>
                                    </div>
                                    <div class="col-sm-8">
                                        <form action="/" id="" class="dropzone" method="post" enctype="multipart/form-data">
                                            <div class="dz-message">
                                                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                                <h3>Drop files here or click to upload.</h3>
                                                <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                        <br/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="col-blue-grey">ภาพขนาดกลาง</p>
                                        <div class=" form-line">
                                            <div class="demo-radio-button">

                                                คัดลอกไฟล์ภาพจากสินค้าเดิม 
                                                
                                                <input name="group2" type="radio" id="radio_4" class="with-gap" />
                                                <label for="radio_4">ย่อขนาดภาพอัตโนมัติเป็น (พิกเซล): 300</label><br/>
                                                <input name="group2" type="radio" id="radio_5" class="with-gap" />
                                                <label for="radio_5">ใส่ภาพขนาดกลางด้วยตนเอง</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <form action="/" id="" class="dropzone" method="post" enctype="multipart/form-data">
                                            <div class="dz-message">
                                                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                                <h3>Drop files here or click to upload.</h3>
                                                <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                        <br/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="col-blue-grey">ภาพขนาดเล็ก</p>
                                        <div class=" form-line">
                                            <div class="demo-radio-button">

                                                คัดลอกไฟล์ภาพจากสินค้าเดิม 
                                                
                                                <input name="group3" type="radio" id="radio_7" class="with-gap" />
                                                <label for="radio_7">ย่อขนาดภาพอัตโนมัติเป็น (พิกเซล): 150</label><br/>
                                                <input name="group3" type="radio" id="radio_8" class="with-gap" />
                                                <label for="radio_8">ใส่ภาพขนาดเล็กด้วยตนเอง</label> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <form action="/" id="" class="dropzone" method="post" enctype="multipart/form-data">
                                            <div class="dz-message">
                                                <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                                <h3>Drop files here or click to upload.</h3>
                                                <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                        <br/>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>การส่งค่ากลับ</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-swap-alt"></i><a href="<?php echo base_url(); ?>system_s/system_s/system_des"> ระบบการทำงาน</a></li>         
                <li class="breadcrumb-item active"><i class="material-icons">keyboard_return</i> การส่งค่ากลับ</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2 class="col-blue-grey">การส่งค่ากลับ</h2>
                    </div>
                    <div class="body">
                        <p class="indent">เมื่อลูกค้าชำระเงินให้ร้านค้าด้วยบัตรเครดิต THAIEPAY จะส่งรายละเอียดผลการชำระเงินไปยังเว็บไซต์ของร้านค้า ซึ่งการส่งค่ากลับที่ ก็สามารถตั้งค่า Url และพารามิเตอร์ต่างๆ เพิ่มเติมได้ </p>

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
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="body">
                                        <div class="text-justify">
                                            <h4>ทำความเข้าใจก่อนกำหนดค่า</h4>
                                            <p>Post Back Url กับ Return Url มีความแตกต่างกัน สรุปเป็นข้อๆ ดังนี้ </p>
                                            <ol>
                                                <li><b>Post Back Url</b> จะเป็นหน้าเว็บไซต์ที่ระบบจะส่งค่าไปทันที ที่บัตรเครดิตชำระเงินผ่านเรียบร้อย <u>กระบวนการส่งค่าจะไม่แสดงให้ผู้ถือบัตรเห็น เป็นการส่งค่าทางโปรแกรม</u> โดยหน้าเว็บเพจ จะแสดงผลลัพธ์ให้ผู้ถือบัตรทราบเท่านั้นว่า บัตรผ่านหรือไม่ผ่าน</li>
                                                <li><b>Return Url</b> จะเป็นหน้าเว็บไซต์ ที่ผู้ถือบัตร คลิกที่ลิงค์ [Return to Merchant Websites] โดยจุดประสงค์เพื่อต้องการกลับไปยังเว็บไซต์ของร้านค้า
                                                <u>Return Url ไม่สมควรที่จะใช้ส่งค่าพารามิเตอร์ใดๆ เด็ดขาด</u> เพราะไม่ใช่ลูกค้าทุกคนที่จะคลิกลิงค์กลับไป ยิ่งไปกว่านั้น การส่งค่าผ่าน Return Url จะแสดงผลให้ลูกค้าเห็น ดังนั้นอาจจะทำให้ลูกค้าใช้วิธีการทางโปรแกรมมิ่ง ลัดขั้นตอนการชำระเงิน และแอบส่งค่าโดยตรงได้</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>                          
                            </div>                          
                        </div>
                    </div>                       
                </div>
            </div>


            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <form method="post">
                    <div class="card product-report">
                        <div class="header">
                            <h2 class="col-blue-grey">กำหนดข้อมูลการส่งค่ากลับ POST BACK URL และ RETURN URL</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="col-blue-grey"><b>Return Url:*</b></p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">language</i> </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" Value="http://10.127.7.240/wordpress" required>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p class="col-blue-grey"><b>สถานะ:*</b></p>
                                </div>
                                <div class="col-sm-8">
                                    <div class=" form-line">
                                            <div class="demo-radio-button">
                                                <input name="group1" type="radio" class="with-gap radio-col-indigo" id="radio_3" checked="checked" />
                                                <label for="radio_3">YES</label>
                                                <p>เปิดใช้งานระบบ Post Back Url ใช่หรือไม่?</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="col-blue-grey"><b>Post Back Url:*</b></p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">language</i> </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" Value="http://10.127.7.240/wordpress/post_back.php" required>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p class="col-blue-grey"><b>พารามิเตอร์หลัก:*</b></p>
                                </div>
                                <div class="col-sm-8">
                                    <div class="demo-checkbox">
                                       
                                            <input type="checkbox" id="refno" class="filled-in chk-col-indigo" checked disabled />
                                            <label for="refno">refno  (พารามิเตอร์ refno จะเป็นพารามิเตอร์หลักที่ถูกส่งกลับไปทุกครั้ง ไม่สามารถลบออกได้) </label>

                                        
                                        <input type="checkbox" id="merchantid" class="filled-in chk-col-indigo" checked />
                                        <label for="merchantid">merchantid</label><br/>
                                        
                                        <input type="checkbox" id="customeremail" class="filled-in chk-col-indigo" checked />
                                        <label for="customeremail">customeremail </label><br/>
                                        
                                        <input type="checkbox" id="productdetail" class="filled-in chk-col-indigo" checked />
                                        <label for="productdetail">productdetail</label><br/>
                                        
                                        <input type="checkbox" id="total" class="filled-in chk-col-indigo" checked />
                                        <label for="total">total </label>
                                        
                                        <input type="checkbox" id="cardtype" class="filled-in chk-col-indigo" checked />
                                        <label for="cardtype">cardtype (V: VISA, M: MasterCard, A: AMEX, B: Billing)</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p class="col-blue-grey"><b>พารามิเตอร์เพิ่มเติม:*</b></p>
                                </div>
                                <div class="col-sm-8">
                                    <p>คุณสามารถกำหนดชื่อ และค่าพารามิเตอร์ที่ต้องการเพิ่มเติมได้ เป็นการเพิ่มระบบความปลอดภัยในการส่งค่ากลับ </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="col-blue-grey">Name:*</p>
                                            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">text_fields</i> </span>
                                            <div class="form-line">
                                                <input type="text" name="name" class="form-control date" Value="name" required>
                                            </div>
                                    </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="col-blue-grey">Value:*</p>
                                            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">apps</i> </span>
                                            <div class="form-line">
                                                <input type="text" name="value" class="form-control date" Value="test" required>
                                            </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn  btn-raised btn-info waves-effect">submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- param -->

                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <form method="post">
                        <div class="card product-report">
                            <div class="header">
                                <h2 class="col-blue-grey">ทดสอบส่งค่า Post Back แบบ Manual</h2>
                            </div>
                            <div class="body">
                               <p class="indent">คุณสามารถใช้แบบฟอร์มนี้ ส่งค่ากลับไปยัง Post Back Url เพื่อเป็นการทดสอบ หรือเพื่อเป็นการส่งค่าใหม่อีกครั้งสำหรับรายการสั่งซื้อที่รับค่า Post Back ไม่ได้ โดยคุณสามารถกรอกค่าต่างๆ ลงไป เมื่อคลิกที่ปุ่ม Send ระบบจะส่งค่าทางโปรแกรมไปยัง Post Back Url แล้วแสดงผลลัพธ์ที่หน้าเว็บปรากฎออกมา </p>
                               <div class="row">
                                <div class="col-sm-12">
                                    <p class="col-blue-grey"><b>Post Back Url:*</b></p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">language</i> </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" Value="http://10.127.7.240/wordpress" required>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <p class="col-blue-grey"><b>พารามิเตอร์หลัก:*</b></p>
                                </div>
                                <div class="col-sm-8">
                                    <p>refno:*</p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">confirmation_number</i> </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" Value="" required>
                                            </div>
                                    </div>
                                    <p>merchantid:</p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">store_mall_directory</i> </span>
                                            <div class="form-line">
                                                <input type="number" class="form-control" Value="48509355" disabled="disabled">
                                            </div>
                                    </div>
                                    <p>customeremail:</p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">directions_run</i> </span>
                                            <div class="form-line">
                                                <input type="email" class="form-control" Value="" >
                                            </div>
                                    </div>
                                    <p>productdetail:</p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">shopping_basket</i> </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" Value="" >
                                            </div>
                                    </div>
                                    <p>total:</p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">attach_money</i> </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" Value="" >
                                            </div>
                                    </div>
                                    <p>cardtype:</p>
                                    <select class="form-control show-tick">
                                        <option value="">--- Not Select---</option>
                                        <option value="V">VISA</option>
                                        <option value="M">MasterCard</option>
                                        <option value="A">AMEX</option>
                                        <option value="B">Billing</option>
                                    </select>

                                </div>
                                <div class="col-sm-4">
                                    <p class="col-blue-grey"><b>พารามิเตอร์เพิ่มเติม:*</b></p>
                                </div>
                                <div class="col-sm-8">
                                    <p>name:*</p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">text_fields</i> </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" Value="" required>
                                            </div>
                                    </div>
                                    <p>value:*</p>
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">apps</i> </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" Value="" required>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn  btn-raised btn-info waves-effect">Send</button>

                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

         




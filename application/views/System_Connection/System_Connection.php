<!-- main content -->
<section class="content home">
	<div class="container-fluid">
		<div class="block-header">
			<h2>ระบบการทำงาน</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">หน้าแรก</a></li>			
				<li class="breadcrumb-item active">วิธีการเชื่อมต่อระบบ</li>
			</ul>
		</div>
		


        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h3>API & Documents</h3>                     
                    </div>
                        <div class="body">
                            <div class="row">        

                                <div class="col-sm-12"> 
                                    <p class="indent"> ระบบ ePayment เป็นระบบตัดบัตรเครดิตแบบง่ายๆ โดยจะมีเว็บเพจสำหรับกรอกหมายเลขบัตรเครดิต ให้ร้านค้าเชื่อมต่อโดยตรง โดยร้านค้าจะมีหน้าที่ส่งค่าตัวแปรต่างๆ เช่น มูลค่าสินค้า หมายเลขประจำตัวร้านค้า มาให้เราดำเนินการเท่านั้น</p>
                                </div>

                                <div class="col-sm-12"> 
                                    <p class="indent"> ร้านค้าซึ่งพัฒนาระบบฐานข้อมูลสินค้าและฐานข้อมูลลูกค้าเรียบร้อยแล้ว สามารถเข้ามาใช้บริการชำระเงินผ่านบัตรเครดิตกับ ePayment ได้ทันที</p>
                                </div>
                                <div class="col-sm-12"> 
                                    <p class="indent"> พารามิเตอร์ที่ใช้ในการเชื่อมต่อกับระบบ ePayment ประกอบด้วยพารามิเตอร์ 2 ประเภท คือ “พารามิเตอร์หลัก” ที่ต้องระบุทุกครั้งเพื่อเชื่อมต่อกับระบบ ePayment และ “พารามิเตอร์เพิ่มเติม”</p>
                                </div>
                                <div class="col-sm-12"> 
                                    <p class="indent"> เพื่อเป็นตัวเสริมให้กับระบบชำระเงินของร้านค้าทำงานได้สะดวกมากยิ่งขึ้น ซึ่งร้านค้าสามารถเลือกที่จะระบุเพื่อใช้งานพารามิเตอร์เพิ่มเติมนี้หรือไม่ก็ได้ โดยรายละเอียดของพารามิเตอร์ทั้ง 2 ประเภท มีดังต่อไปนี้</p>
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
                                    <h2>พารามิเตอร์ที่ใช้งานในระบบ</h2>
                        </div>   

                    <div class="body table-responsive">
                            <table class="table table-striped">

                             
                                <thead>
                                    <tr class="l-blue">
                                    <th>พารามิเตอร์</th>
                                    <th>ชนิดข้อมูล</th>
                                    <th>ความยาวสูงสุด</th>
                                    <th>รายละเอียด</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr class="l-blue">
                                    <th>พารามิเตอร์</th>
                                    <th>ชนิดข้อมูล</th>
                                    <th>ความยาวสูงสุด</th>
                                    <th>รายละเอียด</th>
                                    </tr>
                                </tfoot>
                               

                            <tr>
                                <td>merchantid</td>
                                <td>ตัวเลข</td>
                                <td>8</td>
                                <td>หมายเลข Merchant ID</td>
                            </tr>
                            <tr>
                                <td>refno</td>
                                <td>ตัวเลข</td>
                                <td>10</td>
                                <td>หมายเลขอ้างอิงการสั่งซื้อ</td>
                            </tr>
                            <tr>
                                <td>customeremail</td>
                                <td>ตัวอักษร</td>
                                <td>100</td>
                                <td>อีเมล์ลูกค้า</td>
                            </tr>
                            <tr>
                                <td>productdetail</td>
                                <td>ตัวอักษร</td>
                                <td>255</td>
                                <td>รายละเอียดสินค้า</td>
                            </tr>
                            <tr>
                                <td>total</td>
                                <td>ตัวเลข</td>
                                <td>จำนวนไม่เกิน 9,999,999</td>
                                <td>มูลค่ารวมของสินค้า</td>
                            </tr>
                            <tr>
                                <td>lang (optional)</td>
                                <td>ตัวอักษร</td>
                                <td>2</td>
                                <td>ภาษา</td>
                            </tr>
                            <tr>
                                <td>cc (optional)</td>
                                <td>ตัวอักษร</td>
                                <td>2</td>
                                <td>หน่วยสกุลเงิน</td>
                            </tr>
                            <tr>
                                <td>postbackurl</td>
                                <td>ตัวอักษร</td>
                                <td>500</td>
                                <td>URL เพื่อรับค่ากลับ</td>
                            </tr>
                            <tr>
                                <td>returnurl</td>
                                <td>ตัวอักษร</td>
                                <td>500</td>
                                <td>URL เพื่อกลับไปยังเว็บไซต์ของร้านค้า</td>
                            </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                        <div class="header">
                                    <h2>พารามิเตอร์หลัก</h2>
                        </div>

                        <div class="body">
                            <div class="row">        

                                <div class="col-sm-8"> 
                                    <p class="indent"> ร้านค้าจำเป็นจะต้องส่งพารามิเตอร์หลักทั้งหมด 5 ตัว โดยมีรายละเอียดดังนี้ ด้วยวิธีการส่งแบบ POST มาที่เว็บไซต์ https://www.thaiepay.com/epaylink/payment.aspx</p>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">
                                        
                                       
                                            <ol>
                                                <li>merchantid เป็นหมายเลข Merchant ID ที่ส่งไปให้ร้านค้าทางอีเมล์ในวันลงทะเบียนขอใช้บริการ พารามิเตอร์นี้มีชนิดข้อมูลเป็นตัวเลข ซึ่งมีความยาวทั้งหมด 8 ตัว</li>
                                                <li>refno เป็นหมายเลขอ้างอิงที่ร้านค้าใช้อ้างอิงรายการสั่งซื้อกับระบบ ePayment พารามิเตอร์นี้จะต้องเป็นหมายเลขที่ไม่ซ้ำกันในการสั่งซื้อแต่ละครั้ง ไม่เช่นนั้นจะเกิดการซ้อนทับกันในรายการสั่งซื้อ พารามิเตอร์นี้มีชนิดข้อมูลเป็นตัวเลข ซึ่งมีจำนวนสูงสุดได้ไม่เกิน 10 ตัว</li>
                                                <li>customeremail เป็นอีเมล์ของลูกค้าของร้านค้า ใช้สำหรับให้ระบบส่งอีเมล์ยืนยัน เมื่อการชำระเงินผ่านบัตรเครดิตผ่านเรียบร้อยแล้ว พารามิเตอร์นี้มีชนิดข้อมูลเป็นตัวอักษร ซึ่งมีความยาวได้ไม่เกิน 100 ตัวอักษร</li>
                                                <li>productdetail เป็นรายละเอียดสินค้าคร่าวๆ สำหรับสรุปบอกให้ลูกค้าเข้าใจว่า กำลังจ่ายเงินเพื่อซื้อสินค้าอะไร พารามิเตอร์นี้มีชนิดข้อมูลเป็นตัวอักษร ซึ่งมีความยาวได้ไม่เกิน 255 ตัวอักษร</li>
                                                <li>total เป็นมูลค่ารวมของสินค้า มีชนิดข้อมูลเป็นตัวเลข และสามารถส่งพารามิเตอร์นี้เป็นจุดทศนิยมได้ ตัวอย่างเช่น 199.50</li>
                                                
                                            </ol>
                                        
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
                                    <h2>พารามิเตอร์เพิ่มเติม</h2>
                        </div>


                        <div class="body">
                            <div class="row">        

                                <div class="col-sm-8"> 
                                    <p class="indent"> “พารามิเตอร์เพิ่มเติม” (Additional Parameter) เป็นพารามิเตอร์เพื่อเสริมการใช้งาน ซึ่งร้านค้าสามารถเลือกที่จะกำหนดเพื่อใช้งานหรือไม่กำหนดก็ได้ กล่าวคือ พารามิเตอร์ประเภทนี้จัดทำขึ้นเพื่อเอื้ออำนวยให้ร้านค้าสามารถใช้งานระบบชำระเงินของตนเองได้อย่างเต็มประสิทธิภาพ ซึ่งพารามิเตอร์เพิ่มเติมมีดังนี้</p>

                                    <div class="card">
                                            <ol>
                                                <li>“Lang คือ language (ภาษา) พารามิเตอร์นี้ เป็นตัวกำหนดให้เว็บเพจสามารถแสดงผลเป็นภาษาอังกฤษหรือภาษาไทย ซึ่งตามหลักการแสดงผลนี้จะยึดตามที่ร้านค้ากำหนดเอาไว้ก่อนแล้วในส่วนของระบบ Admin แต่หากมีการส่งพารามิเตอร์ lang เข้ามาภายหลังระบบจะเปลี่ยนการแสดงผลใหม่ทันที lang = “TH” แสดงผลเป็นภาษาไทย หรือ lang = “EN” แสดงผลเป็นภาษาอังกฤษ</li><br>
                                                <p>สาเหตุที่สร้างพารามิเตอร์นี้ขึ้น เพราะบางร้านค้าจะมีเว็บไซต์ที่สามารถแสดงผลได้ทั้งภาษาไทยและภาษาอังกฤษ จึงสร้างพารามิเตอร์นี้ขึ้นเพื่อช่วยอำนวยความสะดวกให้แก่ร้านค้า ทำให้ร้านค้าสามารถกำหนดพารามิเตอร์เพิ่มเติมได้เอง ว่าต้องการแสดงผลเป็นภาษาใดเมื่อใด</p>
                                                <li>cc คือ currency code ( หน่วยสกุลเงิน ) เป็นตัวกำหนดหน่วยของสกุลเงิน ซึ่งก็เป็นลักษณเดียวกับเรื่องของภาษาในข้อ 1 ร้านค้าจะกำหนดหน่วยสกุลเงินในระบบ admin เอาไว้เป็นหลักอยู่ก่อนแล้ว แต่ถ้ามีการส่งพารามิเตอร์ cc เข้ามาภายหลัง ระบบก็จะเปลี่ยนหน่วยสกุลเงินใหม่ให้ทันที</li><br>
                                                <p>เหตุผลก็คล้ายกับในข้อ 1. คือ ร้านค้าบางร้านค้มีสินค้าที่หลากหลายในหน่วยของสกุลเงิน พารามิเตอร์นี้จะทำให้ร้านค้าสามารถปรับหน่วยสกุลเงินได้ตามความต้องการ</p>
                                                <li>postbackurl เป็นพารามิเตอร์ที่กำหนดขึ้นเพื่อรายงานผลการชำระเงินกลับไปยังระบบชำระเงินของร้านค้า ซึ่งพารามิเตอร์นี้มีการทำงานคือ เมื่อร้านค้าทำการส่งค่าพารามิเตอร์หลักทั้งหมด เพื่อเชื่อมต่อกับระบบ ePayment โดยมีการกำหนดเพื่อใช้งานพารามิเตอร์ postbackurl ไปด้วยเรียบร้อยแล้ว ต่อจากนั้นลูกค้าทำการยืนยันการสั่งซื้อและการชำระเงินผ่านบัตรเครดิตดดยการกรอกข้อมูลบัตรเครดิตของตนแล้ว เมื่อการชำระเงิน “สมบูรณ์” ระบบจะทำการส่งค่ากลับไปรายงานผลการชำระเงินยังระบบชำระเงินของร้านค้าโดยอัตโนมัติ โดยอ้างอิงตามค่าพารามิเตอร์ postbackurl ที่กำหนดไว้ ในกรณีนี้ หากร้านค้าต้องการใช้งานพารามิเตอร์เพิ่มเติมตัวนี้ ร้านค้าจะต้องสร้าง URL มาหนึ่ง URL เพื่อรับค่าพารามิเตอร์กลับไปยังระบบชำระเงินของตน และการส่งค่าพารามิเตอร์ postbackurl ก็สามารถทำได้ โดยการระบุ URL ที่สร้างขึ้นนั้น ประกอบกับค่าพารามิเตอร์ ที่ต้องการรับกลับมายังระบบ</li><br>
                                                <p>ตัวอย่างเช่น <br>
                                                        http://www.yourdomain.com/complete.php?rid=0003444<br>
                                                        http://www.yourdomain.com/complete.php?rid=0003444&rid2=0003445</p>
                                                <p>* ข้อสังเกต พารามิเตอร์นี้จะส่งค่ากลับอย่างอัตโนมัติ ซึ่งร้านค้าสามารถดูผลการชำระเงินได้จาก URL ที่ระบุไว้</p>
                                                <li>returnurl เป้นพารามิเตอร์ที่กำหนดขึ้นเพื่อกลับไปยัง URL ที่กำหนดค่าไว้ หลังจากการชำระเงินสมบูรณ์แล้ว โดยเมื่อหน้าเว็บไซต์ได้แสดงผลว่าการชำระเงินสมบูรณ์แล้ว ต่อมาก็จะแสดงสถานะ “รอ” ประมาณ 5 นาที หลังจากนั้นหน้าเว็บเพจก็จะเปลี่ยนไปแสดงผลเป็นหน้าของ URL ตามที่ตั้งค่า returnurl ไว้ ร้านค้าที่ต้องการใช้งานพารามิเตอร์นี้จะต้องระบุ Return URL และส่งค่ามายังระบบ</li>
                                                                                                
                                            </ol>     
                                    </div>
                                </div>

                                

                                    <div class="col-sm-4">
                                        <table class="table table-striped">

                                            <thead>
                                                <tr class="l-blue">
                                                <th width="40%">CC</th>
                                                <th width="60%">หน่วยเงิน</th>
                                                </tr>
                                            </thead>

                                            <tfoot>
                                                <tr class="l-blue">
                                                <th width="40%">CC</th>
                                                <th width="60%">หน่วยเงิน</th>
                                                </tr>
                                            </tfoot>
                                                <tr>
                                                    <td>“00”</td>
                                                    <td>บาท</td>
                                                </tr>
                                                <tr>
                                                    <td>“01”</td>
                                                    <td>USD</td>
                                                </tr>
                                                <tr>
                                                    <td>“02”</td>
                                                    <td>Yen</td>
                                                </tr>
                                                <tr>
                                                    <td>“03”</td>
                                                    <td>Singapore Dollar</td>
                                                </tr>
                                                <tr>
                                                    <td>“04”</td>
                                                    <td>Hongkong Dollar</td>
                                                </tr>
                                                <tr>
                                                    <td>“05”</td>
                                                    <td>Euro Dollar</td>
                                                </tr>
                                                <tr>
                                                    <td>“06”</td>
                                                    <td>GBP (Pound)</td>
                                                </tr>
                                                <tr>
                                                    <td>“07”</td>
                                                    <td>Australian Dollar</td>
                                                </tr>
                                                <tr>
                                                    <td>“08”</td>
                                                    <td>Swiss Franc</td>
                                                </tr>
                                            </table>
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
                                        <h2>ตัวอย่างโค้ด HTML สำหรับส่งค่าเข้าระบบ</h2>
                                    </div>

                                    <div class="body">
                                        <div class="row">        

                                            <div class="col-sm-12"> 
                                                <p class="indent"> ด้านล่างนี้เป็นตัวอย่างโค้ด HTML ที่เขียนขึ้นเพื่อใช้ทดสอบการส่งค่า (พารามิเตอร์) ไปยังระบบ ePayment หากร้านค้าต้องการใช้งานโค้ดนี้ โปรดใส่พารามิเตอร์ merchantid และ customeremail ของตัวเองลงไปแล้วจึงค่อยดำเนินการทดสอบ</p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="body bg-grey">
                                                <pre>
                                                    <code>
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;EPAYLINK Testing&lt;/title&gt;
    &lt;/head&gt;
    &lt;body bgcolor="#FFFFFF" text="#000000"&gt;
        &lt;form method="post" action="https://www.thaiepay.com/epaylink/payment.aspx"&gt;
            &lt;input type="hidden" name="refno" value="99999"&gt;
            &lt;input type="hidden" name="merchantid" value=""&gt;
            &lt;input type="hidden" name="customeremail" value=""&gt;
            &lt;input type="hidden" name="c"&gt;
            &lt;input type="hidden" name="productdetail" value="Testing Product"&gt;
            &lt;input type="hidden" name="total" value="400"&gt;
            &lt;br&gt;
            &lt;input type="submit" name="Submit" value="Comfirm Order"&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;
                                                    </code>
                                                </pre>                                                
                                            </div>
                                        </div>
                                    </div>
          
                                        <center>
                                            <div class="button-demo">
                                                
                                                <button type="button" class="btn btn-raised btn-default waves-effect"><a href="http://www.thaiepay.com/download/2.%E0%B8%84%E0%B8%B9%E0%B9%88%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%AD%E0%B8%9A%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%A1%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A%20ePayment.pdf">ดาวน์โหลดคู่มือการเชื่อมต่อ ePayment</a></button>
                                                
                                            </div>
                                        </center>

                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                   <div class="header">
                                        <h2>ข้อมูลบัตรเครดิตสำหรับการทดสอบ การชำระเงิน</h2>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="body bg-grey">

                                                Credit Card Number: 4311 1510 0999 9993 (Available for Demo Account Only)<br>
                                                CVV: 180<br>
                                                Expiry Data: 12/20<br>
                                                Credit Card Issuer: United Overseas Bank (Thai) Public Company Limited<br>
                                                                                
                                            </div>
                                        </div>
                                    </div>
                                        <center>
                                            <div class="button-demo">
                                                
                                                <button type="button" class="btn btn-raised btn-default waves-effect"><a href="http://www.thaiepay.com/download/2.%E0%B8%84%E0%B8%B9%E0%B9%88%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%AD%E0%B8%9A%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%A1%E0%B8%95%E0%B9%88%E0%B8%AD%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A%20ePayment.pdf">ดาวน์โหลดคู่มือการเชื่อมต่อ ePayment</a></button><button type="button" class="btn btn-raised btn-default waves-effect"><a href="http://www.thaiepay.com/download/3.%E0%B8%84%E0%B8%B9%E0%B9%88%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%AD%E0%B8%9A%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%A3%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%95%E0%B9%89%E0%B8%99%E0%B9%83%E0%B8%8A%E0%B9%89%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A%20ePayment.pdf">คู่มือสำหรับเริ่มต้นการใช้งานของระบบ ePayment</a></button>
                                                
                                            </div>
                                        </center>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <center>

                                    <div class="header">
                                        <h3>ปลั๊กอิน และโมดูล</h3>
                                    </div></center>


                    <div class="body">
                        <div class="row clearfix demo-icon-container">

                                     <ul >

                                    <li><span class="icon woocommerce"><span class="icon-sub wordpress"></span></span><br />
                                        <a href="https://github.com/Pay-Solutions/Woo-Commerce2.5.xx-3.0.1-with-Wordpress-4.5.2-4.8/archive/master.zip">
                                            <span class="text">Woo Commerce 2.5.xx - 3.2.1 <br />
                                                <small>(with Wordpress<br/>4.5.2 - 4.8.3)</small></span>
                                        </a>
                                    </li>

                                    <li><span class="icon woocommerce"><span class="icon-sub wordpress"></span></span><br />
                                        <a href="https://github.com/Pay-Solutions/Woo-Commerce2.4.xx-with-Wordpress-4.4.xx/archive/master.zip">
                                            <span class="text">Woo Commerce 2.4.xx <br />
                                                <small>(with Wordpress 4.4.xx)</small></span>
                                        </a>
                                    </li>

                                    <li><span class="icon woocommerce"><span class="icon-sub wordpress"></span></span><br />
                                        <a href="https://github.com/Pay-Solutions/Woo-Commerce2.3.xx-with-Wordpress-4.1.xx/archive/master.zip">
                                            <span class="text">Woo Commerce 2.3.xx <br />
                                                <small>(with Wordpress 4.1.xx)</small></span>
                                        </a>
                                    </li>

                                    <li><span class="icon woocommerce"><span class="icon-sub wordpress"></span></span><br />
                                        <a href="https://github.com/Pay-Solutions/Woo-Commerce2.0.14-with-Wordpress-3.9.xx/archive/master.zip">
                                            <span class="text">Woo Commerce 2.0.14 <br />
                                                <small>(with Wordpress 3.9.xx)</small></span>
                                        </a>
                                    </li>

                                    <li><span class="icon virturemart"><span class="icon-sub joomla"></span></span><br />
                                        <a href="https://github.com/Pay-Solutions/Vituremart3.2.x-with-Joomla-3.7.x/archive/master.zip">
                                            <span class="text">Vituremart 3.2.x <br />
                                                <small>(with Joomla 3.7.x)</small></span>
                                        </a>
                                    </li>

                                    <li><span class="icon virturemart"><span class="icon-sub joomla"></span></span><br />
                                        <a href="https://github.com/Pay-Solutions/Vituremart3.0-with-Joomla-2.5/archive/master.zip">
                                            <span class="text">Vituremart 3.0 <br />
                                                <small>(with Joomla 2.5)</small></span>
                                        </a>
                                    </li>

                                    <li><span class="icon virturemart"><span class="icon-sub joomla"></span></span><br />
                                        <a href="https://github.com/Pay-Solutions/Vituremart2.xx-with-Joomla-2.5/archive/master.zip">
                                            <span class="text">Vituremart 2.xx <br />
                                                <small>(with Joomla 2.5)</small></span>
                                        </a>
                                    </li>

                                    <!--<li><span class="icon magento"></span><br />
                                        <a href="https://github.com/Pay-Solutions/Magento2/archive/master.zip">
                                            <span class="text">Magento 2</span>
                                        </a>
                                    </li>-->

                                    <li><span class="icon magento"></span><br /> 
                                        <a href="https://github.com/Pay-Solutions/Magento1/archive/master.zip">
                                            <span class="text">Magento 1</span>
                                        </a>
                                    </li>

                                    <li><span class="icon prestashop"></span><br /> 
                                        <a href="https://github.com/Pay-Solutions/Prestashop1.6/archive/master.zip">
                                            <span class="text">Prestashop 1.6</span>
                                        </a>
                                    </li>

                                    <li><span class="icon prestashop"></span><br /> 
                                        <a href="https://github.com/Pay-Solutions/Prestashop/archive/master.zip">
                                            <span class="text">Prestashop</span>
                                        </a>
                                    </li>

                                    <li><span class="icon ubercart"><span class="icon-sub drupal"></span></span></br>
                                        <a href="https://github.com/Pay-Solutions/Ubercart-6.x-with-Drupal-6/archive/master.zip">
                                            <span class="text">Ubercart 6.x <br />
                                                <small>(with Drupal 6)</small></span>
                                        </a>
                                    </li>

                                    <li><span class="icon opencart"></span></br> 
                                        <a href="https://github.com/Pay-Solutions/Opencart2.2/archive/master.zip">
                                            <span class="text">Opencart2.2</span>
                                        </a>
                                    </li>

                                    <li><span class="icon opencart"></span></br> 
                                        <a href="https://github.com/Pay-Solutions/Opencart2.0.1/archive/master.zip">
                                            <span class="text">Opencart2.0.1</span>
                                        </a>
                                    </li>

                                    <li><span class="icon opencart"></span></br> 
                                        <a href="https://github.com/Pay-Solutions/Opencart/archive/master.zip">
                                            <span class="text">Opencart</span>
                                        </a>
                                    </li>

                                    <li><span class="icon oscommerce"></span></br> 
                                        <a href="https://github.com/Pay-Solutions/OScommerce/archive/master.zip">
                                            <span class="text">OsCommerce</span>
                                        </a>
                                    </li>

                                    <li><span class="icon zencart"></span></br> 
                                        <a href="https://github.com/Pay-Solutions/Zencart/archive/master.zip">
                                            <span class="text">Zencart</span>
                                        </a>
                                    </li>

                                </ul>
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
	</div>
	
</section>
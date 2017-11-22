
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>รับบริการด้วยตัวเอง</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="zmdi zmdi-grid"></i><a href="<?php echo base_url(); ?>productservice/productservice/product_service_des"> สินค้าและบริการ</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">local_shipping</i><a href="<?php echo base_url(); ?>productservice/productservice/shipping_method"> วิธีการจัดส่งสินค้า</a></li>
                <li class="breadcrumb-item active"><i class="material-icons">label</i> รับบริการด้วยตัวเอง</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>วิธีการจัดส่งสินค้าแบบ มารับบริการด้วยตัวเอง</h2>
                    </div>
                    <div class="body">
                        <p class="indent">  วิธีการจัดส่งสินค้านี้ จะให้ลูกค้ามารับบริการด้วยตัวเองที่ร้านค้า ดังมีรายละเอียดที่คุณสามารถกำหนดสถานที่ได้ในฟอร์มด้านล่างนี้  </p>

                    </div>
                </div>
            </div>
        </div><!-- refund -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="card product-report">
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="form-label">สถานะ:*</label>
                            </div>
                            <div class="col-sm-10">
                                 <input id="ctl00_CphBody_ChkEnable" class="filled-in" type="checkbox" name="ctl00$CphBody$ChkEnable" /><label for="ctl00_CphBody_ChkEnable">เปิดใช้งาน วิธีการจัดส่งนี้</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label class="form-label">ชื่อวิธีการจัดส่ง (อังกฤษ):*</label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="Render service at the assigned place" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label class="form-label">ชื่อวิธีการจัดส่ง (ไทย):*</label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="รับบริการด้วยตัวเอง" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label class="form-label">ค่าจัดส่งสินค้า:*</label>
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
                                    <label class="form-label">Baht</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label class="form-label">โลโก้:*</label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group">
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

        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <div class="card product-report">
                    <div class="header">
                        <p class="col-blue-grey">รายละเอียด (อังกฤษ):*</p>
                    </div>
                    <div class="body">
                       <textarea id="ckeditor">
                                <table style="width:80%">
                                    <tbody>
                                        <tr>
                                            <td>
                                            <h3>English Information</h3>

                                            <p><strong>{{{CompanyEN}}}</strong><br />
                                            {{{NameEN}}} {{{SurnameEN}}}<br />
                                            {{{AddressEN}}} {{{Address2EN}}}<br />
                                            {{{CityEN}}} {{{StateEN}}} {{{PostalCodeEN}}} {{{CountryNameEN}}}<br />
                                            <br />
                                            Tel: {{{TelEN}}}&nbsp;<br />
                                            Fax: {{{FaxEN}}}<br />
                                            <br />
                                            &nbsp;</p>
                                            </td>
                                            <td>
                                            <h3>Thai Information</h3>

                                            <p><strong>{{{CompanyTH}}}</strong><br />
                                            {{{NameTH}}} {{{SurnameTH}}}<br />
                                            {{{AddressTH}}} {{{Address2TH}}}<br />
                                            {{{CityTH}}} {{{StateTH}}} {{{PostalCodeTH}}} {{{CountryNameTH}}}<br />
                                            <br />
                                            Tel: {{{TelTH}}}&nbsp;<br />
                                            Fax: {{{FaxTH}}}<br />
                                            <br />
                                            &nbsp;</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p>Email: support@thaiepay.com&nbsp;<br />
                                Orders Email: {{{OrdersEmail}}}<br />
                                Mobile: {{{Mobile}}}&nbsp;<br />
                                Website: http://www.thaiepay.com<br />
                                Domain Name: {{{DomainName}}}</p>
                            </textarea>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row clearfix top-report">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                        <p class="col-blue-grey">รายละเอียด (ไทย):*</p>
                    </div>
                            <div class="body">
                                     <textarea id="ckeditor2">
                                <table style="width:80%">
                                    <tbody>
                                        <tr>
                                            <td>
                                            <h3>English Information</h3>

                                            <p><strong>{{{CompanyEN}}}</strong><br />
                                            {{{NameEN}}} {{{SurnameEN}}}<br />
                                            {{{AddressEN}}} {{{Address2EN}}}<br />
                                            {{{CityEN}}} {{{StateEN}}} {{{PostalCodeEN}}} {{{CountryNameEN}}}<br />
                                            <br />
                                            Tel: {{{TelEN}}}&nbsp;<br />
                                            Fax: {{{FaxEN}}}<br />
                                            <br />
                                            &nbsp;</p>
                                            </td>
                                            <td>
                                            <h3>ข้อมูลภาษาไทย</h3>

                                            <p><strong>{{{CompanyTH}}}</strong><br />
                                            {{{NameTH}}} {{{SurnameTH}}}<br />
                                            {{{AddressTH}}} {{{Address2TH}}}<br />
                                            {{{CityTH}}} {{{StateTH}}} {{{PostalCodeTH}}} {{{CountryNameTH}}}<br />
                                            <br />
                                            โทร: {{{TelTH}}}&nbsp;<br />
                                            แฟกซ์: {{{FaxTH}}}<br />
                                            <br />
                                            &nbsp;</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p>อีเมล: support@thaiepay.com&nbsp;<br />
                                อีเมลรับออร์เดอร์: {{{OrdersEmail}}}<br />
                                มือถือ: {{{Mobile}}}&nbsp;<br />
                                เว็บไซต์: http://www.thaiepay.com<br />
                                โดเมนเนม: {{{DomainName}}}</p>

                            </textarea>
              
                            </div>                          
                        </div>
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




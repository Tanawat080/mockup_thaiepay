
<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ที่อยู่ใบกำกับภาษี</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="material-icons">account_balance</i><a href="<?php echo base_url();?>merchant/merchant/merchant"> ข้อมูลร้านค้า</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">chrome_reader_mode</i> ที่อยู่ใบกำกับภาษี</li>
            </ul>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                 <form id="form_validation" method="POST">
                <div class="card visitors-map">
                    <div class="header">
                        <h2 class="font-bold col-blue-grey">ที่อยู่ใบกำกับภาษี</h2>
                    </div>
                    <div class="body">
                        <form method="post">
                            <div class="row ">                           
                                <div class="col-sm-12">
                                    <label class="form-label"> ชื่อบริษัท: *</label>
                                    <div class="form-group form-float">
                                   <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">store_mall_directory</i> </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" Value="test" name="ompName" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="form-label">ที่อยู่: *</label>
                                    <div class="form-group form-float">
                                   <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">home</i> </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="address" Value="Test  กรุงเทพ ฯ 10310" required>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="form-label">เลขประจำตัวผู้เสียภาษี: *</label>
                                    <div class="form-group form-float">
                                   <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">accessibility</i> </span>
                                        <div class="form-line">
                                            <input type="number" name="taxID" class="form-control" Value="" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="form-label">สาขา:*</label>
                                    <div class="form-group form-float">
                                   <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">view_compact</i> </span>
                                        <div class="form-line">
                                            <input type="text" name="branch" class="form-control" Value="" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="form-label">อีเมล์:*</label>
                                    <div class="form-group form-float">
                                   <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">email</i> </span>
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" Value="fongbeer.1718@gmail.com" required>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="form-label">เบอร์โทรศัพท์:</label>
                                    <div class="form-group form-float">
                                   <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">call</i> </span>
                                        <div class="form-line">
                                            <input type="number" name="phoneNumber" class="form-control" Value="0616245961">
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="form-label">แฟกซ์:</label>
                                    <div class="form-group form-float">
                                   <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">print</i> </span>
                                        <div class="form-line">
                                            <input type="number" name="fax" class="form-control" Value="">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <div class="form-group form-float">
                                        <button type="submit" class="btn  btn-raised btn-info waves-effect">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </form>
            </div>
        </div><!-- income monthly -->

      

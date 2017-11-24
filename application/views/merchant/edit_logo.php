
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ข้อมูลส่วนตัวและบัญชีธนาคาร</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="material-icons">contact_phone</i><a href="<?php echo base_url(); ?>contact/contact/contact_des"> ข้อมูลร้านค้า</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">supervisor_account</i> ข้อมูลส่วนตัวและบัญชีธนาคาร</li>
            </ul>
        </div>


                  <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                               
                                    <div class="form-group">
                                        <p class="font-bold col-blue-grey">โลโก้:*</p>

                                            <div class="form-line">
                                                <div class="demo-radio-button">
                                                    <input name="logo" type="radio" class="radio-col-blue" id="logoold" checked="checked" />
                                                    <label for="logoold">โลโก้เดิม</label><br/>
                                                </div>
                                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/sign/logo.png">
                                            </div>
                                            <div class="form-line">
                                                <div class="demo-radio-button">
                                                    <input name="logo" type="radio" id="logonew" class="radio-col-blue" />
                                                    <label for="logonew">โลโก้ใหม่</label><br/>
                                                </div>
                                                 <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="dz-message">
                                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                                        <h3>Drop files here or click to upload.</h3>
                                                    </div>
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                                                </div>
                                            </div>
                 
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                            
                            </div>

                        </div>
                    </div> 

    </div>        
</section>
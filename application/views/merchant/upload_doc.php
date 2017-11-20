<section class="content">   
    <div class="container-fluid">
        <div class="block-header">
            <h2>Upload Document</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="material-icons">account_balance</i><a href="<?php echo base_url();?>merchant/merchant/merchant"> ข้อมูลร้านค้า</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">file_upload</i> Upload Document</li>
            </ul>
        </div> 
        <!-- File Upload | Drag & Drop OR With Click & Choose -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class="col-blue-grey">Upload Document</h2>
                       
                    </div>
                    <div class="body">
                        <form action="/" id="" class="dropzone" method="post" enctype="multipart/form-data">
                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# File Upload | Drag & Drop OR With Click & Choose --> 
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

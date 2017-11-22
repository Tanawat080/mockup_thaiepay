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

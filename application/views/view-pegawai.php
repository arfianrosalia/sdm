<div class="block-header">
    <h2>LIST PEGAWAI</h2>
</div>

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h2>LIST PEGAWAI</h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 align-right">
                        <div class="waves-effect"><i class="material-icons">refresh</i></div>
                    </div>
                </div>
            </div>
            <div class="body">
                <table class="table table-bordered table-responsive table-hover" id="tb_Pegawai">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Fungsional</th>
                            <th>Jabatan</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>No&nbsp;Telp</th>
                            <th>Atasan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ls_pegawai as $key => $value) { ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $value->nama_singkat; ?></td>
                                <td><?php echo $value->nama_fungsional; ?></td>
                                <td>jagsd</td>
                                <td>jhagsdgwd</td>
                                <td>jaghsdasd</td>
                                <td>jagsd</td>
                                <td>jhagsdgwd</td>
                                <td>
                                    <button class="btn bg-blue waves-effect btn-xs">
                                        <i class="material-icons">search</i>
                                    </button>
                                    <button class="btn bg-orange waves-effect btn-xs">
                                        <i class="material-icons">create</i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
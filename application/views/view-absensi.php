


<div class="block-header">

    <h2>LIST ABSENSI </h2>
</div>

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="card">
            <div class="header">
                <h2>
                    LIST ABSENSI
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li>
                        <button type="button" class="btn bg-blue waves-effect" onclick="v_absensi($(this))">
                            <i class="material-icons">verified_user</i>
                            <span>VERIFIKASI KEHADIRAN</span>
                        </button>
                    </li>
                </ul>
              
            </div><h1>
            <input type="text" name="tgl" class="form-control" value="<?php echo date('D, d F Y');?>" disabled></h1>
             <div class="body"> 
                <table class="table table-bordered table-responsive table-hover" id="tb_absensi">
                    <thead>
                        <tr>
                            <th width="10px">No.</th>
                            <th>Nama&nbsp;Karyawan</th>
                            <th width="180px">Sub Department</th>
                            <th width="20px">Action</th>
                            
                        </tr>
                    </thead>
                </table>
            </div>
    </div>
    </div>
</div>

<div class="row clearfix" id="list_absensi">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="body">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="false">
                            <i class="material-icons">date_range</i> HARIAN
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false">
                            <i class="material-icons">update</i> BULANAN
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">
                        <br>
                        

                        <table class="table table-bordered table-responsive table-hover" id="tb_RekapHarian">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Status Kehadiran</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Input</th>
                                    <th>Input By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($ls_pegawaiTraining)){ $no=1; ?>
                                    <?php foreach ($ls_pegawaiTraining as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><b><?php echo $value->nik; ?></b></td>
                                            
                                            <td width="200px"><?php echo $value->nama_lengkap; ?></td>
                                            <td width="250px">
                                                <?php echo $value->nama_department; ?><br>
                                                <small style="color:green; font-weight: bold;"><?php echo $value->nama_jabatan; ?></small>
                                            </td>
                                            <td><?php echo $value->nama_agen; ?></td>
                                            <td width="150px"><?php echo $value->nama_status; ?></td>
                                            <td width="100px">
                                                <a href="#detail">
                                                    <button class="btn bg-orange waves-effect btn-xs" onclick="detail('<?php echo $value->id_token; ?>')">
                                                        <i class="material-icons">create</i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php $no++; } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                        <br>
                        

                        <table class="table table-bordered table-responsive table-hover" id="tb_RekapBulan">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    
                                    <th>Periode</th>
                                    <th>Libur</th>
                                    <th>Ijin</th>
                                    <th>Bonus</th>
                                    <th>Klaim</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Input</th>
                                    <th>Selesai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($ls_pegawaiTetap)){ $no=1; ?>
                                    <?php foreach ($ls_pegawaiTetap as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><b><?php echo $value->nik; ?></b></td>
                                            
                                            <td width="200px"><?php echo $value->nama_lengkap; ?></td>
                                            <td width="250px">
                                                <?php echo $value->nama_department; ?><br>
                                                <small style="color:green; font-weight: bold;"><?php echo $value->nama_jabatan; ?></small>
                                            </td>
                                            <td><?php echo $value->nama_agen; ?></td>
                                            <td width="150px"><?php echo $value->nama_status; ?></td>
                                            <td width="100px">
                                                <a href="#detail">
                                                    <button class="btn bg-orange waves-effect btn-xs" onclick="detail('<?php echo $value->id_token; ?>')">
                                                        <i class="material-icons">create</i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php $no++; } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>



<!-- NIK, NAMA, DEPART, JBT, WILAYAH, STATUS,  -->

<style type="text/css">
    table#tb_Pegawai thead tr th{
        font-size: 10pt;
    }

    table#tb_Pegawai tbody tr td{
        font-size: 10pt;
        padding-top: 2px;
        padding-bottom: 2px;
    }

    #pegawai_btn_submit {
        position: fixed;
        right: 30px;
        bottom: 30px;
        width: 70px;
        height: 70px;
    }

/*    #profil_card div.card.profile-card {
        position: fixed;
        width: 16%;
    }*/

</style>


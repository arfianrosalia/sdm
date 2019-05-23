

<div class="block-header">
    <h2>LIST PEGAWAI</h2>
</div>


<div class="row clearfix" id="list_pegawai" style="display: none;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <!-- <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h2>LIST PEGAWAI</h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 align-right">
                        <div class="waves-effect"><i class="material-icons">refresh</i></div>
                    </div>
                </div>
            </div> -->
            <div class="body">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="false">
                            <i class="material-icons">school</i> TRAINING
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false">
                            <i class="material-icons">person</i> PEGAWAI TETAP
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#messages_with_icon_title" data-toggle="tab" aria-expanded="false">
                            <i class="material-icons">sentiment_satisfied</i> KONTRAK
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#settings_with_icon_title" data-toggle="tab" aria-expanded="true">
                            <i class="material-icons">group</i> ALL KARYAWAN
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#add_person">
                            <button class="btn waves-effect bg-green" onclick="formAdd()">
                                <i class="material-icons">person_add</i>&nbsp;Tambah Karyawan
                            </button>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">
                        <br>
                        

                        <table class="table table-bordered table-responsive table-hover" id="tb_Training">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NIK</th>
                                    
                                    <th>Nama</th>
                                    <th>Department&nbsp;&&nbsp;Jabatan</th>
                                    <th>Wilayah&nbsp;Agen</th>
                                    <th>Status</th>
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
                        

                        <table class="table table-bordered table-responsive table-hover" id="tb_PegawaiTetap">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NIK</th>
                                    
                                    <th>Nama</th>
                                    <th>Department&nbsp;&&nbsp;Jabatan</th>
                                    <th>Wilayah&nbsp;Agen</th>
                                    <th>Status</th>
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
                    <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                        <br>
                        

                        <table class="table table-bordered table-responsive table-hover" id="tb_Kontrak">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NIK</th>
                                    
                                    <th>Nama</th>
                                    <th>Department&nbsp;&&nbsp;Jabatan</th>
                                    <th>Wilayah&nbsp;Agen</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($ls_pegawaiKontrak)){ $no=1; ?>
                                    <?php foreach ($ls_pegawaiKontrak as $key => $value) { ?>
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
                    <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                        <br>
                        

                        <table class="table table-bordered table-responsive table-hover" id="tb_AllPegawai">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NIK</th>
                                    
                                    <th>Nama</th>
                                    <th>Department&nbsp;&&nbsp;Jabatan</th>
                                    <th>Wilayah&nbsp;Agen</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($ls_pegawai)){ $no=1; ?>
                                    <?php foreach ($ls_pegawai as $key => $value) { ?>
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

<div class="row clearfix" id="form_pegawai" style="display: none;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3" id="profil_card">
        <div class="card profile-card" >
            <div class="profile-header">&nbsp;</div>
            <div class="profile-body">
                <div class="image-area">
                    <!-- <a href="" id="a_foto_profile"> -->
                        
                        <img id="foto_profile" width="75%" height="75%" src="<?php echo base_url(); ?>assets/images/user.png" alt="AdminBSB - Profile Image" style="cursor: pointer;" onclick="openImage($(this))" />
                    <!-- </a> -->
                        <input id="ft" type="file" accept="image/*" style="display: none;" onchange="ch_img_profile(this)">
                </div>
                <div class="content-area">
                    <h3 id="profile_nama"></h3>
                    <p id="profile_department"></p>
                    <p id="profile_jabatan"></p>
                </div>
            </div>
            <div class="profile-footer" style="padding:0px;">
                <!-- <ul>
                    <li>
                        <span>Followers</span>
                        <span>1.234</span>
                    </li>
                    <li>
                        <span>Following</span>
                        <span>1.201</span>
                    </li>
                    <li>
                        <span>Friends</span>
                        <span>14.252</span>
                    </li>
                </ul> -->
                <div class="list-group">
                    <button type="button" class="list-group-item waves-effect" onclick="document.getElementById('ft').click()"><span class="fa fa-camera"></span>&nbsp;Ubah Foto Profil</button>
                    <button type="button" class="list-group-item waves-effect" onclick="toHistory('pegawai')"><span class="fa fa-pen"></span>&nbsp;Form Data Pegawai</button>
                    <button type="button" class="list-group-item waves-effect" onclick="toHistory('history','d')"><span class="fa fa-building"></span>&nbsp;Histori Departmen</button>
                    <button type="button" class="list-group-item waves-effect" onclick="toHistory('history','sd')"><span class="fa fa-building"></span>&nbsp;Histori Sub Departmen</button>
                    <button type="button" class="list-group-item waves-effect" onclick="toHistory('history','j')"><span class="fa fa-child"></span>&nbsp;Histori Jabatan</button>
                    <button type="button" class="list-group-item waves-effect" onclick="toHistory('history','s')"><span class="fa fa-street-view"></span>&nbsp;Histori Status Karyawan</button>
                    <button type="button" class="list-group-item waves-effect" onclick="toHistory('history','a')"><span class="fa fa-home"></span>&nbsp;Histori Agen</button>
                    <button type="button" class="list-group-item waves-effect" onclick="toHistory('history','p')"><span class="fa fa-laptop"></span>&nbsp;Histori Pelatihan</button>
                    <button type="button" class="list-group-item waves-effect bg-green" onclick="toAccess()"><span class="fa fa-unlock"></span>&nbsp;Setelan Hak Akses</button>
                </div>
            </div>
        </div>

        <!-- <div class="card card-about-me">
            <div class="header">
                <h2>ABOUT ME</h2>
            </div>
            <div class="body">
                <ul>
                    <li>
                        <div class="title">
                            <i class="material-icons">library_books</i>
                            Education
                        </div>
                        <div class="content">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="material-icons">location_on</i>
                            Location
                        </div>
                        <div class="content">
                            Malibu, California
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="material-icons">edit</i>
                            Skills
                        </div>
                        <div class="content">
                            <span class="label bg-red">UI Design</span>
                            <span class="label bg-teal">JavaScript</span>
                            <span class="label bg-blue">PHP</span>
                            <span class="label bg-amber">Node.js</span>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <i class="material-icons">notes</i>
                            Description
                        </div>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
                        </div>
                    </li>
                </ul>
            </div>
        </div> -->
    </div>

    <div id="contentPegawai" class="trigger">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">ABSENSI</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">BLABLA</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">BLABLA</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9" id="form_detail">
            <div class="card" id="panel-foto" style="display: none;">
                <div class="body">
                    <div src="" id="upload-demo"></div>
                    <center><button class="btn btn-primary waves-effect upload-result">CROP IMAGE</button></center>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>Data Pribadi</h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 align-right">
                            <div class="waves-effect"><i class="material-icons">refresh</i></div>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <form>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" col="c_nik" name="nik" disabled="disabled">
                                        <label class="form-label">NIK (Karyawan)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" col="c_no_ktp" name="no_ktp">
                                        <label class="form-label">No KTP</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" col="c_nama_singkat" name="nama_singkat">
                                        <label class="form-label">Nama Panggilan *</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <?php if(1+1==1){ ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="email_address">Gelar</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" col="c_gelar" name="gelar">
                                                <option disabled="disabled" selected="selected">-- Pilih Gelar --</option>
                                                <?php if(!empty($ls_gelar)){ ?>
                                                    <?php foreach ($ls_gelar as $key => $value) { ?>
                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->nama_gelar; ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email_address">Tanggal Lahir</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" data-format="dd-mm-yyyy" class="datetimepicker form-control" placeholder="Please choose date & time..." name="tanggal_lahir_format">
                                        <input type="hidden" class="datetimepicker form-control" col="c_tanggal_lahir" name="tanggal_lahir">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" col="c_nama_lengkap" name="nama_lengkap">
                                        <label class="form-label">Nama Lengkap *</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select class="form-control" col="c_jenis_kelamin" name="jenis_kelamin">
                                            <option disabled="disabled" selected="selected">-- Pilih Jenis Kelamin --</option>
                                            <option value="L">Laki Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email_address">Pendidikan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" col="c_pendidikan" name="pendidikan">
                                            <option disabled="disabled" selected="selected">-- Pilih Pendidikan --</option>
                                            <?php if(!empty($ls_pendidikan)){ ?>
                                                <?php foreach ($ls_pendidikan as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_pendidikan; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email_address">Agama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" col="c_agama" name="agama">
                                            <option disabled="disabled" selected="selected">-- Pilih Agama --</option>
                                            <?php if(!empty($ls_agama)){ ?>
                                                <?php foreach ($ls_agama as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_agama; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label class="form-label">Fungsional</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" col="c_fungsional" name="fungsional">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email_address">TMT</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time..." name="tmt_format">
                                        <input type="hidden" class="datetimepicker form-control" col="c_tmt" name="tmt">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="email_address">Department</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick design-select" col="c_department" name="department" onchange="ch_sub_department($(this).val())">
                                            <option disabled="disabled" selected="selected">-- Pilih Department --</option>
                                            <?php if(!empty($ls_department)){ ?>
                                                <?php foreach ($ls_department as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_department; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email_address">Sub Departmennt</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick design-select" col="c_department_sub" name="department_sub" >
                                            <option disabled="disabled" selected="selected">-- Pilih Sub Department --</option>
                                            <?php if(!empty($ls_department_sub)){ ?>
                                                <?php foreach ($ls_department_sub as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_department_sub; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email_address">Jabatan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick design-select" col="c_jabatan" name="jabatan">
                                            <option disabled="disabled" selected="selected">-- Pilih Jabatan --</option>
                                            <?php if(!empty($ls_jabatan)){ ?>
                                                <?php foreach ($ls_jabatan as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_jabatan; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line ">
                                        <input type="text" class="form-control" col="c_no_telepon" name="no_telepon">
                                        <label class="form-label">No Telepon</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group form-float">
                                    <div class="form-line ">
                                        <input type="text" class="form-control" col="c_kode_pos" name="kode_pos">
                                        <label class="form-label">Kode Pos</label>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>Keluarga</h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 align-right">
                            <div class="waves-effect"><i class="material-icons">refresh</i></div>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <form>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label for="email_address">Status Pribadi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick design-select" col="c_status_pribadi" name="status_pribadi">
                                            <option disabled="disabled" selected="selected">-- Pilih Status Pribadi --</option>
                                            <?php if(!empty($ls_status_pribadi)){ ?>
                                                <?php foreach ($ls_status_pribadi as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_status_pribadi; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label for="email_address">Nama Suami / Istri</label>
                                <div class="form-group">
                                    <div class="form-line ">
                                        <input type="text" class="form-control" col="c_nama_pasangan" name="nama_pasangan" placeholder="Masukkan nama pasangan">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label for="">Jumlah Anak</label>
                                <div class="form-group">
                                    <div class="form-line ">
                                        <input type="number" class="form-control" col="c_jumlah_anak" name="jumlah_anak" placeholder="Masukkan jumlah anak">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="">Nomor KK (Kartu Keluarga)</label>
                                <div class="form-group">
                                    <div class="form-line ">
                                        <input type="number" class="form-control" col="c_no_kk" name="no_kk" placeholder="Masukkan Nomor KK">
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <label style="color: green;">Domisili</label>
                        <form>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="email_address">Alamat Lengkap</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea class="form-control" col="c_alamat" name="alamat"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>Alamat</h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 align-right">
                            <div class="waves-effect"><i class="material-icons">refresh</i></div>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <label style="color: green;">Kota Kelahiran</label>
                    <form>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email_address">Provinsi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick design-select" name="provinsi_kelahiran" onchange="ch_prov_kota_kelahiran($(this).val())">
                                            <option disabled="disabled" selected="selected">-- Pilih Provinsi --</option>
                                            <?php if(!empty($ls_provinsi)){ ?>
                                                <?php foreach ($ls_provinsi as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="email_address">Kabupaten / Kota</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick design-select" col="c_kota_kelahiran" name="kt_kelahiran">
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>Status</h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 align-right">
                            <div class="waves-effect"><i class="material-icons">refresh</i></div>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <form>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label for="email_address">Status Karyawan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick design-select" col="c_status_karyawan" name="status_karyawan">
                                            <option disabled="disabled" selected="selected">-- Pilih Status Karyawan --</option>
                                            <?php if(!empty($ls_status_karyawan)){ ?>
                                                <?php foreach ($ls_status_karyawan as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_status_karyawan; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            
                            <?php if(1+1==1){ ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label for="email_address">Nama Atasan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick design-select" col="c_atasan" name="atasan">
                                            <option disabled="disabled" selected="selected">-- Pilih Atasan --</option>
                                            <?php if(!empty($ls_atasan)){ ?>
                                                <?php foreach ($ls_atasan as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_lengkap; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                    </form>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>Lokasi Agen</h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 align-right">
                            <div class="waves-effect"><i class="material-icons">refresh</i></div>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <form>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <label for="email_address">Lokasi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick design-select" col="c_lokasi_agen" name="nama_agen">
                                            <option disabled="disabled" selected="selected">-- Pilih Lokasi --</option>
                                            <?php if(!empty($ls_lokasi_agen)){ ?>
                                                <?php foreach ($ls_lokasi_agen as $key => $value) { ?>
                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_agen; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="body">
                    <form>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="email_address">Catatan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" col="c_catatan" name="catatan"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <button onclick="submit_add($(this))" id="pegawai_btn_submit" type="button" class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
            <i class="material-icons">save</i>
        </button>
    </div>

    <div id="contentHistory" class="trigger">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9" id="history_detail">

        </div>
    </div>

    <div id="contentAccess" class="trigger">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9" id="access_detail">

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
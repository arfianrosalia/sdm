<li class="active">
    <a href="<?php echo base_url('/'); ?>">
        <i class="material-icons">insert_chart</i>
        <span>Dashboard</span>
    </a>
</li>
<li>
    <a href="<?php echo base_url('pegawai/list_pegawai'); ?>">
        <i class="material-icons">people</i>
        <span>Pegawai</span>
    </a>
    <a href="<?php echo base_url('absensi'); ?>">
        <i class="material-icons">assignment</i>
        <span>Absensi</span>
    </a>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">storage</i>
        <span>Master</span>
    </a>
    <ul class="ml-menu">
          <li>
            <a href="<?php echo base_url('master/master_agama'); ?>">Agama</a>
        </li>
        <li>
            <a href="<?php echo base_url('master/master_departmen'); ?>">Department</a>
        </li>
        <li>
            <a href="<?php echo base_url('master/master_jabatan'); ?>">Jabatan</a>
        </li>
        <li>
            <a href="<?php echo base_url('master/master_StatusKaryawan'); ?>">Status Karyawan</a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                Pendidikan
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url('master/master_pendidikan'); ?>">Nama Pendidikan</a>
                </li>
                <li>
                    <a href="<?php echo base_url('master/master_Jurusan'); ?>">Jurusan</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo base_url('master/master_agen'); ?>">Agen</a>
        </li>
          <li>
            <a href="<?php echo base_url('master/master_fungsional'); ?>">Fungsional</a>
        </li>
       
        <li>
            <a href="<?php echo base_url('master/master_StatusPribadi'); ?>">Status Pribadi</a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                Wilayah
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="<?php echo base_url('master/master_wilayahProvinsi'); ?>">Provinsi</a>
                </li>
                <li>
                    <a href="<?php echo base_url('master/master_wilayahKabupaten'); ?>">Kabupaten</a>
                </li>
                <li>
                    <a href="<?php echo base_url('master/master_wilayahKecamatan'); ?>">Kecamatan</a>
                </li>
                <li>
                    <a href="<?php echo base_url('master/master_wilayahKelurahan'); ?>">Keluarahan</a>
                </li>
            </ul>
        </li>
    </ul>
</li>
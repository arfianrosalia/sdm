<div class="card">
    <div class="header">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-6">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="col-xs-12 col-sm-6 align-right">
                <div class="waves-effect"><i class="material-icons">refresh</i></div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="demo-checkbox" id="list_access">
                    <input type="checkbox" id="user-1" class="filled-in" ha="login" <?php echo !empty($ls_ha)?($ls_ha->akses_login==1?'checked':''):''; ?> >
                    <label for="user-1">Login</label>
                    <input type="checkbox" id="user-2" class="filled-in" ha="absensi" <?php echo !empty($ls_ha)?($ls_ha->akses_absensi==1?'checked':''):''; ?> >
                    <label for="user-2">Absensi</label>
                    <input type="checkbox" id="user-3" class="filled-in" ha="ubah_profil" <?php echo !empty($ls_ha)?($ls_ha->akses_ubah_profil==1?'checked':''):''; ?> >
                    <label for="user-3">Ubah Profil</label>
                    <input type="checkbox" id="user-4" class="filled-in" ha="edit_pegawai" <?php echo !empty($ls_ha)?($ls_ha->akses_edit_pegawai==1?'checked':''):''; ?> >
                    <label for="user-4">Edit Pegawai</label>
                    <input type="checkbox" id="user-5" class="filled-in" ha="all_user" <?php echo !empty($ls_ha)?($ls_ha->akses_all_user==1?'checked':''):''; ?> >
                    <label for="user-5">Show All User</label>
                    <input type="checkbox" id="user-6" class="filled-in" ha="delete_pegawai" <?php echo !empty($ls_ha)?($ls_ha->akses_delete_pegawai==1?'checked':''):''; ?> >
                    <label for="user-6">Delete Pegawai</label>
                    <input type="checkbox" id="user-7" class="filled-in" ha="ubah_password" <?php echo !empty($ls_ha)?($ls_ha->akses_ubah_password==1?'checked':''):''; ?> >
                    <label for="user-7">Ubah Password</label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button class="btn bg-green waves-effect" onclick="s_access($(this))">Simpan Akses</button>
            </div>
        </div>      
    </div>
</div>

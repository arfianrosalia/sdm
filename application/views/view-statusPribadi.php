<div class="block-header">
    <h2>MASTER SETATUS PRIBADI</h2>
</div>

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h2>LIST STATUS PRIBADI</h2><br>
                        <button type="button" class="btn btn-success waves-effect" onclick="addStatusPribadi()">
                                <i class="material-icons">queue</i>
                                <span>Tambah Data</span>
                         </button>
                    </div>
                    <div class="col-xs-12 col-sm-6 align-right">
                        <div class="waves-effect"><i class="material-icons">refresh</i></div>
                    </div>
                </div>
            </div>
            <div class="body">
                <table class="table table-bordered table-responsive table-hover" id="tb_master">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Status Pribadi</th>
                            <th>Katerangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  if(!empty('ls_statusPribadi')){
                            $no=1;
                            foreach ($ls_statusPribadi as $key => $value){
                         ?>
                        <tr>
                            <td  align="center"><?php echo $no;?></td>
                            <td><?php echo $value->nama_status_pribadi;?></td>
                            <td><?php echo $value->keterangan;?></td>
                             <td align="center">
                            
                               <button type="button" class="btn btn-warning waves-effect btn-xs" onclick="edit('<?php echo $value->id?>',$(this))"  >
                                    <span class="fa fa-pen"></span>
                                </button>
                                <button type="button" class="btn btn-danger waves-effect btn-xs" onclick="hapus(`<?php echo $value->id;?>`,$(this))">
                                    <span class="fa fa-trash"></span>
                                </button>

                            </td>
                        </tr>                   
                        </tr>
                        <?php 
                        $no++; 
                        }
                    }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    function setTypHis($x=null){
        if($x==1){
            return '<b style="color:green;">Ditambahkan menjadi</b>';
        }
        if($x==2){
            return '<b style="color:blue;">Berubah menjadi</b>';
        }
        if($x==0){
            return '<b style="color:red;">Dihapus</b>';
        }
    }
?>

<div class="card">
    <div class="header">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-6">
                <h2>History <?php echo $title; ?></h2>
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
                    <th>Pada Tanggal</th>
                    <th>Jenis History</th>
                    <th>History</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($ls_history)){ ?>
                    <?php $no=1; ?>
                    <?php foreach ($ls_history as $key => $value) { ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $value->his_date; ?></td>
                            <td><?php echo setTypHis($value->trigger_type); ?></td>
                            <td><?php echo $value->n_his; ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php } ?>
                    
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

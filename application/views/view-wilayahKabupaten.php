<div class="block-header">
    <h2>MASTER WILAYAH KABUPATEN</h2>
</div>

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-6">
                        <h2>LIST WILAYAH KABUPATEN</h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 align-right">
                        <div class="waves-effect"><i class="material-icons">refresh</i></div>
                    </div>
                </div>
            </div>
            <div class="body">
                <table class="table table-bordered table-responsive table-hover" id="tb_master" style="display: none;">
                    <thead>
                        <tr>
                            <th width="20px" align="center">No.</th>
                            <th>Nama&nbsp;kabupaten</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($ls_wilayahKabupaten)){ $no=1; ?>
                            <?php 
                          
                           foreach($ls_wilayahKabupaten as $key => $value) { 
                            ?>
                        <tr>
                            <td align="center"><?php echo $no;?></td>
                            <td><?php echo $value->name;?></td>
                            
                        </tr>
                        <?php $no++;}?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
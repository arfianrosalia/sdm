                        <div class="body">
                            
                            <form class="form-horizontal">
                                <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">NAMA JURUSAN</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_jurusan" value="<?php echo $data->nama_jurusan; ?>">
                                            </div>
                                        </div>
                                    </div><br><br><br>
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">PENDIDIKAN</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="id_pendidikan">
                                                <?php foreach ($ls_pendidikan as $key => $value){?>
                                                    <option value="<?php echo $value->id;?>" <?php echo $data->id_pendidikan==$value->id?'selected="selected"':''; ?>><?php echo $value->nama_pendidikan;?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div><br><br><br>
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">KETERANGAN</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="form-control" name="keterangan"><?php echo $data->keterangan; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                            </form>
                     
                            </div>
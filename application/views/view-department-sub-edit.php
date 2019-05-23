                        <div class="body">
                            
                            <form class="form-horizontal">
                                <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">NAMA SUB DEPARTMENT</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_subDepartment" value="<?php echo $data->nama_department_sub; ?>">
                                            </div>
                                        </div>
                                    </div><br><br><br>
                                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                        <label for="email_address_2">DEPARTMENT</label>
                                    </div>
                                    <div class="col-lg-8 col-md-4 col-sm-8 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="id_department">
                                                <?php foreach ($ls_department as $key => $value){?>
                                                    
                                                    <option value="<?php echo $value->id;?>" <?php echo $data->id_department==$value->id?'selected="selected"':''; ?>><?php echo $value->nama_department;?></option>
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
                                                <textarea class="form-control" name="keterangan"><?php echo $data->keterangan;?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                
                            </form>
                     
                            </div>
        <div class="x_panel">
            <div class="x_title">
                <h2><small>Danh Sách Khách Hàng</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li class="dropdown-mv">
                    <a href="<?= $this->Url->build(array('controller'=>'Khachhangs','action'=>'add')); ?>" class="color-black"><i class="glyphicon glyphicon-plus"></i> Thêm Mới</a>
                    </li>
                    <li class="dropdown-mv">
                        <a href="#" class="dropdown-toggle-mv color-black"><i class="glyphicon glyphicon-search"></i>Tìm Kiếm</a>
                        <div class="dropdown-menu-mv top_search_mv">
                            <div class="form-group top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control ip_timkiem" placeholder="Tìm Kiếm...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default sb_timkiem" type="button"><i class="glyphicon glyphicon-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?= $this->Form->create($user,['class' => 'form-horizontal form-label-left']) ?>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tài Khoản</label>
                        <div class="col-md-6 col-sm-6 ">
                          <?php echo $this->Form->control('username',['class' => 'form-control','label' => false]); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Mật Khẩu</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?php echo $this->Form->control('password',['class' => 'form-control','label' => false]); ?>
                            <span class="fa fa-eye fa-2x form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>  
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Xác Nhận Mật Khẩu</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?php echo $this->Form->control('confirm_password',['type' => 'password','class' => 'form-control','label' => false]); ?>
                            <span class="fa fa-eye fa-2x form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Link Mobile</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?php echo $this->Form->control('link_mobile',['class' => 'form-control','label' => false]); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Mật Khẩu Mobile</label>
                        <div class="col-md-6 col-sm-6 ">
                          <?php echo $this->Form->control('pd_mobile',['class' => 'form-control','label' => false]); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Số Điện Thoại</label>
                        <div class="col-md-6 col-sm-6 ">
                            <?php echo $this->Form->control('sdt',['class' => 'form-control','label' => false]); ?>
                        </div>
                    </div>  
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Địa Chỉ</label>
                        <div class="col-md-6 col-sm-6 ">
                          <?php echo $this->Form->control('dia_chi',['class' => 'form-control','label' => false,'require' => false]); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nhóm</label>
                        <div class="col-md-6 col-sm-6 ">
                          <?php echo $this->Form->control('group_id',['class' => 'form-control','label' => false,'require' => false]); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Ngày Hết Hạn</label>
                        <div class="col-md-6 col-sm-6 ">
                          <?php echo $this->Form->control('ngay_het_han',['class' => 'form-control','label' => false,'require' => false]); ?>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <br>
                            <button type="submit" class="btn btn-success"><?= __('Thêm Mới') ?></button>
                        </div>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
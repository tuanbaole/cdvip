        <div class="x_panel">
            <div class="x_title">
                <h2><small>Chỉnh Sửa Tài Khoản</small></h2>
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
                            <?php echo $this->Form->control('password_new',['class' => 'form-control','label' => false]); ?>
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
                            <button type="submit" class="btn btn-success"><?= __('Sửa') ?></button>
                        </div>
                    </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
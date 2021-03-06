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
        <?= $this->Form->create($kieudonglai,['class' => 'form-horizontal form-label-left']) ?>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><?= __('Tên Lãi') ?></label>
                <div class="col-md-6 col-sm-6 ">
                  <?php echo $this->Form->control('ten_kieu_dong_lai',['class' => 'form-control','label' => false]); ?>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><?= __('Kiểu Lãi') ?></label>
                <div class="col-md-6 col-sm-6 ">
                  <?php echo $this->Form->control('dang_lai',[
                    'class' => 'form-control',
                    'label' => false,
                    'type'  => 'select',
                    'options' => ['0' => __('Tính theo %'),'1' => __('Tính Theo nghìn')]
                ]); ?>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><?= __('Tính Lãi') ?></label>
                <div class="col-md-6 col-sm-6 ">
                  <?php echo $this->Form->control('tinh_lai',[
                    'class' => 'form-control',
                    'label' => false,
                    'type'  => 'select',
                    'options' => [
                        '0' => __('Ngày'),
                        '1' => __('Tuần'),
                        '2' => __('Tháng'),
                    ]
                ]); ?>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><?= __('Hệ số') ?></label>
                <div class="col-md-6 col-sm-6 ">
                  <?php echo $this->Form->control('he_so',[
                    'class' => 'form-control',
                    'label' => false,
                    'type'  => 'select',
                    'options' => [
                        '0' => __('Không Có Hệ Số Gốc'),
                        '1' => __('Tính Theo Hệ Số Gốc')
                    ]
                ]); ?>
                </div>
            </div>
            <div class="item form-group hidden">
                <label class="col-form-label col-md-3 col-sm-3 label-align">User</label>
                <div class="col-md-6 col-sm-6 ">
                    <?php echo $this->Form->control('user_id',[
                        'class' => 'form-control',
                        'label' => false,
                        'options' => [$current_user['id'] => $current_user['id']]
                    ]); ?>
                </div>
            </div>  
            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    <br>
                    <button type="submit" class="btn btn-success"><?= __('Lưu') ?></button>
                </div>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>

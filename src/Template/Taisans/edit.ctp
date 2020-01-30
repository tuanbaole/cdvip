<div class="x_panel">
    <div class="x_title">
        <h2><small>Thêm Nhóm</small></h2>
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
        <?= $this->Form->create($taisan,['class' => 'form-horizontal form-label-left']) ?>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Loại Tài Sản</label>
                <div class="col-md-6 col-sm-6 ">
                  <?php echo $this->Form->control('loai_tai_san',['class' => 'form-control','label' => false]); ?>
                </div>
            </div>
            <div class="item form-group hidden">
                <label class="col-form-label col-md-3 col-sm-3 label-align">User Id</label>
                <div class="col-md-6 col-sm-6 ">
                    <?php echo $this->Form->control('user_id',['class' => 'form-control','label' => false]); ?>
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
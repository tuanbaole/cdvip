
<div class="x_panel">
    <div class="x_title">
        <h2><small>Sửa Thông Tin Nhóm</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li class="dropdown-mv">
            <a href="<?= $this->Url->build(array('controller'=>'Groups','action'=>'add')); ?>" class="color-black"><i class="glyphicon glyphicon-plus"></i> Thêm Mới</a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <?= $this->Form->create($group,['class' => 'form-horizontal form-label-left']) ?>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên Nhóm</label>
                <div class="col-md-6 col-sm-6 ">
                  <?php echo $this->Form->control('name_group',['class' => 'form-control','label' => false]); ?>
                </div>
            </div>
            <div class="item form-group hidden">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Quyền Thứ Tự</label>
                <div class="col-md-6 col-sm-6 ">
                    <?php echo $this->Form->control('password',['class' => 'form-control','label' => false]); ?>
                </div>
            </div>  
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Link Mobile</label>
                <div class="col-md-6 col-sm-6 ">
                    <?php echo $this->Form->control('permission',['class' => 'form-control','label' => false]); ?>
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
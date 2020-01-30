<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <?= $this->Form->create($donglai,['class' => 'form-horizontal form-label-left']) ?>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"><?= __('Người Trả') ?></label>
                        <div class="col-md-6 col-sm-6 ">
                            <?php echo $this->Form->control('ho_ten',[
                                'class' => 'form-control',
                                'label' => false,
                                'value' => $quanly->ho_ten
                            ]); ?>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Tiền Lãi') ?></label>
                        <div class="col-md-6 col-sm-6 ">
                            <?php echo $this->Form->control('tien_lai',[
                                'class' => 'form-control',
                                'label' => false
                            ]); ?>
                        </div>
                    </div>  
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Phí Khác') ?></label>
                        <div class="col-md-6 col-sm-6 ">
                            <?php echo $this->Form->control('phi_khac',[
                                'class' => 'form-control',
                                'label' => false,
                                'value' => 0
                            ]); ?>
                        </div>
                    </div>
                     <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"><?= __('Ngày Trả') ?></label>
                        <div class="col-md-6 col-sm-6 ">
                            <?php echo $this->Form->control('ngay_tra',[
                                'class' => 'form-control',
                                'label' => false
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
    </div>
</div>
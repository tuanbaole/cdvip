<?= $this->Form->create('Users',['autocomplete' => true]) ?>
    <h1><?= __('Đăng Nhập') ?></h1>
    <div class="item form-group row">
        <div class="col-md-12 col-sm-12  form-group has-feedback">
            <?= $this->Form->control('username',[
                'class' => 'form-control pd-left-fr1',
                'placeholder' => __('Tài Khoản'),
                'label' => false
            ]) ?>
            <span class="fa fa-user form-control-feedback left"></span>
        </div>
    </div>
    <div class="item form-group row">
        <div class="col-md-12 col-sm-12  form-group has-feedback">
            <?= $this->Form->control('password',[
                'class' => 'form-control pd-left-fr1',
                'placeholder' => __('Mật Khẩu'), 
                'label' => false
            ]) ?>
            <span class="fa fa-key form-control-feedback left"></span>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-danger" href="index.html"><?= __('Đăng Nhập') ?></button>
    </div>
    <div class="clearfix"></div>
    <div class="separator">
        <div>
          <h1 style="color: #ffcc00;"><?= $this->html->image('../gentelella/img/facon.png') ?> <?= __('PHẦN MỀM CẦM ĐỒ') ?></h1>
          <p><h2><?= __('Liên Hệ Đăng Ký 0363.153.993') ?></h2></p>
        </div>
    </div>
<?= $this->Form->end() ?>
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?= $this->Url->build(array('controller'=>'Quanlys','action'=>'index')); ?>" class="site_title"><?= $this->html->image('../gentelella/img/facon.png') ?> <span style="color: #ffcc00;">Sổ Tay</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                        <a a href="<?= $this->Url->build(array('controller'=>'Quanlys','action'=>'index')); ?>"><i class="fa fa-institution"></i><?= __('Trang chủ'); ?></a>
                    </li>
                    <li>
                        <a><i class="fa fa fa-gears"></i><?= __('Cấu Hình'); ?> <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?= $this->Url->build(array('controller'=>'Taisans','action'=>'index')); ?>" ><?= __('Loại Tài Sản') ?></a></li>
                            <li><a href="<?= $this->Url->build(array('controller'=>'Kieudonglais','action'=>'index')); ?>" ><?= __('Kiểu Lãi'); ?></a></li>
                        </ul>
                    </li>
                    <?php if ($group['permission'] < 2): ?>
                        <li>
                            <a href="<?= $this->Url->build(array('controller'=>'Users','action'=>'index')); ?>"><i class="fa fa-users"></i><?= __('Quản Lý'); ?></a>
                        </li>
                        <li>
                            <a href="<?= $this->Url->build(array('controller'=>'Groups','action'=>'index')); ?>" ><i class="fa fa-exclamation-triangle"></i><?= __('Admin'); ?></a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
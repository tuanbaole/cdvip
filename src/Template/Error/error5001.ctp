<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';
?>
<div class="col-md-12">
    <div class="col-middle">
        <div class="text-center">
            <h1 class="error-number">Lỗi 500</h1>
            <h2>Không Tìm Thấy Kết Quả</h2>
            <?= $this->Html->link(__('Quay Lại Trang Chủ'),['controller' => 'Hopdongs','action' => 'index']) ?>
        </div>
    </div>
</div>
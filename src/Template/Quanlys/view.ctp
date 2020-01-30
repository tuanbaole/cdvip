<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quanly $quanly
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quanly'), ['action' => 'edit', $quanly->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quanly'), ['action' => 'delete', $quanly->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quanly->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quanlys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quanly'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kieudonglais'), ['controller' => 'Kieudonglais', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kieudonglai'), ['controller' => 'Kieudonglais', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Taisans'), ['controller' => 'Taisans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Taisan'), ['controller' => 'Taisans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quanlys view large-9 medium-8 columns content">
    <h3><?= h($quanly->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ho Ten') ?></th>
            <td><?= h($quanly->ho_ten) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Noi Cap') ?></th>
            <td><?= h($quanly->noi_cap) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($quanly->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $quanly->has('user') ? $this->Html->link($quanly->user->id, ['controller' => 'Users', 'action' => 'view', $quanly->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kieudonglai') ?></th>
            <td><?= $quanly->has('kieudonglai') ? $this->Html->link($quanly->kieudonglai->id, ['controller' => 'Kieudonglais', 'action' => 'view', $quanly->kieudonglai->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ten Tai San') ?></th>
            <td><?= h($quanly->ten_tai_san) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('So Khung') ?></th>
            <td><?= h($quanly->so_khung) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('So May') ?></th>
            <td><?= h($quanly->so_may) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bien So') ?></th>
            <td><?= h($quanly->bien_so) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imei') ?></th>
            <td><?= h($quanly->imei) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mat Khau') ?></th>
            <td><?= h($quanly->mat_khau) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Tai San') ?></th>
            <td><?= h($quanly->img_tai_san) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taisan') ?></th>
            <td><?= $quanly->has('taisan') ? $this->Html->link($quanly->taisan->id, ['controller' => 'Taisans', 'action' => 'view', $quanly->taisan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quanly->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('So Cmt') ?></th>
            <td><?= $this->Number->format($quanly->so_cmt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sdt') ?></th>
            <td><?= $this->Number->format($quanly->sdt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tinh Trang') ?></th>
            <td><?= $this->Number->format($quanly->tinh_trang) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('So Tien Vay') ?></th>
            <td><?= $this->Number->format($quanly->so_tien_vay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lai Xuat Ngay') ?></th>
            <td><?= $this->Number->format($quanly->lai_xuat_ngay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ky Dong Lai') ?></th>
            <td><?= $this->Number->format($quanly->ky_dong_lai) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('So Lan Tra') ?></th>
            <td><?= $this->Number->format($quanly->so_ngay_vay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kieu Dong Lai') ?></th>
            <td><?= $this->Number->format($quanly->kieu_dong_lai) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ngay Sinh') ?></th>
            <td><?= h($quanly->ngay_sinh) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ngay Cap') ?></th>
            <td><?= h($quanly->ngay_cap) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thoi Gian Bat Dau Vay') ?></th>
            <td><?= h($quanly->thoi_gian_bat_dau_vay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quanly->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quanly->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thoi Gian Ket Thuc Vay') ?></th>
            <td><?= h($quanly->thoi_gian_ket_thuc_vay) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Dia Chi') ?></h4>
        <?= $this->Text->autoParagraph(h($quanly->dia_chi)); ?>
    </div>
    <div class="row">
        <h4><?= __('Giay To The Chap') ?></h4>
        <?= $this->Text->autoParagraph(h($quanly->giay_to_the_chap)); ?>
    </div>
    <div class="row">
        <h4><?= __('Ghi Chu') ?></h4>
        <?= $this->Text->autoParagraph(h($quanly->ghi_chu)); ?>
    </div>
</div>

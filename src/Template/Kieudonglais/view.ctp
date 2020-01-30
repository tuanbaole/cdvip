<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kieudonglai $kieudonglai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kieudonglai'), ['action' => 'edit', $kieudonglai->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kieudonglai'), ['action' => 'delete', $kieudonglai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kieudonglai->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kieudonglais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kieudonglai'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kieudonglais view large-9 medium-8 columns content">
    <h3><?= h($kieudonglai->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ten Kieu Dong Lai') ?></th>
            <td><?= h($kieudonglai->ten_kieu_dong_lai) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $kieudonglai->has('user') ? $this->Html->link($kieudonglai->user->id, ['controller' => 'Users', 'action' => 'view', $kieudonglai->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($kieudonglai->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($kieudonglai->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($kieudonglai->modified) ?></td>
        </tr>
    </table>
</div>

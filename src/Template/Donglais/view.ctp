<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donglai $donglai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Donglai'), ['action' => 'edit', $donglai->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Donglai'), ['action' => 'delete', $donglai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donglai->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Donglais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Donglai'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="donglais view large-9 medium-8 columns content">
    <h3><?= h($donglai->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ho Ten') ?></th>
            <td><?= h($donglai->ho_ten) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $donglai->has('user') ? $this->Html->link($donglai->user->id, ['controller' => 'Users', 'action' => 'view', $donglai->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($donglai->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tien Lai') ?></th>
            <td><?= $this->Number->format($donglai->tien_lai) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phi Khac') ?></th>
            <td><?= $this->Number->format($donglai->phi_khac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quanly Id') ?></th>
            <td><?= $this->Number->format($donglai->quanly_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ngay Tra') ?></th>
            <td><?= h($donglai->ngay_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($donglai->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($donglai->modified) ?></td>
        </tr>
    </table>
</div>

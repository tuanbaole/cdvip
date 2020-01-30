<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Taisan $taisan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Taisan'), ['action' => 'edit', $taisan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Taisan'), ['action' => 'delete', $taisan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taisan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Taisans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Taisan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="taisans view large-9 medium-8 columns content">
    <h3><?= h($taisan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Loai Tai San') ?></th>
            <td><?= h($taisan->loai_tai_san) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $taisan->has('user') ? $this->Html->link($taisan->user->id, ['controller' => 'Users', 'action' => 'view', $taisan->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($taisan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($taisan->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($taisan->modified) ?></td>
        </tr>
    </table>
</div>

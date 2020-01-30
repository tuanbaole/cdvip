<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donglai[]|\Cake\Collection\CollectionInterface $donglais
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Donglai'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="donglais index large-9 medium-8 columns content">
    <h3><?= __('Donglais') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ho_ten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tien_lai') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phi_khac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ngay_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quanly_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($donglais as $donglai): ?>
            <tr>
                <td><?= $this->Number->format($donglai->id) ?></td>
                <td><?= h($donglai->ho_ten) ?></td>
                <td><?= $this->Number->format($donglai->tien_lai) ?></td>
                <td><?= $this->Number->format($donglai->phi_khac) ?></td>
                <td><?= h($donglai->ngay_tra) ?></td>
                <td><?= $this->Number->format($donglai->quanly_id) ?></td>
                <td><?= $donglai->has('user') ? $this->Html->link($donglai->user->id, ['controller' => 'Users', 'action' => 'view', $donglai->user->id]) : '' ?></td>
                <td><?= h($donglai->created) ?></td>
                <td><?= h($donglai->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $donglai->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $donglai->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $donglai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donglai->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

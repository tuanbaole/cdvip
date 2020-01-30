<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donglai $donglai
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $donglai->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $donglai->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Donglais'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="donglais form large-9 medium-8 columns content">
    <?= $this->Form->create($donglai) ?>
    <fieldset>
        <legend><?= __('Edit Donglai') ?></legend>
        <?php
            echo $this->Form->control('ho_ten');
            echo $this->Form->control('tien_lai');
            echo $this->Form->control('phi_khac');
            echo $this->Form->control('ngay_tra');
            echo $this->Form->control('quanly_id');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

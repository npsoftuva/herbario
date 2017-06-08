<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Family'), ['action' => 'edit', $family->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Family'), ['action' => 'delete', $family->id], ['confirm' => __('Are you sure you want to delete # {0}?', $family->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="families view large-9 medium-8 columns content">
    <h3><?= h($family->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($family->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info') ?></th>
            <td><?= h($family->info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($family->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($family->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($family->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Genres') ?></h4>
        <?php if (!empty($family->genres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Info') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Family Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($family->genres as $genres): ?>
            <tr>
                <td><?= h($genres->id) ?></td>
                <td><?= h($genres->name) ?></td>
                <td><?= h($genres->info) ?></td>
                <td><?= h($genres->created) ?></td>
                <td><?= h($genres->modified) ?></td>
                <td><?= h($genres->family_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Genres', 'action' => 'view', $genres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Genres', 'action' => 'edit', $genres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Genres', 'action' => 'delete', $genres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $genres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

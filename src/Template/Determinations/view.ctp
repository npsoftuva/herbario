<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Determination'), ['action' => 'edit', $determination->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Determination'), ['action' => 'delete', $determination->id], ['confirm' => __('Are you sure you want to delete # {0}?', $determination->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Determinations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Determination'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="determinations view large-9 medium-8 columns content">
    <h3><?= h($determination->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Determiner') ?></th>
            <td><?= h($determination->determiner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($determination->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($determination->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($determination->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($determination->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Collections') ?></h4>
        <?php if (!empty($determination->collections)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Register') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Local Id') ?></th>
                <th scope="col"><?= __('Determination Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($determination->collections as $collections): ?>
            <tr>
                <td><?= h($collections->id) ?></td>
                <td><?= h($collections->date) ?></td>
                <td><?= h($collections->register) ?></td>
                <td><?= h($collections->photo) ?></td>
                <td><?= h($collections->created) ?></td>
                <td><?= h($collections->modified) ?></td>
                <td><?= h($collections->local_id) ?></td>
                <td><?= h($collections->determination_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Collections', 'action' => 'view', $collections->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Collections', 'action' => 'edit', $collections->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Collections', 'action' => 'delete', $collections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collections->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Collector'), ['action' => 'edit', $collector->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Collector'), ['action' => 'delete', $collector->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collector->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Collectors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collector'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="collectors view large-9 medium-8 columns content">
    <h3><?= h($collector->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($collector->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($collector->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($collector->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($collector->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Collections') ?></h4>
        <?php if (!empty($collector->collections)): ?>
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
            <?php foreach ($collector->collections as $collections): ?>
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

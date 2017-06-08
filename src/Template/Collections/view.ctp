<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Collection'), ['action' => 'edit', $collection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Collection'), ['action' => 'delete', $collection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Collections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collection'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locals'), ['controller' => 'Locals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Local'), ['controller' => 'Locals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Determinations'), ['controller' => 'Determinations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Determination'), ['controller' => 'Determinations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Species'), ['controller' => 'Species', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Species'), ['controller' => 'Species', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collectors'), ['controller' => 'Collectors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collector'), ['controller' => 'Collectors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="collections view large-9 medium-8 columns content">
    <h3><?= h($collection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($collection->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Local') ?></th>
            <td><?= $collection->has('local') ? $this->Html->link($collection->local->id, ['controller' => 'Locals', 'action' => 'view', $collection->local->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Determination') ?></th>
            <td><?= $collection->has('determination') ? $this->Html->link($collection->determination->id, ['controller' => 'Determinations', 'action' => 'view', $collection->determination->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($collection->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Register') ?></th>
            <td><?= $this->Number->format($collection->register) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($collection->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($collection->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($collection->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Species') ?></h4>
        <?php if (!empty($collection->species)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Info') ?></th>
                <th scope="col"><?= __('Author') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Genre Id') ?></th>
                <th scope="col"><?= __('Collection Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($collection->species as $species): ?>
            <tr>
                <td><?= h($species->id) ?></td>
                <td><?= h($species->name) ?></td>
                <td><?= h($species->info) ?></td>
                <td><?= h($species->author) ?></td>
                <td><?= h($species->created) ?></td>
                <td><?= h($species->modified) ?></td>
                <td><?= h($species->genre_id) ?></td>
                <td><?= h($species->collection_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Species', 'action' => 'view', $species->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Species', 'action' => 'edit', $species->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Species', 'action' => 'delete', $species->id], ['confirm' => __('Are you sure you want to delete # {0}?', $species->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Collectors') ?></h4>
        <?php if (!empty($collection->collectors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($collection->collectors as $collectors): ?>
            <tr>
                <td><?= h($collectors->id) ?></td>
                <td><?= h($collectors->name) ?></td>
                <td><?= h($collectors->created) ?></td>
                <td><?= h($collectors->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Collectors', 'action' => 'view', $collectors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Collectors', 'action' => 'edit', $collectors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Collectors', 'action' => 'delete', $collectors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collectors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

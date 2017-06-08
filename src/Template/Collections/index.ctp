<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Collection'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locals'), ['controller' => 'Locals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Local'), ['controller' => 'Locals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Determinations'), ['controller' => 'Determinations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Determination'), ['controller' => 'Determinations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Species'), ['controller' => 'Species', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Species'), ['controller' => 'Species', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Collectors'), ['controller' => 'Collectors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collector'), ['controller' => 'Collectors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="collections index large-9 medium-8 columns content">
    <h3><?= __('Collections') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('register') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('local_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('determination_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($collections as $collection): ?>
            <tr>
                <td><?= $this->Number->format($collection->id) ?></td>
                <td><?= h($collection->date) ?></td>
                <td><?= $this->Number->format($collection->register) ?></td>
                <td><?= h($collection->photo) ?></td>
                <td><?= h($collection->created) ?></td>
                <td><?= h($collection->modified) ?></td>
                <td><?= $collection->has('local') ? $this->Html->link($collection->local->id, ['controller' => 'Locals', 'action' => 'view', $collection->local->id]) : '' ?></td>
                <td><?= $collection->has('determination') ? $this->Html->link($collection->determination->id, ['controller' => 'Determinations', 'action' => 'view', $collection->determination->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $collection->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $collection->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $collection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collection->id)]) ?>
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

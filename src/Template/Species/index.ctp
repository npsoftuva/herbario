<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Species'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="species index large-9 medium-8 columns content">
    <h3><?= __('Species') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('info') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genre_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('collection_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($species as $species): ?>
            <tr>
                <td><?= $this->Number->format($species->id) ?></td>
                <td><?= h($species->name) ?></td>
                <td><?= h($species->info) ?></td>
                <td><?= h($species->author) ?></td>
                <td><?= h($species->created) ?></td>
                <td><?= h($species->modified) ?></td>
                <td><?= $species->has('genre') ? $this->Html->link($species->genre->name, ['controller' => 'Genres', 'action' => 'view', $species->genre->id]) : '' ?></td>
                <td><?= $species->has('collection') ? $this->Html->link($species->collection->id, ['controller' => 'Collections', 'action' => 'view', $species->collection->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $species->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $species->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $species->id], ['confirm' => __('Are you sure you want to delete # {0}?', $species->id)]) ?>
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

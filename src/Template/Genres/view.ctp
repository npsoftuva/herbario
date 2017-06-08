<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Genre'), ['action' => 'edit', $genre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Genre'), ['action' => 'delete', $genre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $genre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Genres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Species'), ['controller' => 'Species', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Species'), ['controller' => 'Species', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="genres view large-9 medium-8 columns content">
    <h3><?= h($genre->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($genre->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Info') ?></th>
            <td><?= h($genre->info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family') ?></th>
            <td><?= $genre->has('family') ? $this->Html->link($genre->family->name, ['controller' => 'Families', 'action' => 'view', $genre->family->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($genre->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($genre->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($genre->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Species') ?></h4>
        <?php if (!empty($genre->species)): ?>
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
            <?php foreach ($genre->species as $species): ?>
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
</div>

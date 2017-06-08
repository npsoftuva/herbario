<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Local'), ['action' => 'edit', $local->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Local'), ['action' => 'delete', $local->id], ['confirm' => __('Are you sure you want to delete # {0}?', $local->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Local'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locals view large-9 medium-8 columns content">
    <h3><?= h($local->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($local->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($local->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($local->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($local->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($local->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Local') ?></th>
            <td><?= h($local->local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($local->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Altitude') ?></th>
            <td><?= $this->Number->format($local->altitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($local->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($local->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Collections') ?></h4>
        <?php if (!empty($local->collections)): ?>
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
            <?php foreach ($local->collections as $collections): ?>
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

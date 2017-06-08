<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Species'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="species form large-9 medium-8 columns content">
    <?= $this->Form->create($species) ?>
    <fieldset>
        <legend><?= __('Add Species') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('info');
            echo $this->Form->control('author');
            echo $this->Form->control('genre_id', ['options' => $genres]);
            echo $this->Form->control('collection_id', ['options' => $collections]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

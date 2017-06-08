<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Collectors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="collectors form large-9 medium-8 columns content">
    <?= $this->Form->create($collector) ?>
    <fieldset>
        <legend><?= __('Add Collector') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('collections._ids', ['options' => $collections]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

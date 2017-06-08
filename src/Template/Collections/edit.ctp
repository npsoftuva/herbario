<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $collection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $collection->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Collections'), ['action' => 'index']) ?></li>
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
<div class="collections form large-9 medium-8 columns content">
    <?= $this->Form->create($collection) ?>
    <fieldset>
        <legend><?= __('Edit Collection') ?></legend>
        <?php
            echo $this->Form->control('date');
            echo $this->Form->control('register');
            echo $this->Form->control('photo');
            echo $this->Form->control('local_id', ['options' => $locals]);
            echo $this->Form->control('determination_id', ['options' => $determinations]);
            echo $this->Form->control('collectors._ids', ['options' => $collectors]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

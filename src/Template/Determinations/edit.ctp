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
                ['action' => 'delete', $determination->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $determination->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Determinations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Collections'), ['controller' => 'Collections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Collection'), ['controller' => 'Collections', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="determinations form large-9 medium-8 columns content">
    <?= $this->Form->create($determination) ?>
    <fieldset>
        <legend><?= __('Edit Determination') ?></legend>
        <?php
            echo $this->Form->control('determiner');
            echo $this->Form->control('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chofere $chofere
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chofere->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chofere->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Choferes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="choferes form large-9 medium-8 columns content">
    <?= $this->Form->create($chofere) ?>
    <fieldset>
        <legend><?= __('Edit Chofere') ?></legend>
        <?php
            echo $this->Form->control('brevete');
            echo $this->Form->control('DNI');
            echo $this->Form->control('nombres');
            echo $this->Form->control('apellidos');
            echo $this->Form->control('categoria');
            echo $this->Form->control('fechanac');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

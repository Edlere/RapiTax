<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chofere $chofere
 */
?>

<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Html->link(__('List Choferes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="choferes form large-9 medium-4 columns content">

    <?= $this->Form->create($chofere) ?>
    <fieldset>
        <legend><?= __('Add Chofere') ?></legend>
        <?php
            echo $this->Form->control('brevete');
            echo $this->Form->control('DNI');
            echo $this->Form->control('nombres');
            echo $this->Form->control('apellidos');
            echo $this->Form->control('categoria');
            echo $this->Form->control('fechanac');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' =>'btn btn-warning']) ?>
    <?= $this->Form->end() ?>
</div>

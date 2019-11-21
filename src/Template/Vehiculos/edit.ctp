<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehiculo $vehiculo
 */
?>
<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vehiculo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vehiculo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(_('Salir'),['controller'=>'Users','action' =>'logout'])?></li>
    </ul>
</nav>
</div>
<div class="vehiculos form large-9 medium-8 columns content">
    <?= $this->Form->create($vehiculo) ?>
    <fieldset>
        <legend><?= __('Edit Vehiculo') ?></legend>
        <?php
            echo $this->Form->control('placa');
            echo $this->Form->control('modelo');
            echo $this->Form->control('marca');
            echo $this->Form->control('año');
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' =>'btn btn-warning']) ?>
    <?= $this->Form->end() ?>
</div>

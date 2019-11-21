<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposervicio $tiposervicio
 */
?>
<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposervicio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tiposervicios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="tiposervicios form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposervicio) ?>
    <fieldset>
        <legend><?= __('Edit Tiposervicio') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' =>'btn btn-warning']) ?>
    <?= $this->Form->end() ?>
</div>

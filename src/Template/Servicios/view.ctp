<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio $servicio
 */
?>
<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Html->link(__('Edit Servicio'), ['action' => 'edit', $servicio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Servicio'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Servicios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servicio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Choferes'), ['controller' => 'Choferes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chofere'), ['controller' => 'Choferes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['controller' => 'Vehiculos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehiculo'), ['controller' => 'Vehiculos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tiposervicios'), ['controller' => 'Tiposervicios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposervicio'), ['controller' => 'Tiposervicios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
</div>
<div class="servicios view large-9 medium-8 columns content">
    <h3><?= h($servicio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= $servicio->has('cliente') ? $this->Html->link($servicio->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $servicio->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chofere') ?></th>
            <td><?= $servicio->has('chofere') ? $this->Html->link($servicio->chofere->id, ['controller' => 'Choferes', 'action' => 'view', $servicio->chofere->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vehiculo') ?></th>
            <td><?= $servicio->has('vehiculo') ? $this->Html->link($servicio->vehiculo->id, ['controller' => 'Vehiculos', 'action' => 'view', $servicio->vehiculo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiposervicio') ?></th>
            <td><?= $servicio->has('tiposervicio') ? $this->Html->link($servicio->tiposervicio->id, ['controller' => 'Tiposervicios', 'action' => 'view', $servicio->tiposervicio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Origen') ?></th>
            <td><?= h($servicio->origen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destinoref') ?></th>
            <td><?= h($servicio->destinoref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destinoreal') ?></th>
            <td><?= h($servicio->destinoreal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($servicio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($servicio->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($servicio->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($servicio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($servicio->modified) ?></td>
        </tr>
    </table>
</div>

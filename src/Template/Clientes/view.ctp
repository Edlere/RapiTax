<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
</div>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DNI') ?></th>
            <td><?= h($cliente->DNI) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($cliente->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ruc') ?></th>
            <td><?= h($cliente->ruc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($cliente->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($cliente->nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($cliente->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($cliente->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razsoc') ?></th>
            <td><?= h($cliente->razsoc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($cliente->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($cliente->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($cliente->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($cliente->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecharegistro') ?></th>
            <td><?= h($cliente->fecharegistro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cliente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cliente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Servicios') ?></h4>
        <?php if (!empty($cliente->servicios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cliente Id') ?></th>
                <th scope="col"><?= __('Chofere Id') ?></th>
                <th scope="col"><?= __('Vehiculo Id') ?></th>
                <th scope="col"><?= __('Tiposervicio Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Origen') ?></th>
                <th scope="col"><?= __('Destinoref') ?></th>
                <th scope="col"><?= __('Destinoreal') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->servicios as $servicios): ?>
            <tr>
                <td><?= h($servicios->id) ?></td>
                <td><?= h($servicios->cliente_id) ?></td>
                <td><?= h($servicios->chofere_id) ?></td>
                <td><?= h($servicios->vehiculo_id) ?></td>
                <td><?= h($servicios->tiposervicio_id) ?></td>
                <td><?= h($servicios->fecha) ?></td>
                <td><?= h($servicios->origen) ?></td>
                <td><?= h($servicios->destinoref) ?></td>
                <td><?= h($servicios->destinoreal) ?></td>
                <td><?= h($servicios->precio) ?></td>
                <td><?= h($servicios->created) ?></td>
                <td><?= h($servicios->modified) ?></td>
                <td class="actions">
                  <?= $this->Html->link(__('View'), ['controller' => 'Servicios', 'action' => 'view', $servicios->id],['class' =>'btn btn-primary btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['controller' => 'Servicios', 'action' => 'edit', $servicios->id],['class' =>'btn btn-success btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['controller' => 'Servicios', 'action' => 'delete', $servicios->id],['class' =>'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $servicios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

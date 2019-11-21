<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio[]|\Cake\Collection\CollectionInterface $servicios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Choferes'), ['controller' => 'Choferes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chofere'), ['controller' => 'Choferes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehiculos'), ['controller' => 'Vehiculos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehiculo'), ['controller' => 'Vehiculos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tiposervicios'), ['controller' => 'Tiposervicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposervicio'), ['controller' => 'Tiposervicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servicios index large-9 medium-8 columns content">
    <h3><?= __('Servicios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chofere_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vehiculo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tiposervicio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('origen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destinoref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destinoreal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servicios as $servicio): ?>
            <tr>
                <td><?= $this->Number->format($servicio->id) ?></td>
                <td><?= $servicio->has('cliente') ? $this->Html->link($servicio->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $servicio->cliente->id]) : '' ?></td>
                <td><?= $servicio->has('chofere') ? $this->Html->link($servicio->chofere->id, ['controller' => 'Choferes', 'action' => 'view', $servicio->chofere->id]) : '' ?></td>
                <td><?= $servicio->has('vehiculo') ? $this->Html->link($servicio->vehiculo->id, ['controller' => 'Vehiculos', 'action' => 'view', $servicio->vehiculo->id]) : '' ?></td>
                <td><?= $servicio->has('tiposervicio') ? $this->Html->link($servicio->tiposervicio->id, ['controller' => 'Tiposervicios', 'action' => 'view', $servicio->tiposervicio->id]) : '' ?></td>
                <td><?= h($servicio->fecha) ?></td>
                <td><?= h($servicio->origen) ?></td>
                <td><?= h($servicio->destinoref) ?></td>
                <td><?= h($servicio->destinoreal) ?></td>
                <td><?= $this->Number->format($servicio->precio) ?></td>
                <td><?= h($servicio->created) ?></td>
                <td><?= h($servicio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $servicio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servicio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

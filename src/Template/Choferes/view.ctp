<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chofere $chofere
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chofere'), ['action' => 'edit', $chofere->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chofere'), ['action' => 'delete', $chofere->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chofere->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Choferes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chofere'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="choferes view large-9 medium-8 columns content">
    <h3><?= h($chofere->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Brevete') ?></th>
            <td><?= h($chofere->brevete) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DNI') ?></th>
            <td><?= h($chofere->DNI) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($chofere->nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($chofere->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($chofere->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($chofere->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fechanac') ?></th>
            <td><?= h($chofere->fechanac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($chofere->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($chofere->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Servicios') ?></h4>
        <?php if (!empty($chofere->servicios)): ?>
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
            <?php foreach ($chofere->servicios as $servicios): ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'Servicios', 'action' => 'view', $servicios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Servicios', 'action' => 'edit', $servicios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Servicios', 'action' => 'delete', $servicios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

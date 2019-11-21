<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehiculo[]|\Cake\Collection\CollectionInterface $vehiculos
 */
?>
<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Html->link(__('New Vehiculo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="vehiculos index large-9 medium-8 columns content">
    <h3><?= __('Vehiculos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
          <tr  class="p-3 mb-2 bg-warning text-dark">
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('placa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('año') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehiculos as $vehiculo): ?>
            <tr>
                <td><?= $this->Number->format($vehiculo->id) ?></td>
                <td><?= h($vehiculo->placa) ?></td>
                <td><?= h($vehiculo->modelo) ?></td>
                <td><?= h($vehiculo->marca) ?></td>
                <td><?= h($vehiculo->año) ?></td>
                <td><?= h($vehiculo->estado) ?></td>
                <td><?= h($vehiculo->created) ?></td>
                <td><?= h($vehiculo->modified) ?></td>
                <td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $vehiculo->id],['class' =>'btn btn-primary btn-xs'] )?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vehiculo->id],['class' =>'btn btn-success btn-xs'])?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vehiculo->id],['class' =>'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $vehiculo->id)]) ?>

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

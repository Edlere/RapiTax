<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
          <tr  class="p-3 mb-2 bg-warning text-dark">
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DNI') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ruc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecharegistro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('razsoc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->DNI) ?></td>
                <td><?= h($cliente->correo) ?></td>
                <td><?= h($cliente->ruc) ?></td>
                <td><?= h($cliente->fecharegistro) ?></td>
                <td><?= h($cliente->categoria) ?></td>
                <td><?= h($cliente->nombres) ?></td>
                <td><?= h($cliente->apellidos) ?></td>
                <td><?= h($cliente->sexo) ?></td>
                <td><?= h($cliente->razsoc) ?></td>
                <td><?= h($cliente->direccion) ?></td>
                <td><?= h($cliente->descripcion) ?></td>
                <td><?= h($cliente->telefono) ?></td>
                <td><?= h($cliente->estado) ?></td>
                <td><?= h($cliente->created) ?></td>
                <td><?= h($cliente->modified) ?></td>
                <td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id],['class' =>'btn btn-primary btn-xs'] )?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id],['class' =>'btn btn-success btn-xs'])?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id],['class' =>'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>

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

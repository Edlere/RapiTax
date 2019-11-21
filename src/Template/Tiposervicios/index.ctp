<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposervicio[]|\Cake\Collection\CollectionInterface $tiposervicios
 */
?>
<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Html->link(__('New Tiposervicio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="tiposervicios index large-9 medium-8 columns content">
    <h3><?= __('Tiposervicios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
          <tr  class="p-3 mb-2 bg-warning text-dark">
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposervicios as $tiposervicio): ?>
            <tr>
                <td><?= $this->Number->format($tiposervicio->id) ?></td>
                <td><?= h($tiposervicio->descripcion) ?></td>
                <td><?= h($tiposervicio->created) ?></td>
                <td><?= h($tiposervicio->modified) ?></td>
                <td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $tiposervicio->id],['class' =>'btn btn-primary btn-xs'] )?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposervicio->id],['class' =>'btn btn-success btn-xs'])?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposervicio->id],['class' =>'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposervicio->id)]) ?>
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

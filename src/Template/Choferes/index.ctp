<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chofere[]|\Cake\Collection\CollectionInterface $choferes
 */
?>
<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Html->link(__('New Chofere'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['controller' => 'Servicios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servicio'), ['controller' => 'Servicios', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="choferes index large-9 medium-8 columns content">
    <h3><?= __('Choferes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
          <tr  class="p-3 mb-2 bg-warning text-dark">
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('brevete') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DNI') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechanac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($choferes as $chofere): ?>
            <tr>
                <td><?= $this->Number->format($chofere->id) ?></td>
                <td><?= h($chofere->brevete) ?></td>
                <td><?= h($chofere->DNI) ?></td>
                <td><?= h($chofere->nombres) ?></td>
                <td><?= h($chofere->apellidos) ?></td>
                <td><?= h($chofere->categoria) ?></td>
                <td><?= h($chofere->fechanac) ?></td>
                <td><?= h($chofere->created) ?></td>
                <td><?= h($chofere->modified) ?></td>
                <td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $chofere->id],['class' =>'btn btn-primary btn-xs'] )?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chofere->id],['class' =>'btn btn-success btn-xs'])?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chofere->id],['class' =>'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $chofere->id)]) ?>
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

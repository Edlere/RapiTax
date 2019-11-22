<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="container">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
          <tr  class="p-3 mb-2 bg-warning text-dark">
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class' =>'btn btn-primary btn-xs'] )?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class' =>'btn btn-success btn-xs'])?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id],['class' =>'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>


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

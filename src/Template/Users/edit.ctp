<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="top-nav large-12 medium-12 columns content">
  <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark">
    <ul class="nav-item">
      <a href="/rapitax/">
      <li "nav-item"><?= $this->Html->image('logo.png')?></li></a>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
</div>
<div class="container">
    <div class="row">
<div Class="col-md-6 go-right">    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' =>'btn btn-warning']) ?>
    <?= $this->Form->end() ?>
</div>

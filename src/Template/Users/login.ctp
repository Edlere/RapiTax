<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
    <div class="container">
        <h3 class="text-center text-white pt-5">Iniciar Sesión</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">

                            <?= $this->Form->create() ?>
                                <fieldset>
                                  <legend><?= __('RAPITAX') ?></legend>
                                  <legend><?= __('Bienvenid@') ?></legend>
                            <div class="form-group">
                              <?= $this->Form->control('username') ?>
                            </div>
                            <div class="form-group">
                             <?= $this->Form->control('password') ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->button(__('Login'),['class' =>'btn btn-warning btn-xs']); ?>
                                <?= $this->Form->end() ?>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

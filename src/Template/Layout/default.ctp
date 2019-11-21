<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?php echo ":: RAPITAX ::"; ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(array('bootstrap.min.css','style.css','base.css','bootstrap.css','font-awesome.css','home.css','simplelightbox.min.css')) ?>
    <?= $this->Html->script(array('bootstrap.js','bootstrap.min.js','easing.js','jarallax.js','jquery1.11.1.min.js','jquery-3.4.1.min.js','move-top.js','responsiveslides.min.js','simple-lightbox.js','SmoothScroll.min.js')) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <div id="content">
            <?= $this->fetch('content') ?>
    </div>

</body>
</html>

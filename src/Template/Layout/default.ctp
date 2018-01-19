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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <?php if ($uid && $urole == 'Admin') { ?>
                <div class="top-bar-section">
                    <ul class="left">
                        <li><?php echo $this->Html->link('Home', ['controller' => 'Home', 'action' => 'index']);?></li>
                        <li><?php echo $this->Html->link('View Profile', ['controller' => 'Users', 'action' => 'view', $uid]);?></li>
                        <li><?php echo $this->Html->link('Edit Profile', ['controller' => 'Users', 'action' => 'myedit', $uid]);?></li>
                        <li><?php echo $this->Html->link('Manager Users', ['controller' => 'Users', 'action' => 'manager']);?></li>
                    </ul>
                    <ul class="right">
                        <li><a target="_blank" href="/users/view/<?= $uid?>" class="show-uname"> (<?php echo $uname; ?>)</a></li>
                        <li><a href="/users/logout" class="logout-btn">Logout</a></li>
                    </ul>
                </div>
        <?php }
            else if ($uid)
            { ?>
                <div class="top-bar-section">
                    <ul class="left">
                        <li><?php echo $this->Html->link('Home', ['controller' => 'Home', 'action' => 'index']);?></li>
                        <li><?php echo $this->Html->link('View Profile', ['controller' => 'Users', 'action' => 'view', $uid]);?></li>
                        <li><?php echo $this->Html->link('Edit Profile', ['controller' => 'Users', 'action' => 'myedit', $uid]);?></li>
                    </ul>
                    <ul class="right">
                        <li><a target="_blank" href="/users/view/<?= $uid?>" class="show-uname"> (<?php echo $uname; ?>)</a></li>
                        <li><a href="/users/logout" class="logout-btn">Logout</a></li>
                    </ul>
                </div>
        <?php } ?>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
      <div class="container-fluid">
          <p class="copyright"><a href="#" target="_blank">© YumeAgent Vietnam</a> Allrights reversed
      </div>
    </footer>
</body>
</html>

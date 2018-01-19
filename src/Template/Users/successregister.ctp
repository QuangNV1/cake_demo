<!DOCTYPE html>
<html>
  <head>
    <?php
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('style');
    echo $this->Html->css('font-awesome.min');
    ?>
  </head>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.mainContent {
    height: 100%;
    background: #2D3945;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    margin: auto;
    width: 40%;
}
</style>
<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=#headerwrap>YumeAgent</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo $this->Html->link('Home', ['controller'=>'Home', 'action' => 'index']);?></li>
            <li><?php echo $this->Html->link('Login', ['controller'=>'Users', 'action' => 'login']);?></li>
            <li><?php echo $this->Html->link('Sign up', ['controller'=>'Users', 'action' => 'register']);?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</div>

<div class="mainContent">
  <div class="middle">
    <div>
		<p>Thank for your Registration, Please go to <?= $emailUser?> and Active Your Account if you want to use own website :)</p>
	</div>
  </div>
</div>
    <footer>
      <div class="container-fluid">
          <p class="copyright"><a href="#" target="_blank">© YumeAgent Vietnam</a> Allrights reversed
      </div>
    </footer>
</body>
</html>

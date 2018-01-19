<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('style');
    echo $this->Html->css('font-awesome.min');
    ?>
  </head>

  <body>

    <!-- Static navbar -->
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
            <li><a href=#headerwrap>Home</a></li>
            <li><a href=#about>About</a></li>
            <?php if (!isset($uname)) { ?>
            <li><?php echo $this->Html->link('Login', ['controller'=>'Users', 'action' => 'login']);?></li>
            <?php } else { ?>
            <li><?php echo $this->Html->link('My Account', ['controller'=>'Users', 'action' => 'view', $uid]);?></li>
            <?php } ?>
            <li><?php echo $this->Html->link('Sign up', ['controller'=>'Users', 'action' => 'register']);?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<!-- echo $this->Html->image('background.jpg'); -->
  <div id="headerwrap">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h4>Application for demo</h4>
          <h4>After Registion must active account in email then login to this own web</h4>
        </div>
      </div><!--/row -->
      </div> <!-- /container -->
  </div><!--/headerwrap -->

  <section id="about"></section>
  <div class="container">
    <div class="row centered mt mb">
      <h1>About us</h1>
      
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        Yume Agent DevTeam
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
        Bla bla
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 gallery">
       Blo blo
      </div>
    </div>
  </div>

    <footer>
      <div class="container-fluid">
          <p class="copyright"><a href="#" target="_blank">© YumeAgent Vietnam</a> Allrights reversed
      </div>
    </footer>
  
  
  <?php
    echo $this->Html->script('jquery');
    echo $this->Html->script('bootstrap');?>

    <?php echo $uname ?>
  </body>
</html>
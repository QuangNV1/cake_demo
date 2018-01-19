<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style type="text/css">
html, body {
  color: #ccc;
  background: #2D3945;
  font-family: Calibri;
}

.container {
  width: 360px;
  margin: 0 auto;
  margin-top: 100px;
  padding: 5px 20px 0 20px;
  border: 2px solid #ccc;
  border-radius: 7px;
}

.container legend {
  color: #ccc;
  margin: 0 0 0 280px;
  padding: 0;
  letter-spacing: 2px;
}

.wrapper {
  margin: 0 0 20px 0;
}

.hint {
  color: #888;
  margin: 0;
  font-size: 12px;
  text-align: justify;
}

.lbl-tb {
  font-size: 12px;
  text-transform: uppercase;
}

.frm-ctrl {
  color: #eee;
  background: transparent;
  margin: 5px 0;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
  outline: none;
  font-family: Calibri;
}

.tb {
  width: 350px;
  font-size: 19px;
}

.btn {
  width: 360px;
  height: 40px;
  text-transform: uppercase;
  letter-spacing: 2px;
  cursor: pointer;
  transition: all 0.2s
}

.btn:hover {
  color: #2D3945;
  background: #eee;
}

.btn:active {
  border: 1px solid #333;
}
  </style>

  
</head>
<body>
<fieldset class="container">
  <legend><i class="fa fa-empire fa-4x"></i></legend>
  <?php echo $this->Form->create() ?>
    <div class="wrapper">
      <?php echo $this->Form->Label('Username')?>
      <?php echo $this->Form->text('username', ['class' => 'frm-ctrl tb', 'type' => 'text', 'escape' => false]); ?>
      <?php echo $this->Form->Label('Password')?>
      <?php echo $this->Form->text('password', ['class' => 'frm-ctrl tb', 'type' => 'password', 'escape' => false]); ?>
    </div>
    <br>
    <div class="wrapper">
      <?php if (!isset($error)) { ?>
          <div class="alert alert-danger" style="display: none;"></div>
        <?php } else { ?>
          <div class="alert alert-danger" style="color:#F08080">
              <?= $error ?>
          </div>
        <?php } ?>
      <?php echo $this->Form->button(__(' Login '), ['class' => 'frm-ctrl btn' ]); ?>
  </div>
    <?php echo $this->Form->end() ?>    
</fieldset>
</body>
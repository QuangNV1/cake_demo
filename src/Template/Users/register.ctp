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

div.message {
    text-align: center;
    cursor: pointer;
    display: block;
    font-weight: normal;
    padding: 0 1.5rem 0 1.5rem;
    transition: height 300ms ease-out 0s;
    background-color: #a0d3e8;
    color: #626262;
    top: 15px;
    right: 15px;
    z-index: 999;
    overflow: hidden;
    height: 50px;
    line-height: 2.5em;
    box-radius: 5px;
}

div.message:before {
    line-height: 0px;
    font-size: 20px;
    height: 12px;
    width: 12px;
    border-radius: 15px;
    text-align: center;
    vertical-align: middle;
    display: inline-block;
    position: relative;
    left: -11px;
    background-color: #FFF;
    padding: 12px 14px 12px 10px;
    content: "i";
    color: #a0d3e8;
}

div.message.error {
    background-color: #C3232D;
    color: #FFF;
}

div.message.error:before {
    padding: 11px 16px 14px 7px;
    color: #C3232D;
    content: "x";
}
div.message.hidden {
    height: 0;
}
  </style>

  
</head>

<body>
    <?= $this->Flash->render()?>
<fieldset class="container">
  <legend><i class="fa fa-empire fa-4x"></i></legend>
<?php echo $this->Form->create() ?>
    <div class="wrapper">
      <?php echo $this->Form->Label('Username')?>
      <?php echo $this->Form->text('username', ['class' => 'frm-ctrl tb', 'type' => 'text', 'escape' => false]); ?>
      <p class="hint">This name will be your unique identity on the website</p>
      <?php echo $this->Form->Label('Password')?>
      <?php echo $this->Form->text('password', ['class' => 'frm-ctrl tb', 'type' => 'password', 'escape' => false]); ?>
      <p class="hint">Password must have one number and one special character</p>
      <?php echo $this->Form->Label('Confirm Password')?>
      <?php echo $this->Form->text('confirm_password', ['class' => 'frm-ctrl tb', 'type' => 'password', 'escape' => false]); ?>
      <?php echo $this->Form->Label('email')?>
      <?php echo $this->Form->text('email', ['class' => 'frm-ctrl tb', 'escape' => false, 'type' => 'email']); ?>
      <p class="hint">Please input correct email address</p>
    </div>
    <br>
    <div class="wrapper">
      <?php echo $this->Form->button(__(' Singup '), ['class' => 'frm-ctrl btn' ]); ?>
    </div>
<?php echo $this->Form->end() ?>    
</fieldset>

</body>


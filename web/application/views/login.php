<style type="text/css">
  .loginlogo
  {
    width : 50%;
    float : center;
    margin-left: auto;
    margin-right: auto; 
  }
  .loginform
  {
    float : left;
  }
</style>

<div>
<h1>&nbsp;</h1>
</div>

<?php
if (!empty($errors)):
?>
<div class="ui-widget loginerrors">
 <div class="ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
  <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
   <?php echo $errors?>
  </p>
  </div>
</div>

<?php
endif;
?>

<table>
<tr>
<td>
<table>
<tr>
<td style="width:500px; text-align:center">
<div class="page-header">
<h1><?php echo $this->config->item('site_title')?></h1>
</div>
<?php
if (isset($logo)) {
	echo $logo;
}
?>
</td>
<td>
<table style="width:500px">
<tr>
<td style="background-color:white">
Connectez-vous avec vos identifiants :
<div class="loginform ui-corner-all">

  <?php
  echo form_open('login/', array('class' => 'form-horizontal'));
  ?>
<?php

  $user = array(
		  'name' => 'user',
		  'id' => 'login_user',
		  'value' => set_value('user'),
		  'maxlength' => '40',
		  'size' => '15',
		  'class' => 'input-medium',
		  'autofocus' => 'autofocus',
		  );
  echo formelement(
		  $this->i18n->_('labels', 'username'),
		  form_input($user));
  ?>
  <?php
  $password = array(
		  'name' => 'passwd',
		  'id' => 'login_passwd',
		  'value' => '',
		  'maxlength' => '40',
		  'class' => 'input-medium',
		  'size' => '15',
		  );
  echo formelement(
		  $this->i18n->_('labels', 'password'),
		  form_password($password));
  echo form_submit('login', $this->i18n->_('labels', 'login'));
  echo form_close();
 ?>
<u>mot de passe oublié ?</u>&nbsp;&nbsp;&nbsp;&nbsp;<u>créer un compte</u>
</div>
</td>
</tr>
<tr>
<td style="background-color:white">
Ou authentifiez-vous avec France Connect :
<div style="width:500px; float:center;">
<?php
if (isset($logo_fc)) {
        echo $logo_fc;
}
?>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<div style="margin:auto">
<table>
<tr style="background-color:white">
<td>
<?php
if (isset($logo_mairieparis))
       echo $logo_mairieparis;
?>
</td>
<td>
<?php
if (isset($logo_mairielyon))
       echo $logo_mairielyon;
?>
</td>
<td>
<?php
if (isset($logo_mairiemarseille))
       echo $logo_mairiemarseille;
?>
</td>
<td>
<?php
if (isset($logo_pp))
       echo $logo_pp;
?>
</td>
<td>
<?php
if (isset($logo_minint))
       echo $logo_minint;
?>
</td>
</tr>
<tr>
&nbsp;
</tr>
<tr>
<td colspan=5>
<ul>
<li style="float:left; margin-left:300px; margin-right:5px">
<u>Mentions légales</u>
</li>
<li style="float:left; margin-left:18px; margin-right:5px">
<u>FAQ</u>
</li>
<li style="float:left; margin-left:18px; margin-right:5px">
<u>Nous contacter</u>
</li>
<li style="float:left; margin-left:18px; margin-right:5px">
<u>Créer votre appli de rendez-vous !</u>
</li>
</ul>
</td>
</tr>
</table>
</div>
</td>
</tr>
</table>

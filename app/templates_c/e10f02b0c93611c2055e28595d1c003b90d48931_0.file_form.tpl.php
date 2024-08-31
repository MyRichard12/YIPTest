<?php
/* Smarty version 5.4.1, created on 2024-08-31 19:04:59
  from 'file:form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66d35b4b24b942_37732745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e10f02b0c93611c2055e28595d1c003b90d48931' => 
    array (
      0 => 'form.tpl',
      1 => 1725127497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66d35b4b24b942_37732745 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/olamide/YipTest/app/templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('server_url');?>
/app/templates/styles/form.css" />
</head>
<body>

<div class="form-container">
    <h1>Register</h1>
    <form action="<?php echo $_smarty_tpl->getValue('registration_script');?>
" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Register</button>
    </form>

    <?php if ((null !== ($_smarty_tpl->getValue('errors') ?? null))) {?>
        <div class="error-list">
            <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors'), 'error');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('error');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>
</div>

</body>
</html>
<?php }
}

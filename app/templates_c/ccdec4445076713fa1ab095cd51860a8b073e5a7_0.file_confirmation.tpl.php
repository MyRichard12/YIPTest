<?php
/* Smarty version 5.4.1, created on 2024-08-31 19:02:16
  from 'file:confirmation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66d35aa88d7560_41390879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccdec4445076713fa1ab095cd51860a8b073e5a7' => 
    array (
      0 => 'confirmation.tpl',
      1 => 1725127319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66d35aa88d7560_41390879 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/olamide/YipTest/app/templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link type="text/css" rel="stylesheet" href="/app/templates/styles/form.css" />
</head>
<body>

<div class="container">
    <h2 class="success-heading">Registration Successful</h2>
    <p class="thank-you">Thank you, <?php echo mb_strtoupper((string) $_smarty_tpl->getValue('username') ?? '', 'UTF-8');?>
!</p>
    <p class="user-email">Your email: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('email'), ENT_QUOTES, 'UTF-8', true);?>
</p>
    <a href="http://127.0.0.1:5051">Submit another data</a>
</div>
</body>
</html><?php }
}

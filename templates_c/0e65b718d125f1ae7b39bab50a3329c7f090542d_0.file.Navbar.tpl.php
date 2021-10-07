<?php
/* Smarty version 3.1.39, created on 2021-10-08 01:23:58
  from 'C:\xampp\htdocs\Drops\templates\Navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f818e12ccc3_69022411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e65b718d125f1ae7b39bab50a3329c7f090542d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Drops\\templates\\Navbar.tpl',
      1 => 1633649035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f818e12ccc3_69022411 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">
      <img src="./images/dropLogo.png" alt="" width="30" height="24" class="d-inline-block align-text-top bg-light" id="logo">
      DROPS
    </a>
    <div>
   <?php if ((($tmp = @$_smarty_tpl->tpl_vars['logged']->value)===null||$tmp==='' ? false : $tmp)) {?>
     
    <div id="loginBar">
    <p id="loggedUser">Logged In as = <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </p>
    <a href='logout' class="btn btn-outline-light me-2">Logout</a>
    </div>
   
    <?php } else { ?>

    <a href='loginPage' class="btn btn-outline-light me-2">LogIn</a>

    <?php }?>
    </div>

      

  </div>
  
 
</nav>
    <?php }
}

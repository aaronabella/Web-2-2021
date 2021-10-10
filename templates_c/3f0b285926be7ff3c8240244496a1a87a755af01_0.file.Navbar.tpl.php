<?php
/* Smarty version 3.1.39, created on 2021-10-08 01:47:04
  from 'C:\xampp\htdocs\web2\TPE-Beta1\templates\Navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f86f8b3b4f0_05197907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f0b285926be7ff3c8240244496a1a87a755af01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Beta1\\templates\\Navbar.tpl',
      1 => 1633649131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f86f8b3b4f0_05197907 (Smarty_Internal_Template $_smarty_tpl) {
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

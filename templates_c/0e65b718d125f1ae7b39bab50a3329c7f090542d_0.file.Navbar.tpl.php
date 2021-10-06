<?php
/* Smarty version 3.1.39, created on 2021-10-06 21:31:45
  from 'C:\xampp\htdocs\Drops\templates\Navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615df9a1d1fd38_49645928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e65b718d125f1ae7b39bab50a3329c7f090542d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Drops\\templates\\Navbar.tpl',
      1 => 1633548653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615df9a1d1fd38_49645928 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">
      <img src="./images/dropLogo.png" alt="" width="30" height="24" class="d-inline-block align-text-top bg-light" id="logo">
      DROPS
    </a>
    <div>
   <?php if ((($tmp = @$_smarty_tpl->tpl_vars['logged']->value)===null||$tmp==='' ? false : $tmp)) {?>
     
    <form method='POST' action='logout' id="loginForm">
    <p id="loggedUser">Logged In as = <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </p>
    <input type="submit" class="btn btn-outline-light me-2" value='Logout'></button>
    </form>
   
    <?php } else { ?>
      
    <form method='POST' action='loginPage'>
    <input type="submit" class="btn btn-outline-light me-2" value='Login'></button>
    </form>
    <?php }?>
    </div>

      

  </div>
  
 
</nav>
    <?php }
}

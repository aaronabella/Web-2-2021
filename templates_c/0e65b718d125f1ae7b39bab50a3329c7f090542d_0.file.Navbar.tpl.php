<?php
/* Smarty version 3.1.39, created on 2021-09-29 03:43:16
  from 'C:\xampp\htdocs\Drops\templates\Navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6153c4b496cd37_46110061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e65b718d125f1ae7b39bab50a3329c7f090542d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Drops\\templates\\Navbar.tpl',
      1 => 1632879793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6153c4b496cd37_46110061 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">
      <img src="./images/dropLogo.png" alt="" width="30" height="24" class="d-inline-block align-text-top bg-light" id="logo">
      DROPS
    </a>
              <div>
    <form method='POST' action='logout'>
    <p>Logged In as=  </p>
    <input type="submit" class="btn btn-outline-light me-2" value='Logout'></button>
    </form>
    
        <form method='POST' action='loginPage'>
    <input type="submit" class="btn btn-outline-light me-2" value='Login'></button>
    </form>
    </div>

  </div>
  
 
</nav>
    <?php }
}

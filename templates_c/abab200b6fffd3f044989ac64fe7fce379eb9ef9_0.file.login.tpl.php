<?php
/* Smarty version 3.1.39, created on 2021-10-08 01:47:09
  from 'C:\xampp\htdocs\web2\TPE-Beta1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f86fd7c09d0_47541008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abab200b6fffd3f044989ac64fe7fce379eb9ef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Beta1\\templates\\login.tpl',
      1 => 1633033827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/Navbar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615f86fd7c09d0_47541008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/Navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form method='POST' action='login'>
        <input type='text' name='username' placeholder='Username' id='username' required>
        <input type='password' name='password' placeholder='Password' id='password' required>
        <input type='submit' class='btn btn-success' value='Login'>
    </form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

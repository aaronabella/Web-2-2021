<?php
/* Smarty version 3.1.39, created on 2021-09-29 03:44:24
  from 'C:\xampp\htdocs\Drops\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6153c4f82a9507_58991474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca623b5ad64820e3c787379ef313521893ec09a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Drops\\templates\\login.tpl',
      1 => 1632879860,
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
function content_6153c4f82a9507_58991474 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php
/* Smarty version 3.1.39, created on 2021-10-13 05:09:18
  from 'C:\xampp\htdocs\web2\TPE-Beta1\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61664dde20c684_70346523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '601070b627b9ded1edffe622328ff7c2a7848ea7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Beta1\\templates\\product.tpl',
      1 => 1634085475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61664dde20c684_70346523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="prodContainer">
    <h1 class="mb-4"><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->Modelo;?>
</h1>
    <p>Descripcion: <?php echo $_smarty_tpl->tpl_vars['product']->value->Modelo;?>
</p>
    <p>Precio: $ <?php echo $_smarty_tpl->tpl_vars['product']->value->Precio;?>
</p>
    <p>Stock: 
    <?php if ($_smarty_tpl->tpl_vars['product']->value->Stock == 0) {?>
        No disponible
        <?php } else { ?>
            Disponible
    <?php }?></p>

    
</div>
    <a class="btn btn-outline-light" href="home" > Volver </a>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

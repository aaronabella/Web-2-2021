<?php
/* Smarty version 3.1.39, created on 2021-10-13 01:10:56
  from 'C:\xampp\htdocs\Drops\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61661600489a47_81844980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5144a66d7e4078e95e1599127906a9d1216e7cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Drops\\templates\\product.tpl',
      1 => 1634080255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61661600489a47_81844980 (Smarty_Internal_Template $_smarty_tpl) {
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

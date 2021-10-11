<?php
/* Smarty version 3.1.39, created on 2021-10-11 21:11:19
  from 'C:\xampp\htdocs\Drops\templates\DropsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61648c57afd6b9_17918572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e2ffd36884d90dc760d7c4da8cda17d4d213a1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Drops\\templates\\DropsList.tpl',
      1 => 1633979477,
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
function content_61648c57afd6b9_17918572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/Navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((($tmp = @$_smarty_tpl->tpl_vars['logged']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <li class="list-group-item listProduct">
                    <a href="dropProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_zapatilla;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->Marca;?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->Modelo;?>
</a>
                    <a class="btn btn-danger" href="delProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_zapatilla;?>
">Borrar</a> 
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->Stock == 0) {?>
                        <a class="btn btn-warning" href="updateProduct/addStock/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_zapatilla;?>
">Agregar Stock</a>
                    <?php } else { ?>
                        
                    <a class="btn btn-warning" href="updateProduct/delStock/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_zapatilla;?>
">Quitar Stock</a>                    
                    <?php }?> 
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <h2>Agregar producto</h2>
    <form class="prodForm" action="addProduct" method="post">
        <input placeholder="Marca" type="text" name="Marca" id="marca" required>
        <input placeholder="Modelo" type="text" name="Modelo" id="modelo" required>
        <input placeholder="Estilo" type="text" name="Estilo" id="estilo" required> 
        <input placeholder="Precio" type="number" name="Precio" id="precio" required>
        <p id="prodStock">Stock= <input type="checkbox" name="stock" id="stock"></p>
        <input type="submit" class="btn btn-primary" value="Agregar">
    </form>


 
   
    <?php } else { ?>
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <li class="list-group-item listProduct">
                    <a href="dropsProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_zapatilla;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->Marca;?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->Modelo;?>
</a>                          
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
   
    
    <?php }?>





<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

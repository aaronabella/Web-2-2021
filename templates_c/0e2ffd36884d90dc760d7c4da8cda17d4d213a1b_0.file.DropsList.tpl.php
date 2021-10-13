<?php
/* Smarty version 3.1.39, created on 2021-10-13 22:11:25
  from 'C:\xampp\htdocs\Drops\templates\DropsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61673d6db79fa0_33934840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e2ffd36884d90dc760d7c4da8cda17d4d213a1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Drops\\templates\\DropsList.tpl',
      1 => 1634155883,
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
function content_61673d6db79fa0_33934840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/Navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul id="filterCont">
    <li class="list-group-item listProduct">
    <a href="home">Todo</a>
    </li>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
    <li class="list-group-item listProduct">
    <a href="homeFilter/<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->Nombre;?>
</a>
    </li>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['logged']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <li class="list-group-item listProduct">
                    <a href="dropProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_zapatilla;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
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
    
        <select name="Marca" required>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->Nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    
        <input placeholder="Modelo" type="text" name="Modelo" id="modelo" required>
        <input placeholder="Precio" type="number" name="Precio" id="precio" required>
        <p id="prodStock">Stock= <input type="checkbox" name="stock" id="stock"></p>
        <input type="submit" class="btn btn-primary" value="Agregar">
    </form>

<div id="marcaCont">
    <div>
        <h3>Agregar Marca</h3>
        <form class="marcaForm" action="addMarca" method="post">
            <input placeholder="Ingrese nueva Marca" type="text" name="nuevaMarca" id="nuevaMarca" required>
            <input type="submit" class="btn btn-primary" value="Agregar">
        </form>
    </div>
    <div>
        <h3>Borrar Marca</h3>
        <p class="warning"> AL BORRAR UNA MARCA; SE ELIMINARAN TODOS LOS PRODUCTOS RELACIONADOS</p> 
        <form class="marcaForm" action="delMarca" method="post">
            <select name="marcaDel" required>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->Nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
     
            <input type="submit" class="btn btn-primary" value="Eliminar">
        </form>
    </div>
    <div>
        <h3>Editar Marca</h3>
        <form class="marcaForm" action="editMarca" method="post">
            <select name="marcaUpdate" required>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value->Nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="text" name="newName" placeholder="Nuevo Nombre">
     
            <input type="submit" class="btn btn-primary" value="Editar">
        </form>
    </div>
<div>


 
   
    <?php } else { ?>
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <li class="list-group-item listProduct">
                    <a href="dropProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_zapatilla;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
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

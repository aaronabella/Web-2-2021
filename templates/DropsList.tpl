{include file='templates/header.tpl'}
{include file='templates/Navbar.tpl'}

<ul id="filterCont">
    <li class="list-group-item listProduct">
    <a href="home">Todo</a>
    </li>
{foreach from=$marcas item=$marca}
    <li class="list-group-item listProduct">
    <a href="homeFilter/{$marca->id_marca}">{$marca->Nombre}</a>
    </li>
    
{/foreach}
</ul>

{if $logged|default:false }
    <ul class="list-group">
            {foreach from=$products item=$product}
                <li class="list-group-item listProduct">
                    <a href="dropProduct/{$product->id_zapatilla}">{$product->marca} {$product->Modelo}</a>
                    <a class="btn btn-danger" href="delProduct/{$product->id_zapatilla}">Borrar</a> 
                    {if $product->Stock==0}
                        <a class="btn btn-warning" href="updateProduct/addStock/{$product->id_zapatilla}">Agregar Stock</a>
                    {else}
                        
                    <a class="btn btn-warning" href="updateProduct/delStock/{$product->id_zapatilla}">Quitar Stock</a>                    
                    {/if} 
                </li>
            {/foreach}
    </ul>

    <h2>Agregar producto</h2>
    <form class="prodForm" action="addProduct" method="post">
    
        <select name="Marca" required>
            {foreach from=$marcas item=$marca}
            <option value="{$marca->id_marca}">{$marca->Nombre}</option>
            {/foreach}
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
                {foreach from=$marcas item=$marca}
                <option value="{$marca->id_marca}">{$marca->Nombre}</option>
                {/foreach}
            </select>
     
            <input type="submit" class="btn btn-primary" value="Eliminar">
        </form>
    </div>
    <div>
        <h3>Editar Marca</h3>
        <form class="marcaForm" action="editMarca" method="post">
            <select name="marcaUpdate" required>
                {foreach from=$marcas item=$marca}
                <option value="{$marca->id_marca}">{$marca->Nombre}</option>
                {/foreach}
            </select>
            <input type="text" name="newName" placeholder="Nuevo Nombre">
     
            <input type="submit" class="btn btn-primary" value="Editar">
        </form>
    </div>
<div>


 
   
    {else}
      <ul class="list-group">
            {foreach from=$products item=$product}
                <li class="list-group-item listProduct">
                    <a href="dropProduct/{$product->id_zapatilla}">{$product->marca} {$product->Modelo}</a>                          
                </li>
            {/foreach}
    </ul>
   
    
    {/if}





{include file='templates/footer.tpl'}
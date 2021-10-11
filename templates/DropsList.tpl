{include file='templates/header.tpl'}
{include file='templates/Navbar.tpl'}
<form action="home" method="post">
    <select name="marcaFilter" required>
            <option value="all">TODO</option>
            {foreach from=$marcas item=$marca}
            <option value="{$marca->id_marca}">{$marca->Nombre}</option>
            {/foreach}
    </select>
    <input type="submit" class="btn btn-primary" value="filtrar">

</form>

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


 
   
    {else}
      <ul class="list-group">
            {foreach from=$products item=$product}
                <li class="list-group-item listProduct">
                    <a href="dropsProduct/{$product->id_zapatilla}">{$product->Marca} {$product->Modelo}</a>                          
                </li>
            {/foreach}
    </ul>
   
    
    {/if}





{include file='templates/footer.tpl'}
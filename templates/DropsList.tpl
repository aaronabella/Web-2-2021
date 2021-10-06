{include file='templates/header.tpl'}
{include file='templates/Navbar.tpl'}

{if $logged|default:false }
    <ul class="list-group">
            {foreach from=$products item=$product}
                <li class="list-group-item">
                    <a href="dropsProduct/{$product->id_zapatilla}">{$product->Marca} {$product->Modelo}</a>
                    <a class="btn btn-danger" href="delProduct/{$product->id_zapatilla}">Borrar</a>  
                    <a class="btn btn-warning" href="updateProduct/{$product->id_zapatilla}">Editar</a>                    
                </li>
            {/foreach}
    </ul>

    <h2>Agregar producto</h2>
    <form class="" action="addProduct" method="post">
        <input placeholder="Marca" type="text" name="Marca" id="marca" required>
        <input placeholder="Modelo" type="text" name="Modelo" id="modelo" required>
        <input placeholder="Estilo" type="text" name="Estilo" id="estilo" required> 
        <input placeholder="Precio" type="number" name="Precio" id="precio" required>
        <input type="submit" class="btn btn-primary" value="Agregar">
    </form>


 
   
    {else}
      <ul class="list-group">
            {foreach from=$products item=$product}
                <li class="list-group-item">
                    <a href="dropsProduct/{$product->id_zapatilla}">{$product->Marca} {$product->Modelo}</a>                          
                </li>
            {/foreach}
    </ul>
   
    
    {/if}






{include file='templates/footer.tpl'}
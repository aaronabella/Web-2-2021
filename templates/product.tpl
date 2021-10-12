{include file='templates/header.tpl'}

<div class="prodContainer">
    <h1 class="mb-4">{$product->marca} {$product->Modelo}</h1>
    <p>Descripcion: {$product->Modelo}</p>
    <p>Precio: $ {$product->Precio}</p>
    <p>Stock: 
    {if $product->Stock==0}
        No disponible
        {else}
            Disponible
    {/if}</p>

    
</div>
    <a class="btn btn-outline-light" href="home" > Volver </a>
{include file='templates/footer.tpl'}

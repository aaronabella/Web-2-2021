{include file='templates/header.tpl'}

<div class="container">
    <h1 class="mb-4">{$product->marca} {$product->Modelo}</h1>
    <h2>Descripcion: {$product->Modelo}</h2>
    <h2>Finalizada: {$product->Precio}</h2>
    <h2>Stock: 
    {if $product->Stock==0}
        No disponible
        {else}
            Disponible
    {/if}</h2>

    <a class="btn btn-outline-light" href="home" > Volver </a>
</div>

{include file='templates/footer.tpl'}

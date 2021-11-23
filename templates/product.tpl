{include file='templates/header.tpl'}

<div class="prodContainer">
    <h1 class="mb-4">{$sneaker->marca} {$sneaker->Modelo}</h1>
    <p>Descripcion: {$sneaker->Modelo}</p>
    <p>Precio: $ {$sneaker->Precio}</p>
    <p>Stock: 
    {if $sneaker->Stock==0}
        No disponible
        {else}
            Disponible
    {/if}</p>

    
</div>
    <a class="btn btn-outline-light" href="home" > Volver </a>
    {if $prevProduct}
        <a class="btn btn-outline-light" href="dropProduct/{$prevProduct->id_zapatilla}" > Item Anterior </a>
    {/if}
    {if $nextProduct}
        <a class="btn btn-outline-light" href="dropProduct/{$nextProduct->id_zapatilla}" > Item Siguiente </a>
    {/if}
    
{include file='templates/footer.tpl'}

{include file='templates/header.tpl'}
{include file='templates/Navbar.tpl'}

<div class="prodContainer" >
    <h1 class="mb-4">{$sneaker->marca} {$sneaker->Modelo}</h1>
    <p>Descripcion: {$sneaker->Modelo}</p>
    <p>Precio: $ {$sneaker->Precio}</p>
    <p>Stock: 
    {if $sneaker->Stock==0}
        No disponible
        {else}
            Disponible
    {/if}
    </p>
    {if $sneaker->imagen}
        <img src="{$sneaker->imagen}" class="sneakerImg"/>
    {/if}

    
</div>
    {if !$sneaker->imagen}
        <form action="uploadImage/{$sneaker->id_zapatilla}" method="POST" enctype="multipart/form-data" class="fileCont">
        <input type="file" name="input_name" id="imageToUpload">
        <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    {/if}
    
    

    
    {if $prevProduct}
        <a class="btn btn-outline-light" href="dropProduct/{$prevProduct->id_zapatilla}" > Item Anterior </a>
    {/if}
    <a class="btn btn-outline-light" href="home" > Volver </a>
    {if $nextProduct}
        <a class="btn btn-outline-light" href="dropProduct/{$nextProduct->id_zapatilla}" > Item Siguiente </a>
    {/if}


{include file='templates/addcomment.tpl'}   
{include file='templates/comentarios.tpl'}
{include file='templates/footer.tpl'}

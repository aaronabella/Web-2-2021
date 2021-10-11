{include file='templates/header.tpl'}

<div class="container">
    <h1 class="mb-4">{$product->Marca} {$product->Modelo}</h1>
    <h2>Descripcion: {$product->Modelo}</h2>
    <h2>Prioridad: {$product->Estilo}</h2>
    <h2>Finalizada: {$product->Precio}</h2>
    <h2>anashe: {$product->Stock}</h2>

    <a class="btn btn-outline-light" href="home" > Volver </a>
</div>

{include file='templates/footer.tpl'}

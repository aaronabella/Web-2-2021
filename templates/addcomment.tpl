<h2>Agregue un comentario</h2>

<form class="commentForm" action="api/comentarios" id="dataZapatilla" data-id_zapatilla="{$sneaker->id_zapatilla}" data-rol="{$admin}" data-id_usuario="{$usuario}" method="POST">
    
    <select name="puntuacion" id="puntuacion" required>
        <option value="1">1
        <option value="2">2
        <option value="3">3
        <option value="4">4
        <option value="5">5
    </select>
    <input placeholder="Comente" type="text" name="descripcion" id="comentario" required>
    <input type="submit" class="btn btn-primary" id="enviarComentario" value="Agregar">
</form>

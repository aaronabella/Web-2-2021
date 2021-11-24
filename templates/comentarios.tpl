    <form>  
        <h2>Agregue un comentario</h2>
        <form class="commentForm" action="addComment" method="post">
    
        <select name="Comment" required>
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
        </select>
        <input placeholder="Comente" type="text" name="comentario" id="comentario" required>
        <input type="submit" class="btn btn-primary" value="Agregar">
    </form>
        
        
        
        
        
        
        <h1>Comentarios</h1>
        <table class="table" id="app-table">
            <thead>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Puntuacion</th>
            
            </thead>
            <tr>
               {foreach from=$comentarios item=$comentario}
               <td>{$comentario->id_user}</td>
               <td>{$comentario->descripcion}</td>
               <td>{$comentario->puntuacion}</td>
               {/foreach}
               </tr>

        </table>

        <h1>Comentarios</h1>
        <table class="table" id="id-table">
            <thead>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Puntuacion</th>
            
            </thead>
            <tr v-for="comentario in comentarios">
               <td>{{comentario->id_user}}</td>
               <td>{{comentario->descripcion}}</td>
               <td>{{comentario->puntuacion}}</td>
               </tr>

        </table>













<script src="js/script.js"></script>
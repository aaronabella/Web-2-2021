{if $admin|default:false}
    {literal}
    <div id="app">

        <h2>Comentarios (<span v-if="comentarios.length">{{ comentarios.length }}</span>)
        
        <ul id="lista-comentarios" class="list-group listComments">
            <li v-for="comentario in comentarios" class="list-group-item comment">
                <p>Usuario: {{comentario.usuario}}
                </p>
                <div class="comentarioTexto">{{comentario.descripcion}}</div>
                <p>{{comentario.puntuacion}}</p>

                
                   <input class="botonEliminar" id="eliminarComentario" type="button"
                :data-id_comentario="comentario.id_comentario" value="borrar">        
            </li>
        </ul>
    </div>
{/literal}
{else}
{literal}
    <div id="app">

        <h2>Comentarios (<span v-if="comentarios.length">{{ comentarios.length }}</span>)
        
        <ul id="lista-comentarios" class="list-group listComments">
            <li v-for="comentario in comentarios" class="list-group-item comment">
                <p>Usuario: {{comentario.usuario}}
                </p>
                <div class="comentarioTexto">{{comentario.descripcion}}</div>
                <p>{{comentario.puntuacion}}</p>
                
            </li>
        </ul>
    </div>
    
{/literal}
{/if}
        










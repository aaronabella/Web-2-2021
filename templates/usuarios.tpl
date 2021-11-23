{include file='templates/header.tpl'}
{include file='templates/Navbar.tpl'}

<ul class="list-group">
            {foreach from=$usuarios item=$usuario}
            {if $usuario->id_user!=$userID}
                <li class="list-group-item">
                    {$usuario->username} 
                    <a class="btn btn-danger" href="deleteUser/{$usuario->id_user}">Eliminar Usuario</a>
                    {if $usuario->admin_user==1}
                        <a class="btn btn-warning" href="updateUser/takeAdmin/{$usuario->id_user}">Quitar Admin</a>
                    {else}
                        <a class="btn btn-warning" href="updateUser/giveAdmin/{$usuario->id_user}">Dar Admin</a>  
                    {/if}                         
                </li>
            {/if}
                
            {/foreach}
        </ul>

{include file='templates/footer.tpl'}
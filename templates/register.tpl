{include file='templates/header.tpl'}
{include file='templates/Navbar.tpl'}

    <h1>Crear una Cuenta</h1>
    <form action="register" method="post">
        <input type='text' name='username' placeholder='Username' id='username' required>
        <input type='password' name='password' placeholder='Password' id='password' required>
        <input type='submit' class='btn btn-success' value='Crear'>
    </form>


{include file='templates/footer.tpl'}
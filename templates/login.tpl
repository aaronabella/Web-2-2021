{include file='templates/header.tpl'}
{include file='templates/Navbar.tpl'}

    <form method='POST' action='login'>
        <input type='text' name='username' placeholder='Username' id='username' required>
        <input type='password' name='password' placeholder='Password' id='password' required>
        <input type='submit' class='btn btn-success' value='Login'>
    </form>

{include file='templates/footer.tpl'}
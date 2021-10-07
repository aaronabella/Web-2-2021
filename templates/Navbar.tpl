<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">
      <img src="./images/dropLogo.png" alt="" width="30" height="24" class="d-inline-block align-text-top bg-light" id="logo">
      DROPS
    </a>
    <div>
   {if $logged|default:false }
     
    <div id="loginBar">
    <p id="loggedUser">Logged In as = {$username} </p>
    <a href='logout' class="btn btn-outline-light me-2">Logout</a>
    </div>
   
    {else}

    <a href='loginPage' class="btn btn-outline-light me-2">LogIn</a>

    {/if}
    </div>

      

  </div>
  
 
</nav>
    
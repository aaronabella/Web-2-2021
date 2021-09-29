<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">
      <img src="./images/dropLogo.png" alt="" width="30" height="24" class="d-inline-block align-text-top bg-light" id="logo">
      DROPS
    </a>
      {*if(isset($_SESSION["logueado"]) && $_SESSION["logueado"] === true)
        <form method='POST' action='logout'>
          <p>Logged In as= {$user->username} </p>
          <input type="submit" class="btn btn-outline-light me-2" value='Logout'></button>
        </form>
  
   else
      <form method='POST' action='loginPage'>
        <input type="submit" class="btn btn-outline-light me-2" value='Login'></button>
      </form>
   *}
    {*LogOut*}
    <div>
    <form method='POST' action='logout'>
    <p>Logged In as= {*$user->username*} </p>
    <input type="submit" class="btn btn-outline-light me-2" value='Logout'></button>
    </form>
    
    {*LogIn*}
    <form method='POST' action='loginPage'>
    <input type="submit" class="btn btn-outline-light me-2" value='Login'></button>
    </form>
    </div>

  </div>
  
 
</nav>
    
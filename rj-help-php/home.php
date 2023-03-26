<?php 

    require_once "validate_auth.php";
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>RJ Help</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">

  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        RJ Help
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">
      
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="open_call.php">
                    <img src="open-call.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="search_calls.php">
                    <img src="search-call.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>


    </div>
  </body>
</html>
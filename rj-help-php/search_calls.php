<?php 

    require_once "validate_auth.php";
?>

<?php
    $calls = []; 
    $file = fopen("file.hd", "r"); 

    while(!feof($file)){ 
       $register = fgets($file);
       $calls[] = $register;
    }

    fclose($file);
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

        <div class="card-search-call">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php foreach ($calls as $key => $call) { ?>

                <?php 

                    $call_data = explode("#", $call);
   
                    if(count($call_data) < 4){ 
                        break;
                    }
                    
                  ?>
                
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?= $call_data[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $call_data[2]?></h6>
                    <p class="card-text"><?= $call_data[3]?></p>
                  </div>
                </div>

              <?php } ?>  
 

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
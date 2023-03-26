<?php
  require_once "validate_auth.php";
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>RJ Help</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
        <?php

        if ($_SESSION["admin"] == true) {
          echo '<div class="card-open-call">
                  <div class="card">
                    <div class="card-header">
                      Abertura de chamado
                    </div>
                    <div class="card-body">
                      <div class="row"> 
                      <div class="col">    
                        <form method="post" action="register_call.php">
                          <div class="form-group">
                            <label>Título</label>
                            <input name="title" type="text" class="form-control" placeholder="Título">
                          </div>
                          <div class="form-group">
                            <label>Categoria</label>
                            <select name="category" class="form-control">
                              <option>Criação Usuário</option>
                              <option>Impressora</option>
                              <option>Hardware</option>
                              <option>Software</option>
                              <option>Rede</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Descrição</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                          </div>

                          <div class="row mt-5">
                            <div class="col-6">
                              <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                            </div>                                    
                            <div class="col-6">
                              <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>';
        } else {
          echo '<div class="container-fluid d-flex flex-column justify-content-center mt-4">
                    <div class="alert alert-danger d-flex justify-content-center" role="alert">
                      <p>Você não tem permissão para abrir chamados, apenas vizualizá-los!</p>
                    </div>

                  <div class="col-3">
                      <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                  </div>     
                </div>';
        }
        ?>
        </div>
      </div>
    </div>
  </body>
</html>

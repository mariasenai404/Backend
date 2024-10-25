<?php
require_once("login.php");

$chamados = [];

$arquivo = fopen('../../app_help_desk/registro.txt','r');
//feof END OF FILE

while (!feof($arquivo)){
  //fgets($arquivo)
  $registro = fgets($arquivo);
  $chamados [] = $registro;
}

fclose ($arquivo);

// echo '<pre>';
// print_r ($chamados);
// echo '</pre>';
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#" onclick="location.href='index.php'" type="button">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <button onclick="location.href='logoff.php'" style="background-color:red; border-color:red; color:white; border-radius: 10px" type="button">Sair</button>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

            <?php
            foreach($chamados as $chamado){

            //explode('#',$chamado)
            $chamados_dados = explode('#',$chamado);

            if(count($chamados_dados) < 3){
              continue;
            }
            
            // echo '<pre>';
            // print_r ($chamados_dados);
            // echo '</pre>';
            
            ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chamados_dados[0]; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamados_dados[1]; ?></h6>
                  <p class="card-text"><?php echo $chamados_dados[2]; ?></p>

                </div>
              </div>
              <?php } ?>
              <div class="row mt-5">
                <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
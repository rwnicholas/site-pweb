<?php

  session_start();
  $user=(string)$_SESSION['usuario'];

  $arquivo=file("historico.json");
  $arquivo = implode($arquivo);
  $arquivo = json_decode($arquivo,TRUE);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Histórico</title>

    <link rel="stylesheet" href="css/transicao/keyframes.css">
    <link rel="stylesheet" href="css/transicao/animation.scss">
  </head>
  <body>
    <?php include 'supmenu.php' ?>

    <div class="container">
      <h4> Histórico de envios </h4>

      <div class="m-right-panel m-page scene_element scene_element--fadeinright">
      <ul class="collapsible popout" data-collapsible="accordion">

        <?php
          $vazio = True;
          if(array_key_exists($user,$arquivo)){
            if($arquivo[$user]!=Null){
              $vazio=False;
              for($i=0;$i<count($arquivo[$user]);$i++){

                $dia = $arquivo[$user][$i]['data'];
                $hora = $arquivo[$user][$i]['hora'];
                $msg = $arquivo[$user][$i]['mensagem'];
                $dest = $arquivo[$user][$i]['destinatario'];
                $titulo = $arquivo[$user][$i]['titulo'];



        ?>

        <li>
          <div class="collapsible-header" style="display: block">
            <i class="material-icons left">email</i>
            <div class="secondary-content"><?=$dia." às ". $hora?></div>
            <h5 style="display: inline"><?= $titulo ?></h5> <br>
            <?="To: ".$dest?>


          </div>

          <div class="collapsible-body">
            <span><?=$msg?></span>
          </div>
        </li>


      <?php }
          }
        }
        if($vazio){
          echo "O usuario $user ainda não enviou email's";
        }
       ?>

      </ul>
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="corretor.php">
          <i class="material-icons">create</i>
        </a>
      </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.collapsible').collapsible();
      });

    </script>

  </body>
</html>

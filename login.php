<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Autenticação</title>
  </head>
  <body>
    <?php

      $senha["admin"] = "admin";
      $senha["nick"] = "123";
      $senha["wolf"] = "abc";

      $pessoas[0]['login'] = "admin";
      $pessoas[1]['login'] = "nick";
      $pessoas[2]['login'] = "wolf";

      session_start();

      if(isset($_POST["login"]) && isset($_POST["senha"])) {
        $login = $_POST["login"];
        $pass = $_POST["senha"];
        if ($senha[$login] == $pass) {
          $_SESSION["logado"] = TRUE;
          header('location: corretor.php');
          exit();
        }else {
          echo "<script>alert('Senha ou login incorreto(s)!'); window.location = 'index.php'</script>";
        }
      }else {
        echo "<script>alert('Dados incompletos!'); window.location = 'index.php'</script>";
      exit();
      }

    ?>
  </body>
</html>

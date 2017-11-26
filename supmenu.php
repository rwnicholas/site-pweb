<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
  </head>
  <body>
    <header>
      <?php
        include 'materialize.php';
       ?>

      <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo">
            <img src="images/send.png" alt="">
            Edi<span class="orange-text text-lighten-1">Top</span>
          </a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Página Inicial</a></li>
            <li><a href="corretor.php">Corretor</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <li><a href="index.php">Página Inicial</a></li>
            <li><a href="corretor.php">Corretor</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav

    </header>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Cloud Camp</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/main.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Fractal Land</a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a href="index.php">Fractale</a>
        </li>
        <li>
          <a href="calculatrice.html">Calcula'Thor</a>
        </li>
      </ul>

    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>

      <form class="col s12" action="#" method="post">
        <div class="center-things">
          <div class="row">
            <div class="input-field col s6">
              <input id="input_text" type="text" name="iteration" class="bidon">
              <label for="input_text">Entrez le nombre d'itérations pour votre fractale</label>
              <center><input class="btn" type="button" id="btn-send" value="Envoyer"></center>
            </div>
          </div>
        </div>
      </form>

      <!--<div class="row">
        <div class="graph" id="graph">
        </div>
      </div>-->

    </div>
  </div>

  <?php


  $x = 800;
  $y = 700;

  $gd = imagecreatetruecolor($x, $y);
  $blue = imagecolorallocate($gd, 41, 181, 247);
  $red = imagecolorallocate($gd, 255, 255, 255);
  for ($i = 0; $i < $x; $i++) { 
    for ($j = 0; $j < $y ; $j++) {
      if ($tab[$i][$j] == 0) 
        imagesetpixel($gd, $i, $j, $blue);
      else 
        imagesetpixel($gd, $i, $j, $red);
    }
  }

  header('Content-Type: image/png');
  imagepng($gd, "fractale.png");
  echo '<center><img src="fractale.png" /></center>';

  ?>

  <footer class="page-footer light-blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Fractal Land</h5>
          <p class="grey-text text-lighten-4">Générateur de fractales simples.</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Copyright 2016 © Fractal Land
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <!-- <script type="text/javascript">
    $("#btn-send").click(function() {
      var iteration = $(".bidon").val();
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          console.log(xhttp.responseText);
        }
      };
      xhttp.open("POST", , true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.setRequestHeader("accesskey", "AKIAJ335NJBMVH4HYBPQ");
      xhttp.setRequestHeader("secretkey", "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");
      xhttp.send("n=" + iteration);
    });
  </script>-->
</body>
</html>
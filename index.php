<!DOCTYPE html>
<html lang="pl">  
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Przeładowywanie strony za pomocą AJAX oraz PHP - www.rynko.pl</title>
  <meta name="Description" content="Strona bez przeładowywania się w PHP i Ajax - Dominik Ryńko" >
  <meta name="author" content="Dominik Ryńko - www.rynko.pl">
 </head>
<body>
 <h1>Strona bez przeładowywania się w PHP i Ajax</h1>

 <nav id="menu">
  <ul>
   <li><a href="strona-glowna">Home</a></li>
   <li><a href="o-nas">O nas</a></li>
   <li><a href="portfolio">Portfolio</a></li>
   <li><a href="kontakt">Kontakt</a></li>
  </ul>
 </nav>

  <a href="http://www.rynko.pl/strona-bez-przeladowywania-sie-w-php-i-ajax" title="Dominik Ryńko - blog webmastera" style="position:relative;top:100px;left:-70px;">Powróc do artykułu</a>
  <div id="content">
  <?php
   $path = strip_tags($_SERVER['SCRIPT_FILENAME'].$_SERVER['PHP_SELF']);

   if (basename($path) == 'index.php') {
       if (!file_exists('includes.php')) {
           echo '<p>Plik includes.php nie istnieje!</p>';
       } else {
           require 'includes.php';
       }
   }
  ?>
  </div>
  
  <script src="js/jquery.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
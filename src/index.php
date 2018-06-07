<?php
    require_once 'template/partials/header.php';
?>
<header>
    <h1>Strona bez przeładowywania się w PHP i AJAX</h1>
    <hr class="hr">
</header>

<section class="container-left">
<?php
    require_once 'template/partials/menu.php';
?>
</section>

<section class="container-right">
    <div id="result">
    <?php
    $path = strip_tags($_SERVER['SCRIPT_FILENAME'] . $_SERVER['PHP_SELF']);

    if (basename($path) === 'index.php') {
        if (file_exists('includes.php') === false) {
            echo '<p>Plik includes.php nie istnieje!</p>';
        } else {
            require 'includes.php';
        }
    }
    ?>
    </div>
</section>
  
<?php
    require_once 'template/partials/footer.php';
?>
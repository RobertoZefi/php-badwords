<?php

$par = $_GET ['par'];
$cens = $_GET ['cens']

?>

<h1>Paragrafo: <?php echo $par ?></h1>
<h2>Lunghezza paragrafo: <?php echo strlen($par) ?> </h2>

<?php

$new_par = str_replace($cens, "***", $par);

?>

<h2>Paragrafo con parola censurata: <?php echo $new_par ?></h2>
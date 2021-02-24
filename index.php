<?php

include('PDF2Text.php');
$a = new PDF2Text();
$a->setFilename('NAME.pdf');
$a->decodePDF();
echo $a->output();

?>
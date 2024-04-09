<?php
//first try
echo 'ciao ciao';
echo '<br>';


echo '1) stampa la data di oggi <br>';
// Impostare il fuso orario:
date_default_timezone_set('Europe/Rome');

// Ottenere la data di oggi
$dataOggi = date('d/m/Y');

// Stampare la data di oggi
echo "La data di oggi è: $dataOggi";



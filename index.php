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


// Impostare il fuso orario su "Europe/Rome" per ottenere la data italiana
date_default_timezone_set('Europe/Rome');

// Array per convertire il nome del giorno e del mese in italiano
$giorniSettimana = [
    'Sunday' => 'Domenica',
    'Monday' => 'Lunedì',
    'Tuesday' => 'Martedì',
    'Wednesday' => 'Mercoledì',
    'Thursday' => 'Giovedì',
    'Friday' => 'Venerdì',
    'Saturday' => 'Sabato'
];

$mesiItaliani = [
    'January' => 'gennaio',
    'February' => 'febbraio',
    'March' => 'marzo',
    'April' => 'aprile',
    'May' => 'maggio',
    'June' => 'giugno',
    'July' => 'luglio',
    'August' => 'agosto',
    'September' => 'settembre',
    'October' => 'ottobre',
    'November' => 'novembre',
    'December' => 'dicembre'
];

// Ottenere la data di oggi con il nome del giorno e del mese in italiano
$oggi = date('l, j F Y');
$oggiItaliano = strtr($oggi, $giorniSettimana);
$oggiItaliano = strtr($oggiItaliano, $mesiItaliani);

// Stampare la data di oggi in italiano
echo "Oggi è: $oggiItaliano";



echo '<br> <br>';


echo '2) Squadre di calcio <br>';

// Array delle squadre di Serie A e delle relative formazioni
$squadreSerieA = [
    "Juventus" => array("Buffon", "Chiellini", "Bonucci", "De Ligt", "Cuadrado", "Chiesa", "Arthur", "Rabiot", "Bentancur", "Dybala", "Ronaldo"),
    "Inter" => array("Handanovic", "Skriniar", "De Vrij", "Bastoni", "Hakimi", "Brozovic", "Barella", "Perisic", "Eriksen", "Lautaro", "Martinez"),
    "Milan" => array("Donnarumma", "Calabria", "Kjaer", "Tomori", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Rebic", "Ibrahimovic"),
];

// Stampare i dati utilizzando cicli
foreach ($squadreSerieA as $squadra => $formazione) {
    echo "<br> Squadra: $squadra <br>";
    echo "Formazione:";
    foreach ($formazione as $giocatore) {
        echo "- $giocatore";
    }
    echo "<br>";
}


echo '<br> <br>';
echo '3) Partite e squadre e gironi infernali <br>';

// Array delle partite e delle squadre con relative formazioni
$partiteSerieA = [
    [
        "squadra_casa" => "Juventus",
        "formazione_casa" => array("Buffon", "Chiellini", "Bonucci", "De Ligt", "Cuadrado", "Chiesa", "Arthur", "Rabiot", "Bentancur", "Dybala", "Ronaldo"),
        "squadra_ospite" => "Inter",
        "formazione_ospite" => array("Handanovic", "Skriniar", "De Vrij", "Bastoni", "Hakimi", "Brozovic", "Barella", "Perisic", "Eriksen", "Lautaro", "Martinez")
    ],
    [
        "squadra_casa" => "Milan",
        "formazione_casa" => array("Donnarumma", "Calabria", "Kjaer", "Tomori", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Rebic", "Ibrahimovic"),
        "squadra_ospite" => "Roma",
        "formazione_ospite" => array("Pau Lopez", "Karsdorp", "Mancini", "Ibanez", "Spinazzola", "Veretout", "Diawara", "Pellegrini", "Mkhitaryan", "Dzeko", "Mancini")
    ],
];

// Stampare i dati utilizzando cicli
foreach ($partiteSerieA as $partita) {
    echo "Squadra di casa: {$partita['squadra_casa']} <br>";
    echo "Formazione di casa: <br>";
    foreach ($partita['formazione_casa'] as $giocatore_casa) {
        echo "- $giocatore_casa";
    }
    echo "<br>";

    echo "Squadra ospite: {$partita['squadra_ospite']} <br>";
    echo "Formazione ospite: <br>";
    foreach ($partita['formazione_ospite'] as $giocatore_ospite) {
        echo "- $giocatore_ospite";
    }
    echo "<br><br>";
}


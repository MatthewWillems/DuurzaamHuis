<?php

// Zet de toegangsgegevens tot de database in variabelen
$server     = 'localhost';
$database   = 'energie';
$table      = 'standen';
$name       = 'root';
$pwd        = '';

// MAAK een lege array aan, in deze array komen later de resultaten te staan.
$stand = array();

// MAAK een connectie met de database
$connect = mysqli_connect($server, $name, $pwd, $database);

// CHECK of er een connectie gemaakt wordt en zo niet geef de foutmelding
if (mysqli_connect_errno()) {
    throw new Exception("Connect error: " . mysqli_connect_error());
}

// ZET de query klaar in een variabele
$sql = "SELECT id, datum, item, stand FROM standen";

// VOER de query uit met de gelegde verbinding en de query variabele
$result = mysqli_query($connect, $sql);

// CHECK of er een resultaat is zoniet geef de fout weer
if ($result == null) {
    throw new Exception("Er zijn geen resultaten opgehaald");
}

// Stop alle resultaten in een associatieve array
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['datum'];
    echo ": ";
    echo $row['stand'];
    echo "<br>";
}

// OPRUIMEN query resultaten
mysqli_free_result($result);

// SLUIT de verbinding met de database
mysqli_close($connect);


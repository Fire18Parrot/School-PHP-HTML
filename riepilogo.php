<html>
<head>
<title>
Riepilogo Modulo Iscrizione
</title>
</head>
<body>
<center>
<h2 style="text-align:center;">Conferma Dati</h2>

<?php
    // Ricezione tramite GET
    $utente = $_GET["utente"];
    $chiave = $_GET["chiave"];
    $anno   = $_GET["anno"];
    $posta  = $_GET["posta"];
    $colore = $_GET["colore"];

    echo "VALORE RICEVUTO: <i>$utente</i><br>";
    echo "VALORE RICEVUTO: <i>$chiave</i><br>";
    echo "VALORE RICEVUTO: <i>$anno</i><br>";
    echo "VALORE RICEVUTO: <i>$posta</i><br>";
    echo "VALORE RICEVUTO: <i>$colore</i><br>";
?>

<br><br>

<a href="iscrizione.php">Torna al Modulo</a>
</center>
</body>
</html>

<html>
<head>
<title>
Form 26 11 2025
</title>
</head>
<body>
<?php
echo "Nome: " . $_GET["nome"] . "<br>";
echo "Cognome: " . $_GET["Cognome"] . "<br>";
echo "Email: " . $_GET["Email"] . "<br>";
echo "Password: " . $_GET["Password"] . "<br>";
echo "Data: " . $_GET["data"] . "<br>";

$sito = $_GET["sito"];
echo "Sito: <a href='$sito'>$sito</a><br>";
?>
</body>
</html>



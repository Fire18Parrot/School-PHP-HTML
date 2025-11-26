<html>
<head>
<title>
Modulo di Registrazione Utente
</title>
</head>
<body>
<center>
<font size=6 color=blue>
Modulo di Registrazione Utente
</font>
<br>
<a href=https://www.wikipedia.org target=_blank>
<img src=img1.png height=300 width=200>
</a>
<br>
<form action="riepilogo.php" method="get" width=600 height=300>
    <table border="1" cellpadding="10">

        <tr>
            <td><label for="utente">Nome Utente:</label></td>
            <td>
                <input type="text" id="utente" name="utente" required>
            </td>
        </tr>

        <tr>
            <td><label for="chiave">Password Segreta:</label></td>
            <td>
                <input type="password" id="chiave" name="chiave" required>
            </td>
        </tr>

        <tr>
            <td><label for="anno">Anno di Nascita:</label></td>
            <td>
                <input type="number" id="anno" name="anno" min="1900" max="2023" required>
            </td>
        </tr>

        <tr>
            <td><label for="posta">Email Personale:</label></td>
            <td>
                <input type="email" id="posta" name="posta" required>
            </td>
        </tr>

        <tr>
            <td><label for="colore">Colore Preferito:</label></td>
            <td>
                <input type="text" id="colore" name="colore">
            </td>
        </tr>

        <tr>
            <td colspan="2" style="text-align:center;">
                <input type="submit" value="Iscriviti adesso">
            </td>
        </tr>

    </table>
</form>
</center>
</body>
</html>


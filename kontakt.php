<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "mo.whlgm@gmail.com"; 
    $subject = "Neue Kontaktanfrage von $name";
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Nachricht erfolgreich gesendet!</h2>";
    } else {
        echo "<h2>Fehler beim Versand.</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang='de'>
<head>
<meta charset='UTF-8'>
<link rel='stylesheet' href='styles.css'>
<title>Kontakt</title>
</head>

<body>

<header>
    <nav class='navbar'>
        <div class='logo'>Selbstständig Starten</div>
        <ul class='nav-links'>
            <li><a href='index.html'>Start</a></li>
            <li><a href='themen.html'>Themen</a></li>
            <li><a href='leistungen.html'>Leistungen</a></li>
            <li><a class='active' href='kontakt.php'>Kontakt</a></li>
        </ul>
        <button id='toggleDark'>🌙</button>
    </nav>
</header>

<section class='page-header'>
    <h1>Kontakt aufnehmen</h1>
</section>

<form action='kontakt.php' method='POST'>
    <label>Name</label>
    <input type='text' name='name' required>

    <label>E-Mail</label>
    <input type='email' name='email' required>

    <label>Nachricht</label>
    <textarea name='message' rows='6' required></textarea>

    <button type='submit'>Nachricht senden</button>
</form>

<footer>
    <p>© 2025 – Marc Meinel Coaching</p>
</footer>

<script src='script.js'></script>

</body>
</html>

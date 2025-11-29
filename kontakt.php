<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = strip_tags($_POST['name']);
    $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $msg  = strip_tags($_POST['message']);

    if (!$name || !$mail || !$msg) {
        $error = "Bitte alle Felder ausfüllen.";
    } else {
        $to = "deine@email.de";
        $subject = "Neue Anfrage von der Website";

        $message = "Name: $name\nEmail: $mail\n\nNachricht:\n$msg";

        $headers = "From: Website <no-reply@domain.de>";

        if (mail($to, $subject, $message, $headers)) {
            $success = "Nachricht erfolgreich gesendet!";
        } else {
            $error = "Fehler beim Senden.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kontakt – Marc Meinel</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<header class="header">
    <div class="logo">Marc <span>Meinel</span></div>

    <nav class="nav">
        <a href="index.html">Start</a>
        <a href="themen.html">Themen</a>
        <a href="leistungen.html">Leistungen</a>
        <a href="kontakt.php" class="active">Kontakt</a>
    </nav>
</header>

<section class="section">
    <h1>Kontakt aufnehmen</h1>

    <?php if(isset($error)): ?>
        <div class="alert error"><?= $error ?></div>
    <?php endif ?>

    <?php if(isset($success)): ?>
        <div class="alert success"><?= $success ?></div>
    <?php endif ?>

    <form method="post" class="contact-form">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>E-Mail</label>
        <input type="email" name="email" required>

        <label>Nachricht</label>
        <textarea name="message" rows="6" required></textarea>

        <button type="submit" class="btn-primary">Senden</button>
    </form>

</section>

<footer class="footer">
    <p>© 2025 Marc Meinel – Existenzgründungsberatung</p>
</footer>

</body>
</html>

<?php
session_start();

// Verifica se l'utente è autenticato
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati Utente</title>
</head>
<body>
    <h1>Dati Utente</h1>

    <p><strong>Nome:</strong> <?php echo $_SESSION['nome']; ?></p>
    <p><strong>Cognome:</strong> <?php echo $_SESSION['cognome']; ?></p>
    <p><strong>Età:</strong> <?php echo $_SESSION['eta']; ?></p>
    <p><strong>Sport Preferito:</strong> <?php echo $_SESSION['sport']; ?></p>

    <p><a href="index.php">Esci</a></p>
</body>
</html>
<?php
session_start();

// Verifica autenticazione
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: index.php');
    exit();
}

// Verifica se il form è stato inviato
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Salva le informazioni in sessione
    $_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $_SESSION['surname'] = isset($_POST['surname']) ? $_POST['surname'] : '';
    $_SESSION['age'] = isset($_POST['age']) ? $_POST['age'] : '';
    $_SESSION['sport'] = isset($_POST['sport']) ? $_POST['sport'] : '';
    $_SESSION['color'] = isset($_POST['color']) ? $_POST['color'] : '';
    
    header('Location: paginadistampa.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionario</title>
</head>
<body>
    
<h1>Compila il questionario</h1>
<form method="post">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="surname">Cognome:</label>
    <input type="text" id="surname" name="surname" required>
    <br>
    <label for="age">Età:</label>
    <input type="number" id="age" name="age" required>
    <br>
    <label for="sport">Sport preferito:</label>
    <input type="text" id="sport" name="sport" required>
    <br>
    <label for="color">Colore di sfondo:</label>
    <input type="color" id="color" name="color" value="#ffffff">
    <br>
    <input type="submit" value="Invia">
</form>

</body>
</html>
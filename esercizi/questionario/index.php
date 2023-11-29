<?php
session_start();

// Verifica tentativi di accesso
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

// Verifica se il form è stato inviato
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Controlla la password
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if ($password == 'info2023') {
        // Imposta la sessione come autenticata
        $_SESSION['authenticated'] = true;
        $_SESSION['user'] = 'Utente';  // Puoi impostare un nome utente di default
        header('Location: dashboard.php');
        exit();
    } else {
        // Incrementa i tentativi di accesso
        $_SESSION['login_attempts']++;

        // Se superato il limite, mostra un messaggio e termina l'esecuzione
        if ($_SESSION['login_attempts'] >= 3) {
            echo "Hai superato il limite di tentativi. Riprova più tardi.";
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso al Questionario</title>
</head>
<body>

<?php if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) : ?>
    <h1>Accesso Richiesto</h1>
    <form method="post">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Accedi">
    </form>
<?php else: ?>
    <p>Benvenuto, <?php echo $_SESSION['user']; ?>!</p>
    <p><a href="paginarichieste.php">Vai alla COMPILAZIONE DEL QUESTIONARIO</a></p>
<?php endif; ?>

</body>
</html>





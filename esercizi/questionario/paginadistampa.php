<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
</head>
<body style="background-color: <?php echo $_SESSION['color']; ?>;">

<p>Benvenuto, <?php echo $_SESSION['user']; ?>!</p>
<h1>Risultati del Questionario</h1>
<ul>
    <li><strong>Nome:</strong> <?php echo $_SESSION['name']; ?></li>
    <li><strong>Cognome:</strong> <?php echo $_SESSION['surname']; ?></li>
    <li><strong>Età:</strong> <?php echo $_SESSION['age']; ?></li>
    <li><strong>Sport preferito:</strong> <?php echo $_SESSION['sport']; ?></li>
</ul>

</body>
</html>
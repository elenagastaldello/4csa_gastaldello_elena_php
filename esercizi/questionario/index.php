<?php
$error_message = "";

if (isset($_GET['password'])) {
    $input_password = $_GET['password'];

    if ($input_password === 'INFO2023') {
        header('Location: paginarichieste.html');
        exit();
    } else {
        $error_message = "Password errata. Riprova.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina di Accesso</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="col-md-6 offset-md-3">
    <h2 class="text-center">Benvenuto! Inserisci la password:</h2>

    <?php if ($error_message): ?>
      <div class="alert alert-danger text-center" role="alert">
        <?php echo $error_message; ?>
      </div>
    <?php endif; ?>

    <form method="get">
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Invia</button>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
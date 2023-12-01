<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina di Risposta</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa; 
    }
    .card {
      margin-top: 20px;
    }
    .risultato {
      margin-top: 10px;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Risposta</h4>
          </div>
          <div class="card-body">
            <?php
            if (!empty($_GET)) {
              $nome = $_GET["nome"];
              $cognome = $_GET["cognome"];
              $dataNascita = $_GET["dataNascita"];
              $sport = $_GET["sport"];
              $coloreSfondo = $_GET["coloreSfondo"];
              echo "<div class='risultato' style='background-color: $coloreSfondo;'>";
              echo "<p><strong>Nome:</strong> $nome</p>";
              echo "<p><strong>Cognome:</strong> $cognome</p>";
              echo "<p><strong>Data di Nascita:</strong> $dataNascita</p>";
              echo "<p><strong>Sport Preferito:</strong> $sport</p>";
              echo "</div>";
            } else {
              echo "<p>Nessun dato ricevuto.</p>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
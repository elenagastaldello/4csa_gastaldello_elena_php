<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menu Ristorante</title>
    <!-- Collegamento a Bootstrap (puoi sostituire con la tua CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<body style="background-color: yellow ;"> 
<div class="container mt-5">

    <?php
    $restaurantName = "Ristorante da ELENA";
    $restaurantDescription = "Benvenuti al Ristorante da ELENA, dove la passione per il cibo si unisce all'eleganza italiana.";
    echo '<div class="jumbotron">';
    echo '<h1 class="display-4">' . $restaurantName . '</h1>';
    echo '<p class="lead">' . $restaurantDescription . '</p>';
    echo '</div>';
    $menu = array(
        "Antipasti" => array(
            array("nome" => "Bruschetta", "descrizione" => "Pane tostato con pomodoro e basilico", "prezzo" => 8.50, "immagine"=> "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-bruschetta-pomodoro/_jcr_content/header-par/image_single.img.jpg/1596625322419.jpg "),
            array("nome" => "Caprese", "descrizione" => "Insalata caprese con pomodoro e mozzarella", "prezzo" => 9.00, "immagine"=> "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/05/Insalata-caprese-still-life.jpg"),
            array("nome" => "Carpaccio", "descrizione" => "Fettine sottili di carne cruda condite", "prezzo" => 12.75, "immagine"=> "https://wips.plug.it/cips/buonissimo.org/cms/2022/08/carpaccio.jpg "),
        ),
        "Primi Piatti" => array(
            array("nome" => "Spaghetti alla Bolognese", "descrizione" => "Spaghetti con salsa di carne", "prezzo" => 10.25),
            array("nome" => "Risotto ai Funghi", "descrizione" => "Risotto con funghi porcini", "prezzo" => 11.50),
            array("nome" => "Lasagna", "descrizione" => "Piatto di pasta al forno con carne e besciamella", "prezzo" => 13.75),
        ),
        "Secondi Piatti" => array(
            array("nome" => "Bistecca alla Fiorentina", "descrizione" => "Bistecca di manzo alla griglia", "prezzo" => 20.00),
            array("nome" => "Salmone Grigliato", "descrizione" => "Salmone cucinato alla griglia", "prezzo" => 18.50),
            array("nome" => "Pollo al Limone", "descrizione" => "Pollo cotto con succo di limone", "prezzo" => 16.75),
        ),
        "Dolci" => array(
            array("nome" => "Tiramisù", "descrizione" => "Dolce al cucchiaio con caffè e mascarpone", "prezzo" => 7.50),
            array("nome" => "Panna Cotta", "descrizione" => "Dolce al cucchiaio con panna", "prezzo" => 6.00),
            array("nome" => "Cannoli", "descrizione" => "Dolce siciliano con crema di ricotta", "prezzo" => 8.25),
        )
    );

    foreach ($menu as $categoria => $piatti) {
        echo '<div class="card mb-4">';
        echo '<div class="card-header">';
        echo '<h3 class="mb-0">' . $categoria . '</h3>';
        echo '</div>';
        echo '<ul class="list-group list-group-flush">';
        foreach ($piatti as $piatto) {
            echo '<li class="list-group-item" style="background-color: #ffffe0;">'; // Set item background color to light yellow
            echo '<h4>' . $piatto["nome"] . '</h4>';
            echo '<p>' . $piatto["descrizione"] . '</p>';
            echo '<p><strong>Prezzo:</strong> €' . number_format($piatto["prezzo"], 2) . '</p>'; // Format the price with two decimal places
            echo '<img src="' . $piatto["immagine"] . '" alt="' . $piatto["nome"] . '" style="max-width: 25%;">';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
    ?>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
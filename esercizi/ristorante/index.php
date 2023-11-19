<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menu Ristorante</title>
    <!-- Collegamento a Bootstrap (puoi sostituire con la tua CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        @page {
            size: A4;
            margin: 1cm;
        }
        body {
            background-color: green;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<body style="background-color: green ;"> 
<div class="container mt-5">

    <?php
    $restaurantName = "Ristorante da ELENA";
    $restaurantDescription = "Benvenuti al Ristorante da ELENA, dove la passione per il cibo si unisce all'eleganza italiana.";
    echo '<div class="jumbotron" style="background-color: WHITE; color: white;">';
    echo '<h1 class="display-4" style= "color: red; font-weight: bold;" >' . $restaurantName . '</h1>';
    echo '<p class="lead" style= "color: red; font-weight: bold;" >' . $restaurantDescription . '</p>';
    echo '</div>';
    $menu = array(
        "Antipasti" => array(
            array("nome" => "Bruschetta", "descrizione" => "Pane tostato con pomodoro e basilico", "prezzo" => 6.50, "immagine"=> "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/11/ricetta-bruschetta-pomodoro/_jcr_content/header-par/image_single.img.jpg/1596625322419.jpg "),
            array("nome" => "Caprese", "descrizione" => "Insalata caprese con pomodoro e mozzarella", "prezzo" => 9.00, "immagine"=> "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2023/05/Insalata-caprese-still-life.jpg"),
            array("nome" => "Carpaccio", "descrizione" => "Fettine sottili di carne cruda condite", "prezzo" => 15.50, "immagine"=> "https://wips.plug.it/cips/buonissimo.org/cms/2022/08/carpaccio.jpg "),
            array("nome" => "Insalata Estiva", "descrizione" => "Misticanza con pomodorini, avocado, olive e mais", "prezzo" => 10.50, "immagine"=> "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/06/insalata-estiva-con-mozzarella--pomodori-e-avocado/jcr:content/header-par/image-single.img10.jpg/1593416594233.jpg"),
            array("nome" => "Mozzarella in Carrozza", "descrizione" => "Toast di pane con mozzarella", "prezzo" => 9.50, "immagine"=> "https://www.lamozzarellaincarrozza.it/IMMAGINI/0-mozzarella-in-carrozza-la-mozzarella-in-carrozza-ricette-blog.jpg"),
            array("nome" => "Verdure Grigliate", "descrizione" => "Verdure grigliate con olio evo", "prezzo" => 5.50, "immagine"=> "https://wips.plug.it/cips/buonissimo.org/cms/2019/07/62812594_s.jpg?w=713&a=c&h=407"),
        ),
        "Primi Piatti" => array(
            array("nome" => "Spaghetti alla Bolognese", "descrizione" => "Spaghetti con salsa di carne", "prezzo" => 10.50, "immagine"=> "https://static.gamberorosso.it/2020/04/adobestock-307727839-e1587978801484.jpeg"),
            array("nome" => "Risotto ai Funghi", "descrizione" => "Risotto con funghi porcini", "prezzo" => 13.50, "immagine"=> "https://blog.giallozafferano.it/ricettepanedolci/wp-content/uploads/2020/10/risotto-ai-funghi-1-720x480.jpeg"),
            array("nome" => "Pasta e Fagioli", "descrizione" => "Pasta con fagioli in brodo", "prezzo" => 8.50, "immagine"=> "https://www.giallozafferano.it/images/239-23941/Pasta-e-fagioli_450x300.jpg"),
            array("nome" => "Bigoli all'anatra", "descrizione" => "Bigoli con ragù di anatra", "prezzo" => 10.50, "immagine"=> "https://www.tv2000.it/borghiditalia/wp-content/uploads/sites/13/2020/01/Foto-per-ricetta-1024x768.jpeg"),
            array("nome" => "Gnocchi al Pesto", "descrizione" => "Gnocchi con salsa al basilico", "prezzo" => 10.50, "immagine"=> "https://wips.plug.it/cips/buonissimo.org/cms/2019/10/gnocchi-pesto-mozzarella.jpg"),
            array("nome" => "Lasagna", "descrizione" => "Piatto di pasta al forno con carne e besciamella", "prezzo" => 13.50, "immagine"=> "https://www.allrecipes.com/thmb/nb2eEifCwlw1yc5gnXMwBy4BkXQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/23600-worlds-best-lasagna-DDMFS-2x1-1193-40ded59b2a224312b66bdafbb885adc0.jpg"),
        ),
        "Secondi Piatti" => array(
            array("nome" => "Bistecca alla Fiorentina", "descrizione" => "Bistecca di manzo alla griglia", "prezzo" => 20.00, "immagine"=> "https://www.my-personaltrainer.it/2022/09/26/fiorentina_900x760.jpeg"),
            array("nome" => "Salmone Grigliato", "descrizione" => "Salmone cucinato alla griglia", "prezzo" => 23.50, "immagine"=> "https://primochef.it/wp-content/uploads/2018/03/SH_salmone_alla_griglia.jpg"),
            array("nome" => "Pollo al Limone", "descrizione" => "Pollo cotto con succo di limone", "prezzo" => 15.50, "immagine"=> "https://www.giallozafferano.it/images/196-19689/Pollo-al-limone_650x433_wm.jpg"),
            array("nome" => "Brasato di Manzo", "descrizione" => "Manzo brasato con vino rosso", "prezzo" => 24.00, "immagine"=> "https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/02/AdobeStock_47605525-scaled.jpg"),
        array("nome" => "Filetto di Pesce", "descrizione" => "Filetto di pesce al forno", "prezzo" => 25.50, "immagine"=> "https://www.salepepe.it/files/2016/05/branzino-cartoccio.jpg"),
        array("nome" => "Polpette al Sugo", "descrizione" => "Polpette di carne in salsa", "prezzo" => 15.00, "immagine"=> "https://cdn.cook.stbm.it/thumbnails/ricette/7/7865/hd750x421.jpg"),
        ),
        "Dolci" => array(
            array("nome" => "Tiramisù", "descrizione" => "Dolce al cucchiaio con caffè e mascarpone", "prezzo" => 6.50, "immagine"=> "https://www.giallozafferano.it/images/173-17354/Tiramisu_650x433_wm.jpg"),
            array("nome" => "Panna Cotta", "descrizione" => "Dolce al cucchiaio con panna", "prezzo" => 6.00, "immagine"=> "https://www.cucchiaio.it/content/dam/cucchiaio/it/ricette/2009/11/ricetta-panna-cotta/panna%20cotta-1.jpg"),
            array("nome" => "Cannoli", "descrizione" => "Dolce siciliano con crema di ricotta", "prezzo" => 7.00, "immagine"=> "https://www.giallozafferano.it/images/206-20605/Cannoli-siciliani_650x433_wm.jpg"),
            array("nome" => "Torta al Cioccolato", "descrizione" => "Torta di cioccolato fondente", "prezzo" => 6.50, "immagine"=> "https://blog.giallozafferano.it/adryincucina/wp-content/uploads/2017/10/tortino-al-cioccolato-e1571486491966.jpg"),
            array("nome" => "Zuccotto", "descrizione" => "Dolce toscano con crema e cioccolato", "prezzo" => 6.50, "immagine"=> "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/12/ricetta-zuccotto/_jcr_content/header-par/image_single.img.jpg/1553180807071.jpg"),
            array("nome" => "Millefoglie", "descrizione" => "Dolce a strati con crema e sfoglia", "prezzo" => 8.50, "immagine"=> "https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2021/11/Millefoglie-alla-crema-1200x675.jpg"),
        )
    );
    
foreach ($menu as $categoria => $piatti) {
        echo '<div class="card mb-4">';
        echo '<div class="card-header">';
        echo '<h3 class="mb-0" style="color: red; font-weight: bold;";>' . $categoria . '</h3>';
        echo '</div>';
        echo '<ul class="list-group list-group-flush">';
    foreach ($piatti as $piatto) {
            echo '<li class="list-group-item" style="background-color: white;">'; 
            echo '<div class="media">';
            echo '<img src="' . $piatto["immagine"] . '" class="mr-3" alt="' . $piatto["nome"] . '" style="max-width: 20%;">';
            echo '<div class="media-body">'; 
            echo '<h4 style="color: green ; font-weight: bold;";">' . $piatto["nome"] . '</h4>';
            echo '<p style="color: black; font-weight: bold;">' . $piatto["descrizione"] . '</p>';
            echo '<p><strong>Prezzo:</strong> €' . number_format($piatto["prezzo"], 2) . '</p>';
            echo '</div>';
            echo '</div>';
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
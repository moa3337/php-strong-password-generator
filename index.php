<?php
include_once( __DIR__ . "./partials/functions.php");
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Pasword Generator</title>
</head>
<body>
    <div class="container">
        <h2>Genera la tua paswor SICURA al 100%</h2>
        <form method="GET" action="">
            <div class="mb-3">
                <label for="lunghezza">Lunghezza pasword: </label>
                <input type="number" id="lunghezza" name="lunghezza" min="5" max="12">
            </div>
            <button type="submit" class="btn btn-primary mb-2" value="genera password">GENERA</button>
            
            <!--allert se non viene selezzionata la lunghezza-->
            <?php if (empty($_GET["lunghezza"])) : ?>
                <div class="alert alert-danger" role="alert">
                    Scegli la lunghezza della password!
                </div>
            <?php endif; ?>    
        </form>
        
        <?php
            if (!empty($_GET["lunghezza"])) {
                //ottengo la lunghezza che avrà la pasword dall'utente
                $lunghezza = $_GET["lunghezza"];
                //invoco la funzione "generaPasword" per generarla
                $password = generaPassword($lunghezza);
                //stampo la pasword generata
                echo "<h5>ecco la tua password:</h5>".$password;
            }
        ?>    
    </div>
</body>
</html>
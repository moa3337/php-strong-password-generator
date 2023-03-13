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
            <label for="lunghezza">Lunghezza pasword: </label>
            <input type="number" id="lunghezza" name="lunghezza" min="5" max="12">
            <button type="submit" value="genera password">GENERA</button>
        </form>
        <?php
            if (isset($_GET["lunghezza"])) {
                //ottengo la lunghezza che avrà la pasword dall'utente
                $lunghezza = $_GET["lunghezza"];
                //invoco la funzione "generaPasword" per generarla
                $password = generaPassword($lunghezza);
                //stampo la pasword generata
                echo "<h5>ecco la tua password:</h5>".$password;
            }
            
            //creo la funzione "generaPasword" per generarla
            function generaPassword($lunghezza) {
                //caratteri per generare la password
                $caratteri = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+|:<>?,./";
                $password = "";
                //creo un ciclo per generare la password casuale
                for ($i=0; $i < $lunghezza; $i++) { 
                    $password .= $caratteri[rand(0, strlen($caratteri))];
                }
                //ritorno la password generata
                return $password;
            }
        ?>    
    </div>
</body>
</html>
<?php
session_start();
$password = $SESSION["password"];
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
        <?php $password ?>    
    </div>
</body>
</html>
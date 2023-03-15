<?php
session_start();
$password = $_SESSION["password"];
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
        <h2>Ecco la tua nuova password sicura:</h2>
        <h5 class="text-success">
            <?php echo $password ?>    
        </h5>
    </div>
</body>
</html>
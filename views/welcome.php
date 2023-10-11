<?php
    include '../helpers/routes-protection.php';
    authenticated();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include '../components/navbar.php';?>
    <div class="container">
        <h1>Bienvenido</h1>
        <div class="alert alert-success" role="alert">
            <p>Bienvenido!</p>
            <p>Esta pagina está construida con php.</p>
        </div>
    </div>
</body>
</html>

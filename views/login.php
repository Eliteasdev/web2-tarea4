<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container mt-3">
        <h1 class="fs-3 text-center">Iniciar sesión</h1>
        <form action="../src/auth.php" method='post' class="form-group d-flex flex-column">

            <label for="user" class="mb-1">Usuario</label>
            <input type="text" name="user" id="user" require  class="form-control">
            
            <label for="password" class="mb-1">Password</label>
            <input type="password" name="password" id="password" require  class="form-control mb-2">
            
            <input type="submit" value="Iniciar Sesión" class="btn btn-primary mx-auto ">
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg d-flex">
    <div class="container-fluid ">
        <ul class="navbar-nav d-flex">
            <li class="nav-item"><a href="./welcome.php" class="nav-link">Bienvenido</a></li>
            <li class="nav-item"><a href="./info.php" class="nav-link">Server</a></li>
            <li class="nav-item"><a href="./about.php" class="nav-link">About</a></li>
        </ul>
    </div>
    <form action="../src/logout.php" method="post">
        <button type="submit" name="logout" class="btn btn-danger me-3 btn-sm d-flex px-2 gap-1"><img src="../assets/logout.svg" alt="logout-icon">Salir</button>
    </form>
</nav>
</body>
</html>
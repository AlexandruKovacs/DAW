<nav class="nav-bar">
    <div class="logo-container">
        <a class="refresh" href="menu-admin.php">
            <img src="img/logo.png" alt="Imagen Logo">
        </a>
    </div>
    <div class="info-container">
        Bienvenido/a <?php echo strtoupper($_SESSION['usuario']); ?>.
        <a class="logout" href="server/cerrar-sesion.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i></a>
    </div>
</nav>
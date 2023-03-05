<nav class="nav-bar">
    <div class="logo-container">
        <a class="refresh" href="menu-profesor.php">
            <img src="img/logo.png" alt="Imagen Logo">
        </a>
    </div>
    <div class="info-container">
        Profesor/a <?php echo $_SESSION['nombreApellidos']; ?>.
        <a class="logout" href="server/cerrar-sesion.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i></a>
    </div>
</nav>
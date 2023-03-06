<nav class="nav-bar">
    <div class="logo-container">
        <a class="refresh" href="menu-profesor.php">
            <img src="img/logo.png" alt="Imagen Logo">
        </a>
    </div>
    <div class="info-container">
        <div class="theme-container">
            <i class="fa-solid fa-brightness"></i>
                <input type="checkbox" class="toggle" id="tema" checked>
            <i class="fa-solid fa-moon"></i>
        </div>
        <p>Profesor/a <?php echo $_SESSION['nombreApellidos']; ?>.</p>
        <a class="logout" href="server/cerrar-sesion.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i></a>
    </div>
</nav>
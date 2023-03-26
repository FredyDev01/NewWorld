<nav class="NavMenu">
    <a href="index.html" class="MenuIcon">
        <img src="./resources/assets/LogoNav.png" alt="Logo-mundo">
    </a>
    <ul class="MenuList">
        <li><a href="index.php" <?php if($Seccion == 'Inicio') echo 'class="MenuLinkAct"' ?>>Inicio</a></li>
        <li><a href="inscribirse.php" <?php if($Seccion == 'Inscribirse') echo 'class="MenuLinkAct"' ?>>Inscribirse</a></li>
    </ul>
</nav> 
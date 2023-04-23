<div class="navigation" id="navbarFiller">
</div>
<div class="navigation" id="navbar">
    <button class="mobile-nav-button">
        <span class="open-menu">Vis meny</span>
        <span class="close-menu">Skjul meny</span>
    </button>
    <ul>
        <li class="active"><a id="hjem">Hjem</a></li>
        <li><a id="ansatte">Ansatte</a></li>
        <li><a id="bestilling">Slik bestiller/avbestiller du</a></li>
        <li><a id="aktuelt">Aktuelt</a></li>
        <?php if (isset($_SESSION['id'])) {echo '<li><a href="assets/connection/logout.php">Logg ut</a></li>';} ?>
        <li class="more"><a href="#" class="more-trigger">Mer</a>
            <ul>
                <li class="active" id="hjem"><a>Hjem</a></li>
                <li id="ansatte"><a>Ansatte</a></li>
                <li id="bestilling"><a>Slik bestiller/avbestiller du</a></li>
                <li id="aktuelt"><a>Aktuelt</a></li>
            </ul>
        </li>
    </ul>
</div>
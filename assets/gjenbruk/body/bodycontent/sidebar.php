<div class="sidebar bottom">
    <!-- Sidebar accordion -->
    <div class="accordion">
        <!-- Opening hours -->
        <h2><button class="trigger hours"><i></i>Åpningstider</button></h2>
        <div class="section">
        <?php
                require "assets/connection/hentÅpningstider.php";
        ?>
        </div>	
        <!-- Contact information -->
        <h2><button class="trigger contact"><i></i>Kontakt/Besøk</button></h2>
        <div class="section">
            <?php
                require "assets/connection/hentKontakt.php";
            ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.1803209370744!2d10.712663016096625!3d59.92914998187272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416ddaf92a58b7%3A0x14909a9a78ba639b!2sMajorstuhuset%20Legegruppe%20DA!5e0!3m2!1sno!2sno!4v1682011595469!5m2!1sno!2sno" 
                     width="200" height="200" style="border:0;" allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
        <div class="map">
        
        </div>
    <!-- SMS order -->
    </div>
</div>
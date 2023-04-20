<body class="employees">
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var contentScrollTop = 200;
    </script>
    <a class="show-on-focus skip-to-start-of-content" href="">Hopp til hovedinnhold</a>

    <!-- Start Header -->

    <a href="" style="text-decoration: none;" title="Gå til forsiden">
        <div class="header ">
            <div class="header-image">
                <div class="gradient"></div>
                <img src="gfx/1.5/toppbilde.jpg" alt="Senteret sitt bannerbilde"/>
            </div>
            <div class="inner">
                <div class="text-logo"><h1>Majorstuhuset Legegruppe</h1></div>
            </div>
        </div>
    </a>

    <!-- Start navigation -->

    <?php 
        require "navigation.php";
    ?>
    <!-- Start container -->
    <div class="container">
        <!-- Sidebar top -->
        <div class="sidebar top">
            <!-- Sidebar accordion -->
            <div class="accordion">
                <!-- Opening hours -->
                <h2><button class="trigger hours"><i></i>Åpningstider</button></h2>
                <div class="section">
                    Man-fred: 08.30-15.00<br/>
                    Lør-søn: Stengt<br/><br/>
                    Laboratorium: Man-torsdag: 09-11 og 13-15<br/><br />
                    Lunsj: kl 12.00-13.00<br /><br />
                    Telefontid: <br />
                    kl. 08.30-11.30 og<br />
                    kl. 13.00-15.00 (fredag 14.00)
                </div>	
                <!-- Contact information -->
                <h2><button class="trigger contact"><i></i>Kontakt/Besøk</button></h2>
                <div class="section">
                    <h3>Kontakt</h3>
                    <p>
                        Majorstuhuset Legegruppe<br/>
                        Kirkeveien 64B<br/>
                        0364 Oslo<br/>
                        Telefon: 23 33 18 40<br/>   
                    </p><br/>
                    <h3>Besøk</h3>
                    <p>
                        Majorstuhuset Legegruppe<br />
                        Kirkeveien 64B, 4. etg.<br />
                        OBS: Inngang til oss er i B-inngangen, rett ved siden av Krogh optikk og Kverneriet.<br/>
                        <br/><br/>
                        <a href="http://maps.google.no/maps?hl=no&q=majorstuhuset%20legegruppe&gs_sm=e&gs_upl=985l3813l0l3953l24l19l0l9l9l0l297l1327l0.4.3l7l0&bav=on.2,or.r_gc.r_pw.,cf.osb&biw=1024&bih=571&wrapid=tlif132851934040411&um=1&ie=UTF-8&sa=N&tab=wl" title="Klikk her for å se kart" target="_blank">Vis kart</a>
                    </p>
                </div>
            <!-- SMS order -->
            </div>
        </div>
        <!-- Sidebar bottom -->
        <?php
            require "sidebar.php";
            require "content.php";
        ?>
        
    </div>

    <?php 
        //require "gjenbruk/footer.php";
    ?>

    <script src="/js/general.js" type="text/javascript"></script>
    <script src="/js/iframe-resizer.js?ts=2023-03-20_14:30:45"></script>
</body>
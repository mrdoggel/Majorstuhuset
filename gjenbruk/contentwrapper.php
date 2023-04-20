<body class="employees">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var contentScrollTop = 200;
    </script>
    <a class="show-on-focus skip-to-start-of-content" href="">Hopp til hovedinnhold</a>

    <!-- Start container -->
    <div class="container">

        <?php
            require "sidebar.php";
            require "content.php";
        ?>
        
    </div>

    <?php 
        //require "gjenbruk/footer.php";
    ?>

    <script src="js/general.js" type="text/javascript"></script>
    <script src="js/iframe-resizer.js"></script>
</body>
    <!-- SIDE NAV -->
    <nav id="mySidenav" class="sidenav">
    <?php require 'header.html'; ?>
        <div class="navbarLinks" id="opacity">
            <ul>
                <li><a class="underline" href="index.php">ACCUEIL</a></li>
                <li><a class="underline" href="pagesInfos.php">QUI SOMMES-NOUS?</a></li>
                <li><a class="underline" href="#">NOS OFFRES</a></li>
                <li><a class="underline" href="#">CONTACTEZ-NOUS</a></li>
            </ul>
        </div>
    </nav>

        <!-- MENU (ça devrait être l'inverse mais jme suis cago dessus dans les classes) -->
        <div class="menu">
        <div  onclick="toggle()" class="icon_menu">
        <div> <span>MENU</span> </div>
        </div>
        <ul>
            <li><a href=# aria-label="Choix de la langue"> <span class="icon-french"></span></a> </li>
            <li><a href="tel:+330384125659" aria-label="Nous appeler"> <span class="icon-phone"></span></a> </li>
            <li><a href="#" aria-label="Rechercher dans la page"><span class="icon-search"></span></a> </li>
        </ul>
        <div class="scroll">
            <p>SCROLL</p>
            <div class="line"></div>
        </div>
    </div>
    <!-- Y'A DU JS CACHÉ ICI -->
    <script>
        function toggle() {
            if (window.matchMedia("(min-width: 1025px").matches){
                if (document.getElementById("mySidenav").style.width == "100vw") {
                closeNav();
                } else {
                openNav(); }
            } else {
                if (document.getElementById("mySidenav").style.height == "100vh") {
                closeNavMobile();
                } else {
                openNavMobile(); }
            }

        }

        function openNav() {
            document.getElementById("mySidenav").style.width = "100vw";
            document.getElementById("opacity").style.opacity = "1";
            document.body.classList.add("stop-scroll");
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "";
            document.getElementById("opacity").style.opacity = "0";
            document.body.classList.remove("stop-scroll");
        }

        function openNavMobile() {
            document.getElementById("mySidenav").style.height = "100vh";
            document.body.classList.add("stop-scroll");
        }

        function closeNavMobile() {
            document.getElementById("mySidenav").style.height = "";
            document.body.classList.remove("stop-scroll");
        }
    </script>
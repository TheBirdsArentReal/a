<?php
    require_once("pages/template/header.php");
    require_once("pages/template/nav.php");
?>

       <!-- Logo "auf" Navbar--> 
        <a href="index.php" id="logo"> <img id="logo" src="assets/imgs/aof.png  " width="200px"></a>

        <!-- Hier könnte aktuelles hin? WICHTIG: Parallax scolling!-->
        <div class="content">
            <p>COMING SOON</p>
            <p id="timer"></p>
        </div>

        <!--Link zu originaler AOF-Seite-->
        <div id="toMain">
            <p>
                <a title="Hier gehts zur AOF Hauptseite!" href="https://www.aof.de/">
                    <img src="assets/imgs/aof-logo.png" height="150px">
                    <br>
                    AOF was ist das eigentlich?
                </a>
            </p>
        </div>

        <!--mehr Content?-->
        <div class="content">
            <p>COMING SOON</p>
        </div>
    <?php require_once("pages/template/footer.php") ?>
    </body>
</html>
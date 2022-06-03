<?php
require_once("pages/template/header.php");
require_once("pages/template/nav.php");

?>

    <body>

        <nav id="navbar">

            <div id="navCon">
                <a href="praktikum.php">Praktikum</a>
                <a>Ausbildung</a>
                <a>Karriere</a>
            </div>
            <div id="navbar-right" class="dropdown">
                <div class="burger hidden" id="burger" onclick="makeX(), drop()"">
                    <div class="burger" id="bar1"></div>
                    <div class="burger" id="bar2"></div>
                    <div class="burger" id="bar3"></div>    
                </div>  
                <div id="ddown" class="dropContent"> <!--Menü-->
                    <a href="praktikum.php">Praktikum</a>
                    <a href="#">Ausbildung</a>
                    <a href="#">Karriere</a>
                </div>        
            </div>
            
        </nav>
        <a href="index.php" id="logo"> <img id="logo" src="assets/imgs/aof.png" width="200px"></a>

        <div class="info">

            <h1>Praktikum bei A&O Fischer</h1>

            <div>

                <p>Hier bei AOF freuen wir uns über Praktikanten und sehen sie nicht als störend, sondern als eine Bereicherung. 
                    Wir vermitteln gerne neues wissen und zeigen dir was dich im Berufsleben erwartet. 
                    Egal ob Schul- oder freiwilliges Praktikum, wir freuen uns auf dich! <br>
                    Derzeit bieten wir Praktika in diesen Bereichen:</p>

                    <div class="container-btns">
                        <button id="btn" onclick="infoIt()">Anwendungsentwicklung</button>
                        <button id="btn" onclick="infoEc()">E-Commerce</button>
                        <button id="btn" onclick="infoMa()">Maschienen- & Anlagenführung</button>
                    </div>

                <p id="bold">Wenn du mehr wissen willst, warum liest du nicht was unsere Praktikanten zu sagen haben?</p>

                <a title="Zu den Erfahrungsberichten" href="erfahrungen.php"><button id="btn2">Erfahrungsberichte</button></a>

            </div>
        </div> 
        
        <div id="prakIt" class="hidden">
            <div>

                <h1>Informationen zum IT Praktikum</h1>
                <p>Hier sind Informationen zu sehen!!!</p>
                <p>
                    Melde dich hier wenn du IT willst: <br>
                    AndreasMailAdresse@AdressenMail.com
                </p>

            </div>  
        </div>

        <div id="prakEc" class="hidden">
            <div>

                <h1>Informationen zum E-Commerce Praktikum</h1>
                <p>Hier sind Informationen zu sehen!!!</p>
                <p>
                    Melde dich hier wenn du E-Commerce willst: <br>
                    ZuständigMailAdresse@AdressenMail.com
                </p>

            </div>
        </div>

        <div id="prakMa" class="hidden">
            <div>

                <h1>Informationen zum Praktikum im Bereich Maschienen- und Anlagenführung</h1>
                <p>Hier sind Informationen zu sehen!!!</p>
                <p>
                    Melde dich hier wenn du Maschienen- und Anlagenführung willst: <br>
                    ZuständigMailAdresse@AdressenMail.com
                </p>
                
            </div>
        </div>
        
        <div class="cntnt-bx">

            <h2> Komm in unser Team und lerne jeden Tag etwas neues!</h2>
            <a><button id="btn2" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Bewirb dich jetzt!</button></a>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            TEXT TETXT TEXT
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <?php require_once("pages/template/footer.php")?>

    
    </body>
</html>
<?php declare(strict_types=1);
/**
* Der Inhalt dieser Datei ist ausschließlich für die interne 
* Verwendung in der Lehrveranstaltung im Wintersemester 2023ff:
* Internettechnologie Client-Server
* im Studiengang Wirtschaftsinformatik-Online, B.Sc.
* der Fakultät Informatik
* in der Hochschule Braunschweig/Wolfenbüttel
* gedacht.
* Datum 23.03.2024
* Version: 0.9.0.3
* Autoren: B.Sc. M. Borm, Dipl.-Inform. A. Ludwig
* (c) 10/2023: Hochschule Braunschweig/Wolfenbüttel, Fakultät Informatik
* Alle Rechte bleiben vorbehalten.
*
* TODO: semantic html
*/

include_once "util_jsonio.php";

const JSON_PATH = "./server_data/???";

$jsondata = readJsonData(JSON_PATH);


?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="B.Sc. M. Borm">
    <meta name="author" content="Dipl.-Inform. A. Ludwig">

    <link rel="icon" type="image/png" href="./favicon.png" ></link>

    <link rel="stylesheet" href="./css/2424_almb_clientside_complete.css" />

    <title>SomSem 24, BMIO, ISP, ESA 1 - Lsg</title>
  </head>

  <body id="webpage">

    <nav id="nav-bar" class="nowrap">
      <div class="float-n-align-left">
        <span><a class="nav-link" href="index.php" target="_self"><img 
          id="navpic-home" src="./img/free_house.png" /></a></span>
          <!-- nbsp entfernt - nicht notwendig - stört Zentrierung -->
      </div>
      <!-- floats ungünstig wenn man etwas zentrieren soll -->
      <div  class="float-n-align-right">
        <span><a class="nav-link" href="explanations.php" target="_self"><img id="navpic-scroll" style="filter: invert(100%)" src="./img/kisspng-paper-parchment-scroll-writing-troll.png" /></a></span> 
      </div>
      <div class="nav-center"> <!-- muss an dieser Stelle bleiben, nicht zwischen left und right-->
      </div>
    </nav>

    <div id="almb-view-container">
      <div id="view-picklist" class="view">
        <div>
          <p>SomSem 24, BMIO, ISP, ESA 1</h5>
          <p>index.php</p>
          <p>BoLu</p>
          <p>B.Sc. M. Borm</p>
          <p>Dipl.-Inform. A. Ludwig</p>
          <div><p>Unsortierte Einkaufselemente:</p>
          <p>Mehl, Eier, Honig, Serano-Schinken, Butter, Brötchen, Marmelade, Espresso, brauner Zucker</p>
        </div>
      </div>
    </div>
  </body>
</html>

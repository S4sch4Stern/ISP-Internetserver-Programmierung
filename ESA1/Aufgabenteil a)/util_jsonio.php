<?php

/** Der Inhalt dieser Datei ist ausschließlich für die interne 
  * Verwendung in der Lehrveranstaltung im Wintersemester 2023ff:
  * Internettechnologie Client-Server
  * im Studiengang Wirtschaftsinformatik-Online, B.Sc.
  * der Fakultät Informatik
  * in der Hochschule Braunschweig/Wolfenbüttel
  * gedacht.
  * Datum 04.11.2023
  * Version: 0.9.0.2
  * Autoren: B.Sc. M. Borm, Dipl.-Inform. A. Ludwig
  * (c) 10/2023: Hochschule Braunschweig/Wolfenbüttel, Fakultät Informatik
  * Alle Rechte bleiben vorbehalten.
  *
  */


declare(strict_types=1);

function readJsonData($data_path): ??? {
  if(file_exists($data_path)) {

    // TODO: YOUR CODE GOES HERE !!!

  }
  else {
    exit("ERR: file $data_path not found");
  }
}

function writeJsonData(array $data, $data_path): bool {
  if(file_exists($data_path)) {

    // TODO: YOUR CODE GOES HERE !!!

  }
  else {
    echo "ERR: file given in variable data_path not found";
    return false;
  }
}

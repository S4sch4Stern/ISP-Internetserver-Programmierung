<!doctype html>

<!--
/** Der Inhalt dieser Datei ist ausschließlich für die interne 
  * Verwendung in der Lehrveranstaltung im Wintersemester 2023ff:
  * Internettechnologie Client-Server
  * im Studiengang Wirtschaftsinformatik-Online, B.Sc.
  * der Fakultät Informatik
  * in der Hochschule Braunschweig/Wolfenbüttel
  * gedacht.
  * Datum 23.03.2024
  * Version: 0.9.0.2
  * Autoren: B. Sc. M. Borm, Dipl.-Inform. A. Ludwig
  * (c) 09/2023: Hochschule Braunschweig/Wolfenbüttel, Fakultät Informatik
  * Alle Rechte bleiben vorbehalten.
  *
  * TODO: alert wenn vertikale Höhe nicht ausreicht
  */
-->

<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="B.Sc. M. Borm" />
    <meta name="author" content="Dipl.-Inform. A. Ludwig" />

    <link rel="icon" type="image/png" href="./favicon.png" />

    <link rel="stylesheet" href="./css/2424_almb_clientside_complete.css" />

    <title>SomSem 24, BMIO, ISP, Esa 1</title>
  </head>

  <body id="webpage">

    <nav id="nav-bar" class="nowrap">
      <div class="float-n-align-left">
        <span><a class="nav-link" href="index.php" target="_self"><img 
          id="navpic-home"  src="./img/free_house.png" /></a></span>
      </div>
      <div  class="float-n-align-right">
        <span><a class="nav-link" href="explanations.php" target="_self"><img id="navpic-scroll" style="filter: invert(100%)" src="./img/kisspng-paper-parchment-scroll-writing-troll.png" /></a></span> 
      </div>
      <div class="nav-center"> <!-- muss an dieser Stelle bleiben, nicht zwischen left und right-->
      </div>
    </nav>

    <div id="almb-view-container">    

    <main id="view-explanations" class="view one-or-two-columns">

      <article class="article">

<!-- h1: Webpage; h2: chapter; h3: article, h4: section; h5: subsection; h6: subsubsection;-->
<!-- date, version, author, and institution are no headings;-->
        <h3 class="title">Sommersemester 24, ISP, Esa 1</h3>
        <p class="author">B.Sc. M. Borm, Dipl.-Inform. A. Ludwig</p>
        <p class="date">20. 3. 2024</p>

        <hr>

        <section class="abstract">
          <h4 class="title">Kurzzusammenfassung / Abstract:</h4>
          <p>Diese Einsendeaufgabe beschäftigt sich mit einer einfachen Einkaufsliste.
            Dabei fordert die Aufgabe zuerst ein bisschen das Layouten 
            von Text mittels Cascading Style Sheets als Wiederholung. 
            Im weiteren Aufgabenverlauf wird dann PHP geübt.</p>
            <p>Formulare zur Darstellung von Listen werden vorgestellt.
            Ein einfacher Submit mit Datenrückgabe wird durchgeführt.</p>
        </section>

        <section class="section">
          <p class="title">Erste Schritte zur Server App</p>
          <p>Betrachten Sie bitte die erste Ansicht der Einkaufsliste (Homepage) dieser Anwendung.
            Sie zeigt eine Picklist einzukaufender Posten nur mit den Namen der Lebensmittel.
            (Dies wird sich im weiteren Verlauf ändern.) Bearbeiten Sie dann die folgenden Teilaufgaben.</p>
          <ol class="problems" >
            <li>
              <ol class="problem-parts" >
                <li>Das folgende gelte für <span class="bold">alle folgenden Aufgabenteile:</span><br /><br />
                  Festlegung der DOM-Seitenstruktur bitte mittels HTML.<br /><br />
                  Festlegung des Layouts mittels CSS.<br /><br />
                  Sofern nicht explizit anders angegeben: Programmierung der serverseitigen Funktionalität mittels PHP.<br /><br />
                  AJAX ist <span class=".bold">verboten</span>!<br /><br />
                  In der Mitte der Navigation ist ein rechtefreies oder von Ihnen erstelltes Fragezeichen-Icon hinzuzufügen. Dies verweise auf eine von Ihnen zu erstellende Textseite ähnlich wie diese Aufgabenseite - der gewünschte Inhalt wird im Unterabschnitt <span class="emph">Ihre Textseite</span> erläutert.<br /><br />
                  Von Aufgabe zu Aufgabe und von Teilaufgabe zu Teilaufgabe bleibe die bereits implementierte Funktionalität erhalten, wenn nicht explizit etwas Anderes gefordert ist.<br /><br />
                </li>
              </ol>
            </li>
            <li>
              <ol class="problem-parts" >
              <li>Es geht um HTML: Korrigieren Sie die Metadaten im head des Dokumentes passend zu Ihrer Gruppe.</li>
              <li>Im Anzeigebereich der Seite ist stets semantisches HTML dem syntaktischen HTML vorzuziehen, wenn dies sinnvoll geht. (Soll heißen: Verwenden Sie soviel semantisches HTML wie möglich, aber nicht an Stellen, wo das niemand machen würde.</li>
              <li>Stellen Sie die einzukaufenden Artikel mittels statischem HTML als Liste dar und entfernen Sie die mitgelieferten unsortierten Einkaufselemente.</li>
              <li>Ergänzen Sie in der Seite einen footer, der ein korrektes Copyright mit Ihrer beider Namen enthält. Dieser Footer sei unten fixiert.</li>
              </ol>
            </li>
            <li>
              <ol class="problem-parts" >
              <li>Erzeugen Sie eine Kopie Ihres bisherigen Ergebnisses, behalten Sie das Original und arbeiten Sie nun in der Kopie weiter.</li>
              <li>Die Liste soll nun innerhalb eines Formulars stehen. Alle Namen der Lebensmitteln sollen als lesbare Werte in Texteingabefeldern stehen. Die Eingabefelder seien editierbar; ein Wert muss beim Submit enthalten sein. Wenn kein Lebensmittel eingetragen ist, sei in dem Eingabefeld der Text "Ware eingeben" sichtbar.</li>
              <li>Die Form habe einen Submit Button mit der Beschriftung "Speichern".</li>
              <li>Wird dieser Button geklickt, so werden die Formdaten im Body des Requests an den Server geschickt.</li>
              <li>Wenn der Server die Daten bekommt speichert er diese als JSON in einer Datei. Ergänzen Sie dazu die geeignete Methode in der Datei util_jsonio.php, wie es erforderlich ist.</li>
              </ol>
            </li>
            <li>
              <ol class="problem-parts" >
              <li>Erzeugen Sie eine Kopie Ihres bisherigen Ergebnisses, behalten Sie das Original und arbeiten Sie nun in der Kopie weiter.</li>
              <li>Wenn Ihre Seite geladen wird, sollen die auf dem Server gespeicherte Lebensmittelliste im Formular angezeigt werden. Ergänzen Sie dazu die geeignete Methode in der Datei util_jsonio.php, wie es erforderlich ist.</li>
              </ol>
            </li>
            <li>
              <ol class="problem-parts" >
              <li>Erzeugen Sie eine Kopie Ihres bisherigen Ergebnisses, behalten Sie das Original und arbeiten Sie nun in der Kopie weiter.</li>
              <li>Wenn Ihre Seite das Daten Speichern aufgerufen hatte soll eine Seite angezeigt werden (Datei) mit einem Text der die gespeicherten Lebensmittel ankündigt. Darunter zweispaltig die gespeicherten Lebensmittel. Wenn man auf einen OK-Button clickt landet man wieder auf der Seite mit der Liste mit den Eingabemöglichkeiten.</li>
              </ol>
            </li>
            <li>
              <ol class="problem-parts" >
              <li>Erzeugen Sie eine Kopie Ihres bisherigen Ergebnisses, behalten Sie 
              das Original und arbeiten Sie nun in der Kopie weiter.</li>
              <li>Die vorhandene Form soll nun um eine Schaltfläche ergänzt werden, 
              die der geneigten Anwender:in vermittelt, dass die Liste ergänzt werden 
              kann.<br /> 
              Wird dieser Button geklickt gebe es ein Eingabefeld mehr als die 
              bisherigen Listenelemente (falls vorhanden).
              Dieses kann nun befüllt werden.<br />
              Danach funktioniert der submit wie gehabt.<br />
              Auch hier wird serverseitig programmiert.</li>
              <li>Die bisherige Funktionalität der (serverseitigen) Webanwendung soll weitgehend
                erhalten bleiben. Geringfügige Anpassungen können erforderlich sein.</li> 
              </ol>
            </li>
          </ol>
          

          <section class="subsection">
            <p class="title">Ihre Textseite</p>
            <p>In ihrer Textseite weisen Sie bitte darauf hin, was besonders schwierig 
              für Sie zu programmieren war und erläutern bitte auch die Gründe dafür. 
              Der Inhalt dieser Erläuterung (nicht die Form) ist ausserhalb der Wertung 
              und soll der Kursbetreuung helfen, die herausfordernden Inhalte des Kurses
              gegebenenfalls erneut und anders darzustellen.
            <aside class="minipage">
              Bitte <span>keinesfalls</span> natürlichsprachliche Erzählungen ihres Quellcodes
              oder wie Ihre App zu benutzen ist. Den Quellcode kann Ihre Betreuung lesen und
              die Benutzung steht in der Aufgabenstellung. Bitte ggf. Rückfragen stellen.
            </aside>
            Wir möchten also folgendes von Ihnen wissen: Bei welchen Stellen der Aufgabenstellung
            wussten Sie nicht oder nur sehr vage, wie etwas zu implementieren ist? An welcher 
            Position Ihres Quellcodes wollten Sie die Teillösung einbauen und welche Quellcode-Alternativen 
            haben Sie erwogen? Wie konnten Sie das Problem (zumindest teilweise) lösen (oder auch nicht)?
            Und: Wo finden wir gegebenenfalls Ihre Lösung?</p>
            <p>Wenn Ihre Antworten auf individuelle Schwierigkeiten hindeuten,
            klären wir das mittels Gruppenkommunikation.</p>
            <p>Bei Herausforderungen die bei mehreren Gruppen auftreten, gehen
            wir eventuell in der regulären WK darauf ein.</p>
            <p>Mit Dank im Voraus für Ihre Kooperation. Ihre Kursbetreuenden.<br />
            <br /></p>
          </section><!-- end of subsection -->
        </section><!-- end of section -->

        <section class="section">
          <p class="title">Hinweise zum Vorgehen</p>
          <p>Sollten Sie festhängen wegen Verständnisfragen zur Aufgabenstellung: 
          Fragen Sie nach kurzem Nachdenken.</p>   
          
          <p>Bei Schwierigkeiten zu Teillösungsansätzen fragen Sie Ihre Betreuung 
          im Gruppenforum. Ebenso bei akuten und aufhaltenden Codierungsrätseln.</p>

          <p>Zum Thema Cascading Style sheets finden Sie im folgenden Artikel weitere Erläuterungen.</p>
        </section>
        <p class="separator"><span class="position-anchor"></span></p>
      </article>
<!--      <article class="column">-->
      <article class="article">
        <h3 class="title">Bestimmungen zur Verwendung des bereitgestellten css-Codes</h3>
        <h4 class="subtitle">Nur zur Verwendung im Kurs Internet-Server-Programmierung im Sommersemester 24*</h4>
        <p class="author">B.Sc. M. Borm, Dipl.-Inform. A. Ludwig</p>
        <p class="date">5. 4. 2024</p>
        <hr>
      
        <p>Da die Regelsprache CSS nicht mehr Inhalt des Moduls ist dürfen Sie die mitgelieferte
          css-Datei für Ihre Einsendeaufgaben nutzen. Dabei gelten folgende Bestimmungen:</p>
        <ul>
          <li>ausserdem dürfen Sie die Selectoren oder Rümpfe der css-Regeln im Kurs 
          absprechen.</li>
          <li>Auch Ihre Kursbetreuung hilft mit Hinweisen. Sie müssten aber
          klar beschreiben, welches Layout Sie erreichen wollen. 
          <li>Das Einbinden
          der css-Datei und das Anbringen von ids oder Klassen müssen Sie aber 
          mithilfe der Vorkenntnisse aus dem Kurs Webprogrammierung in Ihrer Gruppe
          selbst hinbekommen.</li>
        </ul>
        <div>Das folgende Beispiel zeigt beispielhaft das Einbinden eines Code-Listings in einer Webseite.

          <figure class="floating">
<!--          <img class="img" src="./img/code.png" alt="Code Screenshot" />  -->
            <code class="code">10 SoSo.
20
30 Oder nicht?
40</code>
            <figcaption class="fig-caption">Abb. 1: Some Source Code</figcaption>
          </figure>

          Der html-css-Quellcode, der in Abbildung 1 verwendet wird, zeigt eine sinnvolle Einbindungsweise. Sollte man die Funktion des pre-Tags durch css ersetzen können, wäre dies vorzuziehen.<br />
          <br />
        </div>
        <section class="section">
          <p class="title">Unterstützende Dokumentation</p>
          <p>Es gibt spärliche aber hoffentlich hilfreiche Kommentare in der 
          css-Datei.</p>
          <p>Ein Dokument mit Materialergänzungen zum Modul ist im werden. 
          Dort werden nach und nach auch Inhalte zu css einfließen.</p>
        </section>
        <p>*: Die zur Verfügung gestellte css-Datei oder der darin enthaltenen css-Code
        dürfen Dritten außerhalb des genannten Kurses in keinerlei Form übergeben und
        in kleinerlei Weise zugänglich gemacht werden.</p>
      </article>
    </main>
    </div>

      <aside id="copyright-floater" class="leftshiftable">
        <div class="copyrightfloater-copyright">&#9664;&nbsp;&nbsp;</div> 
        <div class="copyrightfloater-copyright">
            <span class="nowrap">&copy; 09/2023:</span><br>
            <span class="nowrap">Hochschule Braunschweig / Wolfenbüttel,</span><br>
            <span class="nowrap">Fakultät Informatik</span>
        </div>
      </aside>

  </body>
</html>

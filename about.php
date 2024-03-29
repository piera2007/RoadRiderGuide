<!-- 
  Author: Piera Blum
  Date: 21.10.2024
  Description: This is a site about the company and you can send a reviews and can see reviews.
 -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Road-Rider-Guide: about-us</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="fade-in-up">
      <a href="homepage.php">
        <div class="logo">
          <img
            src="images/Road-Rider-Guide.png"
            alt="Road Rider Guide Logo"
            class="logo-img"
          />
        </div>
      </a>
      <div class="titel">
        <h1>Über uns</h1>
      </div>
    </header>
    <nav>
      <ul>
        <li><a href="homepage.php">Startseite</a></li>
        <li><a href="about.php">Über uns</a></li>
        <li><a href="contact.php">Kontakt</a></li>
        <li><a href="sponsor.html">Sponsoren</a></li>
        <li><a href="match.html">Passendes Motorrad</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="index.php">Registrieren</a></li>
        <li><a href="benutzer.php">Benutzer & Logout</a></li>
      </ul>
    </nav>
    <main>
    <div class="content-container">
      <section>
        <h2>Über uns</h2>
        <p>
          Bei Road-Rider-Guide sind wir leidenschaftliche Motorradenthusiasten
          mit jahrzehntelanger Erfahrung auf der Strasse. Unser Ziel ist es,
          Ihre Motorradträume wahr werden zu lassen, egal ob Sie ein Anfänger
          oder ein erfahrener Fahrer sind.
        </p>
        <p>
          Wir bieten massgeschneiderte Beratung und empfehlen das ideale
          Motorrad für Sie, basierend auf Ihrem Alter, Ihren Vorlieben und Ihrem
          Fahrstil.
        </p>
        <p>
          Unsere Beratungsdienste sind darauf ausgerichtet, Ihre Sicherheit und
          Freude am Fahren zu maximieren. Verlassen Sie sich auf uns, um Sie auf
          den richtigen Weg zu bringen, sei es für entspannte Wochenendausflüge
          oder anspruchsvolle Langstreckentouren.
        </p>
        <p>
          Bereit, Ihr Abenteuer zu beginnen? Starten Sie Ihre Reise noch heute
          und finden Sie heraus, welches Motorrad am besten zu Ihnen passt!
        </p>
      </section>
      <section>
        <h2>Unsere Geschichte</h2>

        <p>
          Road-Rider-Guide wurde im Jahr 2023 von Piera Blum gegründet, einem
          begeistert Motorradfahrer mit einer Vision. Was als kleines Geschäft
          begann, entwickelt sich immer mehr und wird immer wie bekannter.
        </p>
        <p>
          Wir haben zahlreiche unvergessliche Touren organisiert und sind mit
          der Zeit eine grosse Famillie geworden. Wir kennen viele Events und
          Organisieren regelmässig Touren.
        </p>
      </section>
      <?php include 'get_reviews.php'; ?>

      <section>
        <form method="POST" action="process_review.php">
      <fieldset>
        <legend>Bewertung:</legend>
        <input type="radio" id="rating-input-radio-5" name="rating-input-radio" value="5">
        <label for="rating-input-radio-5">★★★★★</label>
        <input type="radio" id="rating-input-radio-4" name="rating-input-radio" value="4">
        <label for="rating-input-radio-4">★★★★☆</label>
        <input type="radio" id="rating-input-radio-3" name="rating-input-radio" value="3">
        <label for="rating-input-radio-3">★★★☆☆</label>
        <input type="radio" id="rating-input-radio-2" name="rating-input-radio" value="2">
        <label for="rating-input-radio-2">★★☆☆☆</label>
        <input type="radio" id="rating-input-radio-1" name="rating-input-radio" value="1">
        <label for="rating-input-radio-1">★☆☆☆☆</label>
      </fieldset>
    
      <label for="review_text">Nachricht:</label>
      <textarea id="review_text" name="review_text" rows="4"></textarea>
    
      <button type="submit" name="submit_review">Nachricht senden</button>
    </form>
    
        </section>
      <section>
        <h2>Zitate</h2>
        <p>
          "Das Motorrad ist eine Maschine, die dir die Freiheit gibt, die Welt
          zu erkunden, ohne dabei die Verbindung zur Umgebung zu verlieren." -
          Anonymous
        </p>

        <p>
          "Das Leben ist kurz, also fahre dein Motorrad und mache die Reisen
          deiner Träume wahr." - Anonymous
        </p>

        <p>
          "Motorradfahren ist eine Lebenseinstellung, die sich nicht beschreiben
          lässt; sie muss erlebt werden." - Anonymous
        </p>

        <p>
          "Die Strasse ist unser Lebensweg, das Motorrad ist unser Fahrzeug, die
          Abenteuer sind unsere Geschichten." - Anonymous
        </p>

        <p>"Echte Freiheit beginnt erst hinter dem Lenker." - Anonymous</p>

        <p>
          "Mit dem Motorrad unterwegs zu sein bedeutet, das Leben in vollen
          Zügen zu geniessen und die Freiheit auf zwei Rädern zu erleben." -
          Anonymous
        </p>

        <p>
          "Die Kurven des Lebens sind wie die Kurven auf der Strasse - sie
          machen das Leben aufregend." - Anonymous
        </p>

        <p>
          "Motorradfahren ist mehr als nur ein Hobby, es ist eine Leidenschaft,
          die unser Leben bereichert." - Anonymous
        </p>
      </section>
      <section>
        <h2>Sprüche</h2>
        <p>
          "Lebe dein Leben in der Kurve, nicht auf der Geraden." - Anonymous
        </p>

        <p>
          "Motorräder sind nicht nur Maschinen, sie sind Lebensgeister." -
          Anonymous
        </p>

        <p>
          "Manche nennen es Chaos, wir nennen es Motorradfahren." - Anonymous
        </p>

        <p>"Das Abenteuer beginnt, wo die Strasse endet." - Anonymous</p>

        <p>
          "Auf dem Motorrad fühle ich mich frei, lebendig und glücklich." -
          Anonymous
        </p>

        <p>"Grenzen existieren nur im Kopf." - Anonymous</p>

        <p>
          "Wenn du fährst, fühlst du, aber wenn du fühlst, fährst du besser." -
          Nick Ienatsch
        </p>
      </section>
      <section>
        <h2 id="oeffnungszeiten">Öffnungszeiten</h2>
        <table>
          <tr>
            <th>Tag</th>
            <th>Öffnungszeit</th>
          </tr>
          <tr>
            <td>Montag</td>
            <td>9:00 - 18:00 Uhr</td>
          </tr>
          <tr>
            <td>Dienstag</td>
            <td>9:00 - 18:00 Uhr</td>
          </tr>
          <tr>
            <td>Mittwoch</td>
            <td>9:00 - 18:00 Uhr</td>
          </tr>
          <tr>
            <td>Donnerstag</td>
            <td>9:00 - 18:00 Uhr</td>
          </tr>
          <tr>
            <td>Freitag</td>
            <td>9:00 - 18:00 Uhr</td>
          </tr>
          <tr>
            <td>Samstag</td>
            <td>10:00 - 15:00 Uhr</td>
          </tr>
          <tr>
            <td>Sonntag</td>
            <td>Geschlossen</td>
          </tr>
        </table>
      </section>
      </div>
    </main>
    <footer>
      <p>&copy; 2024 Road-Rider-Guide</p>
    </footer>
  </body>
</html>

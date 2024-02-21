<!-- 
  Author: Piera Blum
  Date: 21.10.2024
  Description: This page provides contact information and a form for questions.
 -->
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakt - Road Rider Guide: contact</title>
    <link rel="stylesheet" href="kontakt.css" />
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
      <div class="header-content">
        <h1>Kontakt</h1>
        <p>Sie brauchen Hilfe oder Beratung? Wir helfen Ihnen!</p>
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
      <section class="contact-info">
        <h2>Kontakt</h2>
        <p>
          <a href="https://www.google.com/maps?q=Im Geeren 21, 8112+Otelfingen"
            >Adresse: Im Geeren 21, 8112 Otelfingen</a
          >
        </p>
        <p>
          <a href="mailto: pieramblum@gmail.com"
            >E-mail: pieramblum@gmail.com</a
          >
        </p>
        <p>
          <a href="tel:+41768158112">Telefon +41/76'815'81'12</a>
        </p>
      </section>

      <section class="additional-info">
        <h2>Weitere Informationen</h2>
        <ul>
          <li><a href="sponsor.html">Sponsoren</a></li>
          <li><a href="about.php">Über uns</a></li>
          <a href="about.php#oeffnungszeiten">Öffnungszeiten</a>
        </ul>
      </section>

      <?php include 'get_faq.php'; ?>
        <ul>
          <li>
            <strong>Frage 1:</strong> Wie sind Ihre Öffnungszeiten?
            <p>
              Antwort auf Frage 1: Klicken sie auf denn Link, dann kommen sie zu
              denn Öffnungszeiten:
              <a href="about.php#oeffnungszeiten">Hier: Öffnungszeiten</a>
            </p>
          </li>
          <li>
            <strong>Frage 2:</strong> Welche Produkte bieten Sie an?
            <p>
              Antwort auf Frage 2: Wir bieten viele mögliche Motorräder an, denn
              wir kooperieren mit vielen Motorrd-Marken. Unsere Sponsoren können
              sie <a href="sponsor.html">hier </a> sehen
            </p>
          </li>
          <li>
            <strong>Frage 3:</strong> Ist die Seite kostenlos?
            <p>
              Antwort auf Frage 3: Ja, die Seite ist kostenlos und bietet ihnen
              ausgezeichnete empfehlungen.
            </p>
          </li>
        </ul>
      </section>

  <section>
  <form method="POST" action="insert_faq.php">


<label for="question">Haben sie eine Frage?</label>
<textarea id="question" name="question" rows="4"></textarea>

<button type="submit" name="submit_review">Frage abschicken</button>
</form>

  </section>
    </main>
    <footer>
      <p>&copy; 2024 Road-Rider-Guide</p>
    </footer>
  </body>
</html>

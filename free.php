<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Anfrage Stellen</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header class="fade-in-up">
    <a href="homepage.php">
      <div class="logo">
        <img src="images/Road-Rider-Guide.png" alt="Road Rider Guide Logo" class="logo-img" />
      </div>
    </a>
    <div class="titel">
      <h1>Stellen sie eine Anfrage!</h1>
    </div>
  </header>
  <nav>
    <ul>
      <li><a href="homepage.php">Startseite</a></li>
      <li><a href="about.php">Über uns</a></li>
      <li><a href="contact.html">Kontakt</a></li>
      <li><a href="sponsor.html">Sponsoren</a></li>
      <li><a href="match.html">Passendes Motorrad</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="index.php">Registrieren</a></li>
      <li><a href="benutzer.php">Benutzer & Logout</a></li>
    </ul>
  </nav>
  <main>
    <!-- ... -->
<section>
  <h2>Anfrage Stellen</h2>
  <form method="POST" action="free_process.php">
  <!-- Andere Formularfelder hier -->
  <input type="text" name="bike_name" placeholder="Enter bike name" required>
  <!-- Stellen Sie sicher, dass der Sende-Button den Namen 'submit_review' hat -->
  <button type="submit" name="submit_review">Nachricht senden</button>
</form>
</section>
<!-- ... -->

   
  </main>
  <footer>
    <p>&copy; 2024 Road-Rider-Guide</p>
  </footer>
</body>

</html>
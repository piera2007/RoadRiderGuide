<?php
// Verbindung zur Datenbank herstellen
include 'connection.php'; // Verwenden Sie den korrekten Pfad zur Datei mit den Verbindungsinformationen

// Bewertungen aus der Datenbank abrufen
$query = "SELECT * FROM faq"; // Annahme: Ihre Tabelle für Bewertungen heißt 'reviews'
$statement = $con->prepare($query);
$statement->execute();
$faq = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HTML und PHP für die Anzeige der Bewertungen -->
<style>
  .faqs-box {
    border:  1px solid #ccc; /* Border um die Box */
    padding:  10px; /* Innenabstand */
    margin-bottom:  20px; /* Abstand zwischen den Boxen */
    background-color: #f9f9f9; /* Hintergrundfarbe */
    border-radius:  5px; /* Abrundung der Ecken */
    box-shadow:  0  2px  4px rgba(0,  0,  0,  0.1); /* Schatten */
  }
</style>

<section>
  <h2>Fragen:</h2>
  <?php foreach ($faq as $faqs): ?>
    <div class="faq-box">
      <p>Frage: <?php echo htmlspecialchars($faqs['question']); ?></p>
    </div>
  <?php endforeach; ?>
</section>


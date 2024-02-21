<!-- 
  Author: Piera Blum
  Date: 21.10.2024
  Description: This is a PHP Script that retrieve your faq from the database.
 -->
<?php
// Connect to the database
include 'connection.php';

// Retrieve questions from the database
$query = "SELECT * FROM faq";
$statement = $con->prepare($query);
$statement->execute();
$faq = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HTML und PHP für die Anzeige der Bewertungen -->
<style>
  .faq-box {
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


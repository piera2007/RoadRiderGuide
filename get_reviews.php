<!-- 
  Author: Piera Blum
  Date: 21.10.2024
  Description: This is a PHP Script that retrieve your reviews from the database.
 -->
<?php
// Connect to the database
include 'connection.php';

// Retrieve reviews from the database
$query = "SELECT * FROM reviews";
$statement = $con->prepare($query);
$statement->execute();
$reviews = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HTML und PHP für die Anzeige der Bewertungen -->
<style>
  .review-box {
    border:  1px solid #ccc; /* Border um die Box */
    padding:  10px; /* Innenabstand */
    margin-bottom:  20px; /* Abstand zwischen den Boxen */
    background-color: #f9f9f9; /* Hintergrundfarbe */
    border-radius:  5px; /* Abrundung der Ecken */
    box-shadow:  0  2px  4px rgba(0,  0,  0,  0.1); /* Schatten */
  }
</style>

<section>
  <h2>Bewertungen</h2>
  <?php foreach ($reviews as $review): ?>
    <div class="review-box">
      <p>Bewertung: <?php echo $review['rating']; ?></p>
      <p>Nachricht: <?php echo $review['review_text']; ?></p>
    </div>
  <?php endforeach; ?>
</section>

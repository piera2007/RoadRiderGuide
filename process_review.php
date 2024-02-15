<?php
session_start(); // Start the session to access session variables

include 'connection.php'; // Include your existing connection script

if (isset($_POST['submit_review'])) {
    // Get form data
    $rating = $_POST['rating-input-radio']; // The selected radio button's value
    $reviewText = $_POST['review_text']; // Use 'review_text' instead of 'user_message'
    
    // Retrieve the user ID from the session
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id']; // This should come from your user session or login system
    } else {
        // If the user ID is not set in the session, redirect to the login page
        header("Location: login.php");
        exit();
    }

    // Prepare an INSERT statement for reviews
    $stmtReviews = $con->prepare("INSERT INTO reviews (rating, review_text, user_id) VALUES (?, ?, ?)");
    
    // Bind parameters for reviews
    $stmtReviews->bindParam(1, $rating);
    $stmtReviews->bindParam(2, $reviewText);
    $stmtReviews->bindParam(3, $userId);
    
    // Execute the query for reviews
    if ($stmtReviews->execute()) {
        echo "Bewertung erfolgreich gespeichert.";
        header("Location: about.php");
    } else {
        echo "Fehler beim Speichern der Bewertung.";
    }
}
?>

<?php
session_start(); // Start the session to access session variables

include 'connection.php'; // Include your existing connection script

if (isset($_POST['submit_review'])) {
    // Get form data
    $question = $_POST['question']; // Use 'review_text' instead of 'user_message'
    
    // Retrieve the user ID from the session
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id']; // This should come from your user session or login system
    } else {
        // If the user ID is not set in the session, redirect to the login page
        header("Location: login.php");
        exit();
    }

    // Prepare an INSERT statement for reviews
    $stmtfaq = $con->prepare("INSERT INTO faq (user_id, question, created_at) VALUES (?, ?, NOW())");
    
    // Bind parameters for reviews
    $stmtfaq->bindParam(1, $userId);
    $stmtfaq->bindParam(2, $question);
    
    // Execute the query for reviews
    if ($stmtfaq->execute()) {
        echo "Bewertung erfolgreich gespeichert.";
        header("Location: contact.php");
    } else {
        echo "Fehler beim Speichern der Frage.";
    }
}
?>
	
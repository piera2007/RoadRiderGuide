<?php
session_start(); // Start the session to access session variables

include 'connection.php'; // Include your existing connection script

if (isset($_POST['submit_review'])) {
    // Get form data
    $bike_name = $_POST['bike_name']; // Use 'review_text' instead of 'user_message'
    
    // Retrieve the user ID from the session
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id']; // This should come from your user session or login system
    } else {
        // If the user ID is not set in the session, redirect to the login page
        header("Location: login.php");
        exit();
    }

    // Prepare an INSERT statement for reviews
    $stmtinquiries = $con->prepare("INSERT INTO inquiries (bike_name, user_id, timestamp) VALUES (?, ?, NOW())");
    
    // Bind parameters for reviews
    $stmtinquiries->bindParam(1, $bike_name);
    $stmtinquiries->bindParam(2, $userId);
    
    // Execute the query for reviews
    if ($stmtinquiries->execute()) {
        echo "Bewertung erfolgreich gespeichert.";
        header("Location: free.php");
    } else {
        echo "Fehler beim Speichern der Bewertung.";
    }
}
?>
	
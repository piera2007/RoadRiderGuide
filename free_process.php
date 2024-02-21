<!-- 
  Author: Piera Blum
  Date: 21.10.2024
  Description: This PHP script handles inquiries for motorcycles.
 -->
<?php
session_start();

include 'connection.php';

if (isset($_POST['submit_review'])) {
    // Get form data
    $bike_name = $_POST['bike_name'];
    
    // Retrieve the user ID from the session
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id']; // This should come from my user session or login system
    } else {
        // If the user ID is not set in the session, redirect to the login page
        header("Location: login.php");
        exit();
    }

    // Prepare an INSERT statement for inquiries
    $stmtinquiries = $con->prepare("INSERT INTO inquiries (bike_name, user_id, timestamp) VALUES (?, ?, NOW())");
    
    // Bind parameters for inquiries
    $stmtinquiries->bindParam(1, $bike_name);
    $stmtinquiries->bindParam(2, $userId);
    
    // Execute the query for inquiries
    if ($stmtinquiries->execute()) {
        echo "Bewertung erfolgreich gespeichert.";
        header("Location: match.html");
    } else {
        echo "Fehler beim Speichern der Bewertung.";
    }
}
?>
	
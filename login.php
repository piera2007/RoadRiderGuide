<?php
session_start(); // Start the session

include 'connection.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $con->prepare("SELECT * FROM users WHERE username=:username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $userExists = $stmt->fetchAll();

    if (count($userExists) >  0) {
        $passwordHashed = $userExists[0]["password"];
        $checkPassword = password_verify($password, $passwordHashed);

        if ($checkPassword === true) {
            $_SESSION["username"] = $userExists[0]["username"];
            $_SESSION["id"] = $userExists[0]["id"]; // Store the user ID in the session
            header("Location: homepage.php");
            exit;
        } else {
            // Handle incorrect password
        }
    } else {
        // Handle case where the username does not exist
    }
}
?>


<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <form action="login.php" method="POST">
        <h1>Login</h1>
        <div class="inputs_container">
            <input type="text" placeholder="Benutzername" name="username" autocomplete="off">
            <input type="password" placeholder="Passwort" name="password" autocomplete="off">
        </div>
        <button name="submit">Login</button>
    </form>
    <form action="index.php" method="get">
    <button type="submit">Registrieren</button>
</form>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benutzer & Logout</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <form action="index.php" method="POST">
        <h1>Benutzer & Logout</h1>
        <?php 
        session_start();
        echo $_SESSION["username"];
        ?>
        </div>
        <form action="logout.php" method="post">
            <input type="submit" value="Logout" name="logoutButton" />
        </form>
    </form>
</body>
</html>
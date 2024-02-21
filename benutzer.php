<!-- 
  Author: Piera Blum
  Date: 21.10.2024
  Description: This is a PHP script to see who is logged in or to log out.
 -->
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
        echo '<span class="username">' . $_SESSION["username"] . '</span>';
        ?>

        </div>
        <form action="logout.php" method="post">
            <input type="submit" value="Logout" name="logoutButton" />
        </form>
    </form>
    <form action="homepage.php" method="get">
    <button type="submit">Hauptseite</button>
</form>
</body>
</html>
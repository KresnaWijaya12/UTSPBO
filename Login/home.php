<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .nav {
            margin: 10px 0;
        }
        .nav a {
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>SELAMATT DATANG MAS CEPI :)</h1>
    </header>
    <div class="container">
        <h2>Hello Mas Cepi <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>Haloo, selamat datang di website sayaaa :) </p>
        <div class="nav">
            <a href="about.php">About Us</a> |
            <a href="contact.php">Contact Us</a> |
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
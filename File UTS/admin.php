<?php 

session_start(); 
if($_SESSION['role'] != 'admin') {

    header('Location:./../index.php');
}
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css"/>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang Administrator: <?php echo $_SESSION['name'];?> </h1>
    <a href="./backend/logout.php">Logout</a>
    <a href="./show.php">Create</a>
</body>
</html>
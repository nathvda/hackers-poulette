<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BeCode Project">
    <link rel="stylesheet" href="../public/assets/scss/style.css">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <script defer src="../public/assets/scripts/main.js" type="module"></script>
    <title>Hackers Poulette - Administrative Dashboard</title>
</head>
<body>
    <header>connected as <?php echo (isset($_SESSION['user'])) ? htmlspecialchars($_SESSION['user']) : 'No one'; ?> - <a href="../public/index.php">Back to homepage</a></header>
    <main class="dashboard">
        <aside><h2>Actions</h2></aside>
        <main> <?php include '../includes/_comments.php'; ?></main> 
    </main>
</body>
</html>
<?php
if(!isset($_SESSION['user'])){

    header('Location: ../public/login.php');
    exit();

}
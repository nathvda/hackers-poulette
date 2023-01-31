<?php
session_start();
include '../validator/UserValidator.php';

if(isset($_POST['submit']) && empty($_POST['name']) && empty($_POST['email'])){

    $comm = new UserValidator(['usernamejdke','passwordjdke'], $_POST);
    $comm = $comm->validate();
}

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
    <title>Hackers Poulette - Contact us</title>
</head>
<body>
    <main>
        <h3>Access dashboard</h3>
        <form id="login" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="usernamejdke" class="req">Username</label>
            <input type="text" name="usernamejdke" id="usernamejdke" value="<?php echo $_POST['usernamejdke'] ?? "" ?>" required>
            <?php echo (isset($comm['usernamejdke'])) ? '<span class="error">'.$comm['usernamejdke'].'</span>' :  "" ?>
            <label for="passwordjdke" class="req">Password</label>
            <input type="password" name="passwordjdke" id="passwordjdke" value="<?php echo $_POST['passwordjdke'] ?? "" ?>" required>
            <?php echo (isset($comm['passwordjdke'])) ? '<span class="error">'.$comm['passwordjdke'].'</span>' :  "" ?>
            <!--  hnpt -->
            <label class="hnpt" for="name"></label>
            <input class="hnpt" autocomplete="off" type="text" id="name" name="name" placeholder="Your name here">
            <label class="hnpt" for="email"></label>
            <input class="hnpt" autocomplete="off" type="email" id="email" name="email" placeholder="Your e-mail here">
            <button type="submit" value="submit" name="submit">Submit</button>
        </form>
    </main>
</body>
</html>

<?php

if(isset($_SESSION['user'])){

    header('Location: ../public/index.php');
    exit();

}
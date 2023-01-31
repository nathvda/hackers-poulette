<?php
session_start();
include '../validator/CommentValidator.php';

if(isset($_POST['submit']) && empty($_POST['name']) && empty($_POST['email'])){

    $comm = new Commentvalidator(['lastNamejdke','firstNamejdke','emailjdke','commentjdke'], $_POST);
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
        <h3>Contact us!</h3>
        <form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <?php echo (isset($_POST['submit']) && isset($_SESSION['success'])) ? '<span class="success">' . $_SESSION['success'] . '</span>' : "" ?>
            <label for="lastNamejdke" class="req">lastname</label>
            <input type="text" name="lastNamejdke" id="lastNamejdke" value="<?php echo $_POST['lastNamejdke'] ?? "" ?>" required>
            <?php echo (isset($comm['lastNamejdke'])) ? '<span class="error">'.$comm['lastNamejdke'].'</span>' :  "" ?>
            <label for="firstNamejdke" class="req">firstname</label>
            <input type="text" name="firstNamejdke" id="firstNamejdke" value="<?php echo $_POST['firstNamejdke'] ?? "" ?>" required>
            <?php echo (isset($comm['firstNamejdke'])) ? '<span class="error">'.$comm['firstNamejdke'].'</span>' :  "" ?>
            <label for="emailjdke" class="req">email address</label>
            <input type="text" name="emailjdke" id="emailjdke" value="<?php echo $_POST['emailjdke'] ?? "" ?>" required>
            <?php echo (isset($comm['emailjdke'])) ? '<span class="error">'.$comm['emailjdke'].'</span>' :  "" ?>
            <label for="commentjdke" class="req">comment</label>
            <textarea form="contact" name="commentjdke" id="commentjdke" required><?php echo $_POST['commentjdke'] ?? "" ?></textarea>
            <?php echo (isset($comm['commentjdke'])) ? '<span class="error">'.$comm['commentjdke'].'</span>' :  "" ?>
            <!--  hnpt -->
            <label class="hnpt" for="name"></label>
            <input class="hnpt" autocomplete="off" type="text" id="name" name="name" placeholder="Your name here">
            <label class="hnpt" for="email"></label>
            <input class="hnpt" autocomplete="off" type="email" id="email" name="email" placeholder="Your e-mail here">
            <button type="submit" value="submit" name="submit">Submit</button>
        </form>
        <?php echo (isset($_SESSION['user'])) ? '<a href="../public/logout.php">Log out</a> - <a href="../public/dashboard.php">Dashboard</a>' : '<a href="../public/login.php">Log in</a>'; ?>
        
    </main>
</body>
</html>
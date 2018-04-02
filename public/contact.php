<?php
/**
 * Created by PhpStorm.
 * User: Marie-Anne Toonen (Phinux)
 * Date: 24-3-2018
 * Time: 19:59
 */

$title = "Contact";

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href='css/main.css'>
</head>
<body>
<!-- I use the bootstrap way to center the page-->
<div class='container'>
    <?php
    include("../app/views/header.php");
    include("../app/views/nav.php")
    ?>
    <main>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);

            if(!empty($name) && !empty($email) && !empty($message)){
                echo "<p>Naam: $name </p>";
                echo "<p>Email: $email </p>";
                echo "<p>Bericht: " . htmlspecialchars($message) . "</p>";
            }
        } else {
            ?>
            <form class='form' action='contact.php' method='post'>
                <div>
                    <label for='name'>Name:</label>
                    <input type='text' id='name' name='name'>
                </div>
                <div>
                    <label for='email'>Email:</label>
                    <input type='email' id='email' name='email' placeholder="Enter a valid email address">
                </div>
                <div>
                    <label for='message'>Bericht:</label>
                    <textarea id='message' name='message' rows='5'></textarea>
                </div>
                <input type='submit' value='Verstuur'>
            </form>
        <?php } ?>
    </main>
    <?php
    include("../app/views/footer.php")
    ?>
</div>
</body>
</html>
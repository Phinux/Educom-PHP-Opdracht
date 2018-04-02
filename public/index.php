<?php
/**
 * Created by PhpStorm.
 * User: Marie-Anne Toonen (Phinux)
 * Date: 24-3-2018
 * Time: 19:58
 */
$title = "Home";
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href='css/main.css'
</head>
<body>
<div class="container">
    <?php
    include("../app/views/header.php");
    include("../app/views/nav.php")
    ?>
    <main>
        <h2>Welkom</h2>
        <p>Deze site is een opdracht van Educom als toelatingstest</p>
    </main>
    <?php
    include("../app/views/footer.php")
    ?>
</div>
</body>
</html>
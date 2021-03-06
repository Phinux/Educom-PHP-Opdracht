<?php
/**
 * Created by PhpStorm.
 * User: Marie-Anne Toonen (Phinux)
 * Date: 27-3-2018
 * Time: 10:14
 */

$title = "About";
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>About</title>
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
        <h2>Wie ben ik?</h2>
        <p>Tussen mijn collega programmeurs val ik vaak op door mijn enthousiasme, mijn nieuwsgierigheid en
           vindingrijkheid.
           Op dit moment wil ik graag leren en me verder ontwikkelen in mijn vak. En dan hoop ik op termijn meer te
           kunnen
           gaan doen met mijn vindingrijke kant en het proactief zoeken naar oplossingen. Een van mijn drijfveren is
           (goed)
           samenwerken. Daarom ben ik in een team vaak wel de bindende factor, of het komt gewoon omdat ik anderen graag
           help.
        </p>
        <p>Van jongs af aan ben ik al graag met computers bezig. Daarom ben ik ook in deze vakrichting terechtgekomen.
           Juist
           het programmeren in diverse talen is mijn ding, omdat je daarmee zoveel meer verschillende oplossingen kunt
           bedenken voor een klant dan je met hardware kunt. Ik ben in het programmeren vaak degene die kritisch is op
           de
           beste oplossing voor de klant. Verder denken dan code is dan ook mijn sterke kant.
        </p>
    </main>
    <?php
    include("../app/views/footer.php")
    ?>
</div>
</body>
</html>
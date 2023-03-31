<?php
$page = isset($_GET["page"]) ? $_GET["page"] : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../home/style.css">
    <title>Get Authorized</title>
</head>

<body>
    <header>
        <?php require_once "../navigation/header.php" ?>
    </header>
    <main>
        <aside>
            <?php require_once "submenu.php" ?>
        </aside>
        <aside>
            <?php
            match ($page) {
                default => require_once "login.php"
            };
            ?>
        </aside>
    </main>
</body>

</html>
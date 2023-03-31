<?php
session_start();
$user_id = isset($_SESSION["user_id"]) ? $_SESSION["user_id"] : null;
if (!$user_id) header("Location: /caption_it/auth")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>My Dashboard</h1>
</body>

</html>
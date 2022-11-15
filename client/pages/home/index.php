<?php
require "../../../server/config/connect.php";
session_start();

$userData = $_SESSION["login"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - UJC Community</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
    <link href="../../styles/output.css" rel="stylesheet">
    <script src="../../scripts/js/jquery-3.6.0.js"></script>
    <script src="../../scripts/js/global.js"></script>
</head>

<body class="font-rob">
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="bg-slate-200 h-[calc(100vh-64px)] flex flex-row gap-3">
        <aside class="w-[20%]">
            <?php include "../components/aside.php"; ?>
        </aside>
        <article class="w-[80%]">
            <h1 class="font-bold text-4xl w-fit mx-auto">Feed Noticias</h1>
        </article>
    </main>
</body>

</html>
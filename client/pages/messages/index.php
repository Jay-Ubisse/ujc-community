<?php
require "../../../server/config/connect.php";
session_start();

$userPersonalData = $_SESSION["login"];
$userSocialData = $_SESSION["socialMedia"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens - UJC Community</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
    <link href="../../styles/output.css" rel="stylesheet">
    <script src="../../scripts/js/jquery-3.6.0.js"></script>
    <script src="../../scripts/js/global.js"></script>
    <script src="../../scripts/js/messages.js"></script>
    
</head>

<body>
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="bg-slate-200 h-[calc(100vh-64px)] flex flex-row gap-3">
        <aside class="w-[20%] h-full flex flex-col bg-orange-500 mt-1 px-3">
            <div>
                <a href="../home/">Voltar</a>
            </div>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button onclick="searchBar()"><i class="fas fa-search"></i></button>
            </div>
            <div class="users">
        
            </div>
        </aside>
    </main>
</body>

</html>
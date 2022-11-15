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
    <script src="../../scripts/js/home.js"></script>
</head>

<body class="font-rob">
    <header class="bg-orange-500 h-16 w-full m-0 py-1 px-3 flex flex-row justify-between">
        <section class="w-fit">
            <h1 class="w-1/5 font-bold md:text-lg ml-[2px] mt-2 flex">
                <span class="md:text-3xl text-2xl text-white">UJC</span>
                <span class="bg-white relative md:-top-1 md:ml-2 ml-1 md:p-2 p-1 text-orange-500 rounded-md">Community</span>
            </h1>
        </section>
        <section class="w-fit flex flex-row mt-3">
            <div class="h-fit flex">
                <input type="search" placeholder="pesquisar" class="bg-slate-200 text-slate-700 flex rounded-xl px-3 font-light focus:outline-orange-500 focus:outline-1 outline-transparent" />
                <span><i class="fa-solid fa-magnifying-glass relative -left-8"></i></span>
            </div>
            <div>
                <div id="logoutSection" class="text-white font-bold md:text-lg text-sm hover:text-gray-200 cursor-pointer">
                    <span><?php echo $userData["name"] ?></span>
                    <span><i class="fa-sharp fa-solid fa-caret-down"></i></span>
                </div>
                <div id="logout" class="md:rounded-bl-sm rounded-br-sm z-50 bg-slate-300 text-slate-700 font-bold md:text-sm text-xs">
                    <p><a href="#" class="w-full py-3 m-0 px-2 inline-block hover:bg-orange-500">Definicoes</a></p>
                    <p><a href="../../../server/src/logout-route.php" class="w-full py-3 px-2 m-0 inline-block hover:bg-orange-500">Sair</a></p>
                </div>
            </div>
        </section>
    </header>
    <main class="bg-slate-200 md:h-screen h-[calc(100vh-64px)] flex md:flex-row flex-col-reverse md:place-content-start place-content-between">
        <aside class="md:h-screen md:w-[20%] w-screen md:flex hidden md:flex-col bg-orange-500 mt-1">
            <div class="h-24 w-24 rounded-full bg-slate-200 mx-auto mt-2 md:flex hidden items-center justify-center">
                <strong>FOTO</strong>
            </div>
            <h1 class="text-center text-white font-bold text-lg mt-2 pb-5 border-b md:flex hidden border-b-slate-200">Bem vindo(a), <?php echo $userData["name"] ?></h1>
            <div>
                <h2 class="md:block hidden text-center text-white font-bold text-lg mt-5 mb-5 hover:text-yellow-800 hover:text-2xl transition-transform"><a href="#">Início</a></h2>
                <span class="md:hidden"><a href="#">Hom</a></span>
            </div>
            <div>
                <h2 class="md:block hidden text-center text-white font-bold text-lg mb-5 hover:text-yellow-800  hover:text-2xl transition-transform"><a href="#">Perfil</a></h2>
                <span class="md:hidden"><a href="#">Perf</a></span>
            </div>
            <div>
                <h2 class="md:block hidden text-center text-white font-bold text-lg mb-5 hover:text-yellow-800  hover:text-2xl transition-transform"><a href="#">Notificações</a></h2>
                <span class="md:hidden"><a href="#">Not</a></span>
            </div>
            <div>
                <h1 class="md:block hidden text-center text-white font-bold text-lg mb-5 hover:text-yellow-800  hover:text-2xl transition-transform"><a href="#">Mensagens</a></h1>
                <span class="md:hidden"><a href="#">Msg</a></span>
            </div>
            <div>
                <h2 class="md:block hidden text-center text-white font-bold text-lg mb-5 hover:text-yellow-800  hover:text-2xl transition-transform"><a href="#">Explorar</a></h2>
                <span class="md:hidden"><a href="#">Def</a></span>
            </div>
        </aside>
        <aside class="md:hidden w-screen flex place-content-between p-3 text-white fixed bottom-0 z-50 bg-orange-500 mt-1">
            <span class="md:hidden"><a href="#">Hom</a></span>
            <span class="md:hidden"><a href="#">Perf</a></span>
            <span class="md:hidden"><a href="#">Not</a></span>
            <span class="md:hidden"><a href="#">Msg</a></span>
            <span class="md:hidden"><a href="#">Def</a></span>
        </aside>
        <section>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
            <h1>Conteudo</h1>
        </section>
    </main>
</body>

</html>
<?php
require "../../scripts/php/db_connection/connect.php";
session_start();

$data = $_SESSION["login"];
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
    <link href="../../styles/output.css" rel="stylesheet">
</head>

<body>
    <header class="bg-orange-500 h-16 w-full m-0 p-1 font-rob">
        <h1 class="w-1/5 font-bold md:text-lg md:ml-3 ml-[2px] mt-2 flex">
            <span class="md:text-3xl text-2xl text-white">UJC</span>
            <span class="bg-white relative md:-top-1 md:ml-2 ml-1 md:p-2 p-1 text-orange-500 rounded-md">Community</span>
        </h1>
        <div class="absolute top-3 right-16">
            <input type="search" placeholder="pesquisar" class="bg-slate-200 mt-1 rounded-xl px-3 text-slate-700 font-light focus:outline-orange-500 focus:outline-1 outline-transparent" />
        </div>
        <h3 class="absolute top-3 right-3 text-white font-bold md:text-lg text-sm hover:text-gray-200">
            <a href="#">Sair</a>
        </h3>
    </header>
    <main class="bg-slate-200 md:h-screen h-[calc(100vh-64px)] flex md:flex-row flex-col-reverse md:place-content-start place-content-between font-rob relative">
        <aside class="md:h-screen md:w-[20%] w-screen flex md:flex-col flex-row md:relative fixed z-50 bg-orange-500 mt-1">
            <div class="h-24 w-24 rounded-full bg-slate-200 mx-auto mt-2 flex items-center justify-center">
                <strong>FOTO</strong>
            </div>
            <h1 class="text-center text-white font-bold text-lg mt-2 pb-5 border-b border-b-slate-200">Bem vindo(a), <?php echo $data["name"] ?></h1>
            <div>
                <h2 class="text-center text-white font-bold text-lg mt-5 mb-5 hover:text-yellow-800 hover:text-2xl transition-transform"><a href="#">Início</a></h2>
            </div>
            <div>
                <h2 class="text-center text-white font-bold text-lg mb-5 hover:text-yellow-800  hover:text-2xl transition-transform"><a href="#">Perfil</a></h2>
            </div>
            <div>
                <h2 class="text-center text-white font-bold text-lg mb-5 hover:text-yellow-800  hover:text-2xl transition-transform"><a href="#">Notificações</a></h2>
            </div>
            <div>
                <h1 class="text-center text-white font-bold text-lg mb-5 hover:text-yellow-800  hover:text-2xl transition-transform"><a href="#">Mensagens</a></h1>
            </div>
            <div>
                <h2 class="text-center text-white font-bold text-lg mb-5 hover:text-yellow-800  hover:text-2xl transition-transform"><a href="#">Definições</a></h2>
            </div>
        </aside>
        <section class="md:relative absolute top-0">
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
<?php
require "../../scripts/php/db_connection/connect.php";
session_start();

$data = $_SESSION["login"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - UJC Community</title>
    <link href="../../styles/output.css" rel="stylesheet">
</head>

<body>
    <header class="bg-orange-500 h-16 w-full m-0 p-1">
        <h1 class=" w-1/5 font-bold text-lg ml-3 mt-2 flex"><span class="text-3xl text-white">UJC</span> <span class="bg-white relative -top-1 ml-2 p-2 text-orange-500 rounded-md">Community</span></h1>
        <div class="absolute top-3 right-16 text-white font-semibold">
            <input 
                type="search"
                placeholder="pesquisar"
                class="bg-slate-200 mt-1 rounded-xl px-3 text-slate-700 font-light focus:outline-orange-500 focus:outline-1 outline-transparent"
            /> 
        </div>
        <h3 class="absolute top-3 right-3 text-white font-bold text-lg hover:text-gray-200">
            <a href="#">Sair</a>
        </h3>
    </header>
    <main class="bg-slate-200 h-screen flex">
        <aside class="h-screen w-[20%] bg-orange-500 mt-1">
            <div class="h-24 w-24 rounded-full bg-slate-200 mx-auto mt-2 flex items-center justify-center">
                <strong>FOTO</strong>
            </div>
            <h1 class="text-center text-white font-bold text-lg mt-2 pb-5 border-b border-b-slate-200">Bem vindo(a), <?php echo $data["name"]?></h1>
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
        <section>

        </section>
    </main>
</body>

</html>
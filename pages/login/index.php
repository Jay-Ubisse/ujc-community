<?php
require "../../scripts/php/db_connection/connect.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - UJC Community</title>
    <link href="../../styles/output.css" rel="stylesheet">
    <link href="../../styles/errors.css" rel="stylesheet">
    <script src="../../scripts/js/jquery-3.6.0.js"></script>
    <script src="../../scripts/js/jquery.validate.js"></script>
    <script src="../../scripts/js/signin.js"></script>
</head>

<body>
    <header class="bg-orange-500 h-16 w-full m-0 p-1">
        <h1 class=" w-1/5 font-bold text-lg ml-3 mt-2 flex"><span class="text-3xl text-white">UJC</span> <span class="bg-white relative -top-1 ml-2 p-2 text-orange-500 rounded-md">Community</span></h1>
        <h3 class="absolute top-3 right-[107px] text-white font-semibold">
            <a href="../../">Página Inicial</a>
        </h3>
        <h3 class="absolute top-3 right-16 text-white font-semibold">
            <a href="../faq/">FAQ</a>
        </h3>
        <h3 class="absolute top-3 right-3 text-white font-semibold">
            <a href="../help/">Ajuda</a>
        </h3>
    </header>
    <main class="bg-slate-300 h-screen pt-20">

        <?php

        if (isset($_POST['code']) || isset($_POST['password'])) {
            $_code = $_POST["code"];
            $_password = $_POST["password"];

            $check_query = "SELECT * FROM users where code = $_code";
            $check_result = $dbcon->query($check_query);

            if ($check_result->num_rows == 0) {
                echo "<h2>Código de usuário inválido!</h2>\n";
            } else {
                $row = $check_result->fetch_assoc();
                $_SESSION["login"] = $row;
                $pass = $row['password'];

                if ($pass !== $_password) {
                    echo "<h2>Palavra-passe inválida!</h2>\n";
                } else {
                    header("location: ../home");
                }
            }
            $dbcon->close();
        }
        ?>

        <form method="post" action="index.php" class="bg-slate-400 py-10 w-2/4 mx-auto rounded-md" id="signin">
            <fieldset class="w-fit mx-auto">
                <label for="code" class="font-semibold">Código de estudante</label>
                <input type="number" name="code" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500"><br>
                <label for="password" class="font-semibold">Palavra-Passe</label>
                <input type="password" name="password" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500"><br>
                <div class="w-fit mx-auto my-4">
                    <input type="submit" value="Entrar" class="bg-orange-500 py-1 px-2 rounded-md text-white">
                </div>
                <p class="w-fit mx-auto">Não tem uma conta? <a href="./signup.html" class="text-orange-700 font-semibold">Clique aqui</a> para se registar.</p>
            </fieldset>
        </form>
    </main>
</body>

</html>
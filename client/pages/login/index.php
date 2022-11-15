<?php
require "../../../server/config/connect.php";
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
        <h1 class="w-1/5 font-bold md:text-lg md:ml-3 ml-[2px] mt-2 flex">
            <span class="md:text-3xl text-2xl text-white">UJC</span>
            <span class="bg-white relative md:-top-1 md:ml-2 ml-1 md:p-2 p-1 text-orange-500 rounded-md">Community</span>
        </h1>
        <h3 class="absolute md:top-3 top-4 md:right-[107px] right-[83px] text-white font-semibold md:text-lg text-sm">
            <a href="../../">Página Inicial</a>
        </h3>
        <h3 class="absolute md:top-3 top-4 md:right-16 right-12 text-white font-semibold md:text-lg text-sm">
            <a href="../faq/">FAQ</a>
        </h3>
        <h3 class="absolute md:top-3 top-4 md:right-3 right-1 text-white font-semibold md:text-lg text-sm">
            <a href="../help/">Ajuda</a>
        </h3>
    </header>
    <main class="bg-slate-300 h-screen pt-20">

        <?php

        if (isset($_POST['code']) || isset($_POST['password'])) {
            $_code = $_POST["code"];
            $_password = hash("sha256", $_POST["password"]);

            $check_query = "SELECT * FROM users where code = $_code";
            $check_result = $dbcon->query($check_query);

            if ($check_result->num_rows == 0) {
                echo "<h2>Código de usuário inválido!</h2>\n";
            } else {
                $row = $check_result->fetch_assoc();
                $pass = $row['password'];

                if ($pass !== $_password) {
                    echo "<h2>Palavra-passe inválida!</h2>\n";
                } else {
                    $_SESSION["login"] = $row;
                    header("location: ../home");
                }
            }
            $dbcon->close();
        }
        ?>

        <form method="post" action="index.php" class="bg-slate-400 py-10 md:w-2/4 w-11/12 mx-auto rounded-md" id="signin">
            <fieldset class="md:w-fit w-[89%] mx-auto">
                <label for="code" class="font-semibold md:ml-0 ml-2">Código de estudante</label>
                <input type="number" name="code" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500"><br>
                <label for="password" class="font-semibold md:ml-0 ml-2">Palavra-Passe</label>
                <input type="password" name="password" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500"><br>
                <div class="w-fit mx-auto my-4">
                    <input type="submit" value="Entrar" class="bg-orange-500 py-1 px-2 rounded-md text-white">
                </div>
                <p class="w-fit mx-auto md:text-base text-sm">Não tem uma conta? <a href="../signup/" class="text-orange-700 font-semibold">Clique aqui</a> para se registar.</p>
            </fieldset>
        </form>
    </main>
</body>

</html>
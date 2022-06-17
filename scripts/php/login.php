<?php
require './db_connection/connect.php';

$_code = $_POST["code"];
$_password = $_POST["password"];

$check_query = "SELECT * FROM users where code = $_code";
$check_result = $dbcon->query($check_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - UJC Community</title>
    <link href="../../styles/output.css" rel="stylesheet">
</head>

<body>
    <header class="bg-orange-500 h-16 w-full m-0 p-1">
        <h1 class=" w-1/5 font-bold text-lg ml-3 mt-2 flex"><span class="text-3xl text-white">UJC</span> <span class="bg-white relative -top-1 ml-2 p-2 text-orange-500 rounded-md">Community</span></h1>
        <h3 class="absolute top-3 right-[107px] text-white font-semibold">
            <a href="../index.html">Página Inicial</a>
        </h3>
        <h3 class="absolute top-3 right-16 text-white font-semibold">
            <a href="./faq.html">FAQ</a>
        </h3>
        <h3 class="absolute top-3 right-3 text-white font-semibold">
            <a href="./help.html">Ajuda</a>
        </h3>
    </header>
    <main>
        <?php

            if ($check_result->num_rows == 0) {
                echo "<h2>Código de usuário inválido!</h2>\n";
            } else {
                $row = $check_result->fetch_assoc();
                $pass = $row['password'];

                if ($pass !== $_password) {
                    echo "<h2>Palavra-passe inválida!</h2>\n";
                } else {
                    echo "Bem-vindo(a) " . $row["name"];
                }
            }
            $dbcon->close();

        ?>
    </main>

</body>

</html>
<?php
require './db_connection/connect.php';

$_name = $_POST["name"];
$_code = $_POST["code"];
$_email = $_POST["email"];
$_course = $_POST["course"];
$_level = $_POST["level"];
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
            <a href="../../index.html">Página Inicial</a>
        </h3>
        <h3 class="absolute top-3 right-16 text-white font-semibold">
            <a href="../../pages/faq.html">FAQ</a>
        </h3>
        <h3 class="absolute top-3 right-3 text-white font-semibold">
            <a href="../../pages/help.html">Ajuda</a>
        </h3>
    </header>
    <main class="bg-slate-300 min-h-screen p-1">
        <section class="bg-slate-500 p-3 mt-16 w-1/3 mx-auto">
        <section class="bg-transparent border-solid border-2 border-orange-500 m-3 p-3 text-center flex flex-col gap-3">
            <?php
                if ($check_result->num_rows > 0) {
                    echo "<h2 class='text-lg font-bold'>Código de estudante já registrado!</h2>\n";
                    echo "<p class='text-sm'>
                            <a href=\"../../pages/signup.html\" class='text-slate-200'>Cique aqui</a> para voltar a tentar.
                            Se já tem uma conta, <a href=\"../../pages/login.html\" class='text-slate-200'>cique aqui</a> para entrar.
                        </p>\n";
                } else {
                    $save_query = "INSERT INTO users (code, name, email, course, level, password) 
                                    VALUES ($_code, '$_name', '$_email', '$_course', '$_level', PASSWORD('$password'))";
                    $check_result = $dbcon->query($save_query);
                    echo "<h2 class='text-lg font-bold'>Registrado com sucesso!</h2>\n";
                    echo "<p class='text-sm'><a href=\"../../pages/login.html\" class='text-slate-200'>Cique aqui</a> para entrar.</p>\n";
                }
                $dbcon->close();
            ?>
        </section>
        </section>        
    </main>

</body>

</html>
<?php
    require "../../scripts/php/db_connection/connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - UJC Community</title>
    <link href="../../styles/output.css" rel="stylesheet">
    <link href="../../styles/errors.css" rel="stylesheet">
    <script src="../../scripts/js/jquery-3.6.0.js"></script>
    <script src="../../scripts/js/jquery.validate.js"></script>
    <script src="../../scripts/js/signup.js"></script>
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
    <main class="bg-slate-300 h-screen pt-10">
        <?php

            if(isset($_POST['code']) || isset($_POST['password'])) {
                $_name = $_POST["name"];
                $_code = $_POST["code"];
                $_email = $_POST["email"];
                $_course = $_POST["course"];
                $_level = $_POST["level"];
                $_password = $_POST["password"];

                $check_query = "SELECT * FROM users where code = $_code";
                $check_result = $dbcon->query($check_query);

                if ($check_result->num_rows > 0) {
                ?>
                    <div class='bg-green-400 rounded-md w-1/3 mx-auto py-4 mb-2 flex flex-col items-center'>
                        <h2 class='text-lg font-bold'>Código de estudante já registrado!</h2>
                        <p class='text-sm'>
                            Tente de novo. Se já tem uma conta, <a href="../login/" class='text-slate-200'>cique aqui</a> para entrar.
                        </p>
                    </div>
                <?php
                } else {
                    $save_query = "INSERT INTO users (code, name, email, course, level, password) 
                                    VALUES ($_code, '$_name', '$_email', '$_course', '$_level', '$_password')";
                    $check_result = $dbcon->query($save_query);
                ?>
                    <div class='bg-green-400 rounded-md w-1/3 mx-auto py-4 mb-2 flex flex-col items-center'>
                        <h2 class='text-lg font-bold'>Registrado com sucesso!</h2>
                        <p class='text-sm'><a href="../login/" class='text-slate-200'>Cique aqui</a> para entrar.</p>
                    </div>
                <?php
                }
                $dbcon->close();
            }
        ?>
        <form method="post" action="index.php" class="bg-slate-400 py-10 md:w-2/4 w-11/12 mx-auto rounded-md" id="signup">
            <fieldset class="md:w-fit w-[89%] mx-auto">
                <label for="name" class="font-semibold md:ml-0 ml-2">Nome</label>
                <input type="text" name="name" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500"><br>
                <label for="code" class="font-semibold md:ml-0 ml-2">Código de estudante</label>
                <input type="number" name="code" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500"><br>
                <label for="email" class="font-semibold md:ml-0 ml-2">Email</label>
                <input type="email" name="email" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500"><br>
                <label for="course" class="font-semibold md:ml-0 ml-2">Curso</label>
                <select name="course" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500">
                    <option value="rid">AP</option>
                    <option value="ap">ETSI</option>
                    <option value="etsi">RID</option>
                </select><br>
                <label for="level" class="font-semibold md:ml-0 ml-2">Ano</label>
                <select name="level" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500">
                    <option value="first">1º ano</option>
                    <option value="second">2º ano</option>
                    <option value="third">3º ano</option>
                    <option value="forth">4º ano</option>
                </select><br>
                <label for="password" class="font-semibold md:ml-0 ml-2">Palavra-Passe</label>
                <input type="password" name="password" id="password" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500"><br>
                <label for="confirmpassword" class="font-semibold md:ml-0 ml-2">Confirmar Palavra-Passe</label>
                <input type="password" name="confirmpassword" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500">
                <div class="w-fit mx-auto my-4">
                    <input type="submit" value="Registar-se" class="bg-orange-500 py-1 px-2 rounded-md text-white">
                    <input type="reset" value="Repor" class="bg-orange-500 py-1 px-2 rounded-md text-white">
                </div>
                <p class="w-fit mx-auto md:text-base text-sm">Já tem uma conta? <a href="../login/" class="text-orange-700 font-semibold">Clique aqui</a> entrar.</p>
            </fieldset>

        </form>
    </main>
</body>

</html>
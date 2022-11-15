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
    <title><?php echo $userPersonalData["name"] . " - UJC COmmunity"; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
    <link href="../../styles/output.css" rel="stylesheet">
    <script src="../../scripts/js/jquery-3.6.0.js"></script>
    <script src="../../scripts/js/global.js"></script>
</head>
<body>
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="bg-slate-200 h-[calc(100vh-64px)] flex flex-row gap-3">
        <aside class="w-[20%]">
            <?php include "../components/aside.php"; ?>
        </aside>
        <article class="w-[80%] p-1 overflow-scroll">
            <h1 class="w-fit mx-auto font-bold text-3xl my-5">Editar dados</h1>
            <form method="post" action="" class="w-11/12 mx-auto">
                <fieldset>
                    <legend class="font-bold text-xl mb-4">Dados pessoais</legend>
                    <table class=" w-fit mx-auto">
                    <tr>
                        <td>
                            Nome
                        </td>
                        <td>
                            <input type="text" name="name" value="<?php echo $userPersonalData["name"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            email
                        </td>
                        <td>
                            <input type="text" name="name" value="<?php echo $userPersonalData["email"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Celular
                        </td>
                        <td>
                            <input type="text" name="name" value="<?php echo $userPersonalData["cell1"]; ?>"><br>
                            <input type="text" name="name" value="<?php echo $userPersonalData["cell2"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Curso
                        </td>
                        <td>
                            <select name="course" value="<?php echo $userPersonalData["course"]; ?>" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500">
                                <option value="<?php echo $userPersonalData["course"]; ?>" selected><?php echo strtoupper($userPersonalData["course"]); ?></option>
                                <option value="ap">AP</option>
                                <option value="etsi">ETSI</option>
                                <option value="rid">RID</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ano
                        </td>
                        <td>
                            <select name="level" class="mb-3 ml-2 bg-slate-200 rounded-sm px-2 focus:outline-orange-500">
                                <option value="first">1º ano</option>
                                <option value="second">2º ano</option>
                                <option value="third">3º ano</option>
                                <option value="forth">4º ano</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           Bio
                        </td>
                        <td>
                            <textarea rows="10" cols="60"><?php echo $userPersonalData["bio"]; ?></textarea>
                        </td>
                </table>
                </fieldset>
                <fieldset>
                    <legend class="font-bold text-xl mb-4">Contactos</legend>
                </fieldset>
                <input type="submit" value="Guardar" class="bg-orange-500 text-white font-semibold py-2 px-5 rounded-md mt-3 cursor-pointer">
            </form>
        </article>
    </main>
</body>
</html>
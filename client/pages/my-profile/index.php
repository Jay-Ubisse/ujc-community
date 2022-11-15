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

<body class="font-rob">
    <header>
        <?php include "../components/header.php"; ?>
    </header>
    <main class="bg-slate-200 h-[calc(100vh-64px)] flex flex-row gap-3">
        <aside class="w-[20%]">
            <?php include "../components/aside.php"; ?>
        </aside>
        <article class="w-[80%] p-1 overflow-scroll">
            <div class="w-4/5 mx-auto mt-5">
                <section class="flex flex-row gap-5">
                    <div class="h-36 w-36 rounded-full bg-black text-slate-200 mt-2 flex  items-center justify-center">
                        <strong>FOTO</strong>
                    </div>
                    <div class="mt-5">
                        <h1 class="font-bold text-2xl mt-2 pb-3 border-b border-b-slate-200"><?php echo $userPersonalData["name"] ?></h1>
                        <p class="text-base font-medium">
                            <?php
                                    switch ($userPersonalData["course"]) {
                                        case 'etsi':
                                            echo "Engenharia em Tecnologias e Sistemas de Informação";
                                            break;
                                        case 'ap':
                                            echo "Administração Pública";
                                            break;
                                        case 'rid':
                                            echo "Relações Internacionais e Diplomacia";
                                            break;
                                        default:
                                            echo "";
                                            break;
                                    }
                                ?>
                        </p>
                        <p class="text-sm font-medium">
                            <?php
                                switch ($userPersonalData["level"]) {
                                    case 'first':
                                        echo "Primeiro ano";
                                        break;
                                    case 'second':
                                        echo "Segundo ano";
                                        break;
                                    case 'third':
                                        echo "Terceiro ano";
                                        break;
                                    case 'forth':
                                        echo "Quarto ano";
                                        break;
                                    default:
                                        echo "";
                                        break;
                                }
                            ?>
                        </p>
                        <button class="bg-orange-500 text-white font-semibold py-2 px-5 rounded-md mt-3"><a href="../edit-profile/">Editar perfil</a></button>
                    </div>
                </section>
                <!-- about section -->
                <section class="mt-10">
                    <h1 class="bg-slate-500 text-slate-200 w-full text-center text-lg font-semibold mb-5">Sobre mim</h1>
                    <p class="text-black text-justify w-11/12 mx-auto">
                        <?php echo $userPersonalData["bio"]; ?>
                    </p>
                </section>
                <!-- contacts section -->
                <section class="mt-10">
                    <h1 class="bg-slate-500 text-slate-200 w-full text-center text-lg font-semibold mb-5">Meus contactos</h1>
                    <table class="w-11/12 mx-auto">
                        <tr>
                            <td class="py-3 font-semibold text-base">
                                Celular
                            </td>
                            <td class="py-3 font-normal text-base">
                                <?php echo $userPersonalData["cell1"]; ?><br>
                                <?php echo $userPersonalData["cell2"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 font-semibold text-base">
                                email
                            </td>
                            <td class="py-3 font-normal text-base">
                                <?php echo $userPersonalData["email"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 font-semibold text-base">
                                Facebook
                            </td>
                            <td class="py-3 font-normal text-base">
                                <a href="<?php echo $userSocialData["facebook-url"]; ?>"><?php echo $userSocialData["facebook-url"]; ?></a>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 font-semibold text-base">
                                Twitter
                            </td>
                            <td class="py-3 font-normal text-base">
                            <a href="<?php echo $userSocialData["twitter-url"]; ?>"><?php echo $userSocialData["twitter-url"]; ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 font-semibold text-base">
                                Instagram
                            </td>
                            <td class="py-3 font-normal text-base">
                                <a href="<?php echo $userSocialData["instagram-url"]; ?>"><?php echo $userSocialData["instagram-url"]; ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 font-semibold text-base">
                                Youtube
                            </td>
                            <td class="py-3 font-normal text-base">
                                <a href="<?php echo $userSocialData["youtube-url"]; ?>"><?php echo $userSocialData["youtube-url"]; ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 font-semibold text-base">
                                GitHub
                            </td>
                            <td class="py-3 font-normal text-base">
                                <a href="<?php echo $userSocialData["github-url"]; ?>"><?php echo $userSocialData["github-url"]; ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 font-semibold text-base">
                                Medium
                            </td>
                            <td class="py-3 font-normal text-base">
                                <a href="<?php echo $userSocialData["medium-url"]; ?>"><?php echo $userSocialData["medium-url"]; ?></a>
                            </td>
                        </tr>
                    </table>
                </section>
            </div>
        </article>
    </main>
</body>

</html>
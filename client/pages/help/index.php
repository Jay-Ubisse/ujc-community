<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda - UJC Community</title>
    <link href="../../styles/output.css" rel="stylesheet">
</head>

<body>
    <header class="bg-orange-500 md:h-16 h-14 w-full m-0 p-1">
        <h1 class="w-1/5 font-bold md:text-lg md:ml-3 ml-1 mt-2 flex">
            <span class="md:text-3xl text-2xl text-white">UJC</span>
            <span class="bg-white relative md:-top-1 ml-2 md:p-2 p-1 text-orange-500 rounded-md">Community</span>
        </h1>
        <h3 class="absolute md:top-3 top-4 md:right-16 right-14 text-white font-semibold md:text-lg text-sm">
            <a href="../../">Página Inicial</a>
        </h3>
        <h3 class="absolute md:top-3 top-4 right-3 text-white font-semibold md:text-lg text-sm">
            <a href="../faq/">FAQ</a>
        </h3>
    </header>
    <main class="bg-slate-300 min-h-screen p-1">
        <form class="md:w-1/3 w-11/12 bg-slate-400 mt-10 mx-auto py-10 rounded-md">
            <fieldset class="w-[80%] flex flex-col gap-2 mx-auto">
                <label for="name" class="font-semibold">Nome</label>
                <input type="text" name="name" class="bg-slate-200 rounded-sm px-2 focus:outline-orange-500">
                <label for="email" class="font-semibold">Email</label>
                <input type="email" name="email" class="bg-slate-200 rounded-sm px-2 focus:outline-orange-500">
                <label for="msg" class="font-semibold">Mensagem</label>
                <textarea name="msg" cols="5" rows="5" class="bg-slate-200 rounded-sm px-2 focus:outline-orange-500" placeholder="No que podemos ajudar?"></textarea>
                <div>
                    <input type="submit" value="Enviar" class="bg-orange-500 py-1 px-2 rounded-md text-white">
                    <input type="reset" value="repor" class="bg-orange-500 py-1 px-2 rounded-md text-white">
                </div>
            </fieldset>
        </form>
    </main>

</body>

</html>
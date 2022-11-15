<div class="h-full flex flex-col bg-orange-500 mt-1 px-3">
    <div class="h-24 w-24 rounded-full bg-slate-200 mx-auto mt-2 md:flex hidden items-center justify-center">
        <strong>FOTO</strong>
    </div>
    <h1 class="text-center text-white font-bold text-lg mt-2 pb-5 border-b border-b-slate-200 w-11/12 mx-auto"><?php echo $userPersonalData["name"] ?></h1>
    <table class="w-fit mx-auto mt-6 text-white text-lg">
        <tr class="hover:text-orange-800 hover:text-xl transition-transform">
            <td>
                <span class="h-fit"><i class="fa-solid fa-house"></i></span>
            </td>
            <td>
                <h2 class="font-bold m-4"><a href="../home/">Início</a></h2>
            </td>
        </tr>
        <tr class="hover:text-orange-800 hover:text-xl transition-transform">
            <td>
                <span><i class="fa-solid fa-user"></i></span>
            </td>
            <td>
                <h2 class="font-bold m-4"><a href="../my-profile/">Perfil</a></h2>
            </td>
        </tr>
        <tr class="hover:text-orange-800 hover:text-xl transition-transform">
            <td>
                <span><i class="fa-solid fa-bell"></i></span>
            </td>
            <td>
                <h2 class="font-bold m-4"><a href="#">Notificações</a></h2>
            </td>
        </tr>
        <tr class="hover:text-orange-800 hover:text-xl transition-transform">
            <td>
                <span><i class="fa-solid fa-envelope"></i></span>
            </td>
            <td>
                <h1 class="font-bold m-4"><a href="#">Mensagens</a></h1>
            </td>
        </tr>
        <tr class="hover:text-orange-800 hover:text-xl transition-transform">
            <td >
                <span><i class="fa-solid fa-hashtag"></i></span>
            </td>
            <td>
                 <h2 class="font-bold m-4"><a href="#">Explorar</a></h2>
            </td>
        </tr>
    </table>
</div>
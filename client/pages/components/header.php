<div class="bg-orange-500 h-16 w-full m-0 py-1 px-3 flex flex-row justify-between">
        <section class="w-fit">
            <h1 class="w-1/5 font-bold md:text-lg ml-[2px] mt-2 flex">
                <span class="md:text-3xl text-2xl text-white">UJC</span>
                <span class="bg-white relative md:-top-1 md:ml-2 ml-1 md:p-2 p-1 text-orange-500 rounded-md">Community</span>
            </h1>
        </section>
        <section class="w-fit flex flex-row mt-3">
            <div class="h-fit flex">
                <input type="search" placeholder="pesquisar" class="bg-slate-200 text-slate-700 flex rounded-xl px-3 font-light focus:outline-orange-500 focus:outline-1 outline-transparent" />
                <span><i class="fa-solid fa-magnifying-glass relative -left-8"></i></span>
            </div>
            <div>
                <div id="logoutSection" class="text-white font-bold md:text-lg text-sm hover:text-gray-200 cursor-pointer">
                    <span><?php echo $userPersonalData["name"]; ?></span>
                    <span><i class="fa-sharp fa-solid fa-caret-down"></i></span>
                </div>
                <div id="logout" class="md:rounded-bl-sm rounded-br-sm z-50 bg-slate-300 text-slate-700 font-bold md:text-sm text-xs">
                    <p><a href="../../../server/src/logout-route.php" class="w-full h-full py-3 m-0 px-2 inline-block hover:bg-orange-500">Sair</a></p>
                </div>
            </div>
        </section>
</div>
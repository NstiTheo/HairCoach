<?php
$paginaAtual = basename($_SERVER["PHP_SELF"]);
?>

<!-- HEADER -->
<header class="absolute top-0 left-0 w-full z-50 bg-transparent backdrop-blur-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">

        <!-- LOGO + NOME -->
        <div class="flex items-center gap-3 lg:flex-1">
            <a href="index.php" class="-m-1.5 p-1.5 flex items-center gap-2">
                <img src="logo_haircoach.png" alt="Logo" class="h-8 w-auto" />

                <span
                    class="text-xl font-bold bg-gradient-to-r from-blue-500 to-purple-500 bg-clip-text text-transparent tracking-wide">
                    HairCoach
                </span>
            </a>
        </div>

        <!-- MENU -->
        <div class="hidden lg:flex lg:gap-x-12 items-center">

            <a href="home.php" class="text-sm font-semibold transition
                <?= $paginaAtual == "dashboard.php"
                    ? "text-blue-500"
                    : "text-gray-900 dark:text-white hover:text-blue-500" ?>">
                📊 Principal
            </a>

            <a href="sobre-projeto.php" class="text-sm font-semibold transition
                <?= $paginaAtual == "esterilizacao.php"
                    ? "text-blue-500"
                    : "text-gray-900 dark:text-white hover:text-blue-500" ?>">
                🌿 Sobre o Projeto
            </a>

            <a href="funcionalidades.php" class="text-sm font-semibold transition
                <?= $paginaAtual == "produtos.php"
                    ? "text-blue-500"
                    : "text-gray-900 dark:text-white hover:text-blue-500" ?>">
                🚀 Funcionalidades
            </a>

        </div>

        <!-- RELATÓRIOS -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="cadastrar.php" class="text-sm font-semibold px-4 py-2 rounded-lg transition shadow
                <?= $paginaAtual == "relatorios.php"
                    ? "bg-150 text-blue"
                    : "bg-500 text-blue hover:bg-white-600" ?>">
                CADASTRA-SE
            </a> &nbsp;
            <a href="login.php" class="text-sm font-semibold px-4 py-2 rounded-lg transition shadow
                <?= $paginaAtual == "relatorios.php"
                    ? "bg-blue-600 text-white"
                    : "bg-blue-500 text-white hover:bg-blue-600" ?>">
                ENTRAR
            </a>
        </div>


    </nav>
</header>
<?php
$paginaAtual = basename($_SERVER["PHP_SELF"]);
?>

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


        <!-- MENU PRINCIPAL -->
        <div class="hidden lg:flex lg:gap-x-10 items-center">

            <a href="dashboard.php" class="text-sm font-semibold transition
<?= $paginaAtual == "dashboard.php"
    ? "text-blue-500"
    : "text-gray-900 dark:text-white hover:text-blue-500" ?>">
                📊 Dashboard
            </a>

            <a href="sobre-projeto2.php" class="text-sm font-semibold transition
<?= $paginaAtual == "sobre-projeto2.php"
    ? "text-blue-500"
    : "text-gray-900 dark:text-white hover:text-blue-500" ?>">
                🌿 Sobre
            </a>

            <a href="funcionalidades2.php" class="text-sm font-semibold transition
<?= $paginaAtual == "funcionalidades2.php"
    ? "text-blue-500"
    : "text-gray-900 dark:text-white hover:text-blue-500" ?>">
                🚀 Funcionalidades
            </a>


            <!-- FERRAMENTAS -->
            <div class="relative group">

                <button
                    class="flex items-center gap-1 text-sm font-semibold text-gray-900 dark:text-white hover:text-blue-500 transition">
                    🧰 Ferramentas
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>


                <!-- DROPDOWN -->
                <div class="absolute left-0 top-full pt-2 w-72
opacity-0 invisible
group-hover:opacity-100 group-hover:visible
transition duration-200
z-50">

                    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-xl
p-4 border border-gray-100 dark:border-gray-800">

                        <ul class="flex flex-col gap-2 text-sm">

                            <li>
                                <a href="clientes.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    👥 Clientes
                                </a>
                            </li>

                            <li>
                                <a href="prescricao.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    🛍️ Prescrição de Produtos
                                </a>
                            </li>

                            <li>
                                <a href="financeiro.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    💰 Financeiro
                                </a>
                            </li>

                            <hr class="my-2 border-gray-200 dark:border-gray-700">

                            <li>
                                <a href="diagnostico.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    🩺 Diagnóstico Capilar
                                </a>
                            </li>

                            <li>
                                <a href="semaforo.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    🚦 Semáforo da Química
                                </a>
                            </li>

                            <li>
                                <a href="cores.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    🎨 Caminho das Cores
                                </a>
                            </li>

                            <li>
                                <a href="misturas.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    🧪 Calculadora de Misturas
                                </a>
                            </li>

                            <li>
                                <a href="homecare.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    🏠 Home Care
                                </a>
                            </li>

                            <hr class="my-2 border-gray-200 dark:border-gray-700">

                            <li>
                                <a href="biblioteca.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    📚 Biblioteca Técnica
                                </a>
                            </li>

                            <li>
                                <a href="cursos.php"
                                    class="block p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                                    🎓 Cursos
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

        </div>


        <!-- BOTÕES DIREITA -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-3">

            <a href="relatorios.php" class="text-sm font-semibold px-4 py-2 rounded-lg transition shadow-sm
<?= $paginaAtual == "relatorios.php"
    ? "bg-purple-500 text-white"
    : "bg-purple-100 text-purple-700 hover:bg-purple-200" ?>">
                📈 Relatórios
            </a>

            <a href="configuracoes.php" class="text-sm font-semibold px-4 py-2 rounded-lg transition shadow-sm
<?= $paginaAtual == "configuracoes.php"
    ? "bg-blue-500 text-white"
    : "bg-blue-100 text-blue-700 hover:bg-blue-200" ?>">
                ⚙️ Configurações
            </a>

        </div>

    </nav>
</header>
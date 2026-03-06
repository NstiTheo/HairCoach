<?php
// cadastrar.php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta • HairCoach</title>

    <!-- Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-white dark:bg-gray-900">

    <div class="min-h-screen flex flex-col">

        <!-- HEADER -->
        <?php include("header.php"); ?>

        <br>
        <br>

        <!-- MAIN -->
        <main class="flex-1 relative isolate px-6 pt-24 lg:px-8 flex items-center justify-center">

            <!-- FUNDO GRADIENTE -->
            <div aria-hidden="true"
                class="pointer-events-none absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">

                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-1/2 aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-30 bg-gradient-to-tr from-blue-400 to-indigo-400 opacity-30 sm:w-[72rem]">
                </div>

            </div>

            <!-- CARD CADASTRO -->

            <div class="w-full max-w-md bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8">

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-6">
                    Criar Conta
                </h2>

                <form method="POST" action="cadastrar-processar.php" class="space-y-4">

                    <!-- NOME -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">
                            Nome completo
                        </label>

                        <input type="text" name="nome" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600
bg-white dark:bg-gray-900 text-gray-900 dark:text-white
focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>

                    <!-- EMAIL -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">
                            Email
                        </label>

                        <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600
bg-white dark:bg-gray-900 text-gray-900 dark:text-white
focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>

                    <!-- CPF -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">
                            CPF
                        </label>

                        <input type="text" name="cpf" required placeholder="000.000.000-00" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600
bg-white dark:bg-gray-900 text-gray-900 dark:text-white
focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>

                    <!-- SENHA -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">
                            Senha
                        </label>

                        <input type="password" name="senha" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600
bg-white dark:bg-gray-900 text-gray-900 dark:text-white
focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>

                    <!-- CONFIRMAR -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">
                            Confirmar senha
                        </label>

                        <input type="password" name="confirmar" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600
bg-white dark:bg-gray-900 text-gray-900 dark:text-white
focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>

                    <!-- BOTÃO -->
                    <button class="w-full py-3 rounded-lg font-semibold text-white
bg-gradient-to-r from-blue-500 to-indigo-500
hover:from-blue-600 hover:to-indigo-600 transition">

                        Criar Conta

                    </button>

                </form>

                <!-- LINK LOGIN -->

                <p class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400">

                    Já possui uma conta?

                    <a href="login.php" class="text-blue-500 font-semibold hover:underline">
                        Entrar
                    </a>

                </p>

            </div>

        </main>

        <br>
        <br>

        <!-- FOOTER -->
        <?php include("footer.php"); ?>

    </div>

</body>

</html>
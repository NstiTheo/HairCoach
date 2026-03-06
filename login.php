<?php
// login.php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar • HairCoach</title>

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

            <!-- CARD LOGIN -->

            <div class="w-full max-w-md bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8">

                <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-6">
                    Entrar no HairCoach
                </h2>

                <form method="POST" action="login-processar.php" class="space-y-4">

                    <!-- EMAIL -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">
                            Email
                        </label>

                        <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600
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

                    <!-- OPTIONS -->
                    <div class="flex items-center justify-between text-sm">

                        <label class="flex items-center gap-2 text-gray-600 dark:text-gray-300">
                            <input type="checkbox">
                            Lembrar
                        </label>

                        <a href="#" class="text-blue-500 hover:underline">
                            Esqueceu a senha?
                        </a>

                    </div>

                    <!-- BOTÃO LOGIN -->
                    <a href="dashboard.php">
                        <button class="w-full py-3 rounded-lg font-semibold text-white
bg-gradient-to-r from-blue-500 to-indigo-500
hover:from-blue-600 hover:to-indigo-600 transition">

                            Entrar

                        </button>

                    </a>

                </form>

                <!-- DIVISOR -->

                <div class="flex items-center gap-4 my-6">

                    <div class="flex-1 h-px bg-gray-200 dark:bg-gray-700"></div>

                    <span class="text-sm text-gray-500">ou</span>

                    <div class="flex-1 h-px bg-gray-200 dark:bg-gray-700"></div>

                </div>

                <!-- SOCIAL LOGIN -->

                <div class="space-y-3">

                    <!-- GOOGLE -->

                    <button class="w-full flex items-center justify-center gap-3
border border-gray-300 dark:border-gray-600
py-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition">

                        <svg width="20" height="20" viewBox="0 0 48 48">
                            <path fill="#EA4335"
                                d="M24 9.5c3.3 0 6.3 1.2 8.6 3.2l6.4-6.4C34.7 2.6 29.7 0 24 0 14.7 0 6.7 5.5 2.9 13.4l7.5 5.8C12.2 13.3 17.6 9.5 24 9.5z" />
                            <path fill="#4285F4"
                                d="M46.1 24.5c0-1.6-.1-3.1-.4-4.5H24v9h12.5c-.5 2.8-2.1 5.1-4.5 6.6l7 5.4c4.1-3.8 6.5-9.3 6.5-16.5z" />
                            <path fill="#FBBC05"
                                d="M10.4 28.8c-.5-1.4-.8-2.9-.8-4.3s.3-2.9.8-4.3l-7.5-5.8C1 17.2 0 20.5 0 24s1 6.8 2.9 9.6l7.5-5.8z" />
                            <path fill="#34A853"
                                d="M24 48c6.5 0 11.9-2.1 15.9-5.7l-7-5.4c-2 1.4-4.6 2.2-8.9 2.2-6.4 0-11.8-3.8-13.6-9.7l-7.5 5.8C6.7 42.5 14.7 48 24 48z" />
                        </svg>

                        Entrar com Google

                    </button>

                    <!-- APPLE -->

                    <button class="w-full flex items-center justify-center gap-3
bg-black text-white py-3 rounded-lg hover:bg-gray-900 transition">

                        <svg width="18" height="18" viewBox="0 0 384 512">
                            <path fill="currentColor"
                                d="M318.7 268.7c-.2-49.6 40.6-73.4 42.4-74.5-23.1-33.7-59-38.3-71.8-38.8-30.5-3.1-59.6 17.9-75.1 17.9-15.5 0-39.4-17.5-64.8-17-33.4.5-64.2 19.4-81.4 49.4-34.7 60.2-8.9 149.3 24.9 198.1 16.5 23.8 36.2 50.6 62.1 49.6 25-.9 34.4-16.1 64.6-16.1 30.2 0 38.7 16.1 65.1 15.6 26.9-.5 43.9-24.4 60.3-48.3 18.9-27.6 26.6-54.4 26.9-55.8-.6-.3-51.6-19.8-51.8-78.1z" />
                        </svg>

                        Entrar com Apple

                    </button>

                </div>

            </div>

        </main>


        <br>
        <br>

        <!-- FOOTER -->
        <?php include("footer.php"); ?>

    </div>

</body>

</html>
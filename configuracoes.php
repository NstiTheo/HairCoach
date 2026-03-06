<?php
// configuracoes.php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Configurações • HairCoach</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        /* CARD BASE */

        .settings-card {
            background: linear-gradient(145deg, #ffffff, #f9fafb);
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            transition: 0.4s;
        }

        .settings-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 30px 70px rgba(99, 102, 241, 0.25);
        }


        /* MENU LATERAL */

        .settings-menu button {
            width: 100%;
            text-align: left;
            padding: 12px 16px;
            border-radius: 10px;
            font-weight: 500;
            transition: 0.3s;
        }

        .settings-menu button:hover {
            background: #eef2ff;
        }

        .settings-menu button.active {
            background: #6366f1;
            color: white;
        }


        /* INPUTS */

        .input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: white;
            transition: 0.2s;
        }

        .input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
        }
    </style>

</head>


<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 text-gray-900">

    <div class="min-h-screen flex flex-col relative">


        <!-- FUNDO GRADIENTE -->
        <div aria-hidden="true"
            class="pointer-events-none absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">

            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="relative left-1/2 aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-30
bg-gradient-to-tr from-blue-400 to-indigo-400 opacity-30 sm:w-[72rem]">
            </div>

        </div>


        <!-- HEADER -->
        <?php include("header2.php"); ?>


        <main class="flex-1 max-w-7xl mx-auto px-6 pt-32 pb-20">


            <!-- TÍTULO -->

            <div class="mb-12">

                <h1 class="text-4xl font-bold">
                    Configurações
                </h1>

                <p class="text-gray-600 mt-2">
                    Gerencie sua conta, preferências e segurança do sistema.
                </p>

            </div>



            <div class="grid lg:grid-cols-4 gap-10">




                <!-- MENU LATERAL -->

                <div class="settings-menu flex flex-col gap-2">

                    <button class="active" onclick="showTab(event,'perfil')">
                        👤 Perfil
                    </button>

                    <button onclick="showTab(event,'seguranca')">
                        🔒 Segurança
                    </button>

                    <button onclick="showTab(event,'preferencias')">
                        ⚙ Preferências
                    </button>

                    <button onclick="showTab(event,'aparencia')">
                        🎨 Aparência
                    </button>

                    <button onclick="showTab(event,'notificacoes')">
                        🔔 Notificações
                    </button>

                    <button onclick="showTab(event,'conta')">
                        🗑 Conta
                    </button>

                </div>




                <!-- CONTEÚDO -->

                <div class="lg:col-span-3">


                    <!-- PERFIL -->

                    <div id="perfil" class="settings-card tab">

                        <h3 class="text-xl font-bold mb-6">
                            Informações do Perfil
                        </h3>

                        <div class="grid md:grid-cols-2 gap-6">

                            <div>
                                <label class="text-sm text-gray-500">Nome</label>
                                <input class="input mt-1" placeholder="Seu nome">
                            </div>

                            <div>
                                <label class="text-sm text-gray-500">Email</label>
                                <input class="input mt-1" placeholder="email@email.com">
                            </div>

                            <div>
                                <label class="text-sm text-gray-500">Telefone</label>
                                <input class="input mt-1" placeholder="(00) 00000-0000">
                            </div>

                            <div>
                                <label class="text-sm text-gray-500">Salão / Empresa</label>
                                <input class="input mt-1" placeholder="Nome do salão">
                            </div>

                        </div>

                        <button class="mt-6 bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                            Salvar Alterações
                        </button>

                    </div>




                    <!-- SEGURANÇA -->

                    <div id="seguranca" class="settings-card tab hidden">

                        <h3 class="text-xl font-bold mb-6">
                            Segurança da Conta
                        </h3>

                        <div class="space-y-4">

                            <div>
                                <label class="text-sm text-gray-500">Senha atual</label>
                                <input type="password" class="input mt-1">
                            </div>

                            <div>
                                <label class="text-sm text-gray-500">Nova senha</label>
                                <input type="password" class="input mt-1">
                            </div>

                            <div>
                                <label class="text-sm text-gray-500">Confirmar senha</label>
                                <input type="password" class="input mt-1">
                            </div>

                        </div>

                        <button class="mt-6 bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                            Atualizar Senha
                        </button>

                    </div>




                    <!-- PREFERENCIAS -->

                    <div id="preferencias" class="settings-card tab hidden">

                        <h3 class="text-xl font-bold mb-6">
                            Preferências do Sistema
                        </h3>

                        <div class="space-y-4">

                            <label class="flex items-center gap-3">
                                <input type="checkbox">
                                Mostrar recomendações automáticas
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox">
                                Ativar assistente técnico
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox">
                                Salvar histórico de diagnósticos
                            </label>

                        </div>

                    </div>




                    <!-- APARÊNCIA -->

                    <div id="aparencia" class="settings-card tab hidden">

                        <h3 class="text-xl font-bold mb-6">
                            Aparência do Sistema
                        </h3>

                        <div class="grid md:grid-cols-3 gap-4">

                            <button class="p-4 rounded-lg border hover:border-indigo-500">
                                Claro
                            </button>

                            <button class="p-4 rounded-lg border hover:border-indigo-500">
                                Escuro
                            </button>

                            <button class="p-4 rounded-lg border hover:border-indigo-500">
                                Automático
                            </button>

                        </div>

                    </div>




                    <!-- NOTIFICAÇÕES -->

                    <div id="notificacoes" class="settings-card tab hidden">

                        <h3 class="text-xl font-bold mb-6">
                            Notificações
                        </h3>

                        <div class="space-y-4">

                            <label class="flex items-center gap-3">
                                <input type="checkbox">
                                Alertas de risco químico
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox">
                                Relatórios semanais
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox">
                                Atualizações do sistema
                            </label>

                        </div>

                    </div>




                    <!-- CONTA -->

                    <div id="conta" class="settings-card tab hidden">

                        <h3 class="text-xl font-bold mb-6 text-red-600">
                            Zona de Perigo
                        </h3>

                        <p class="text-gray-600 mb-6">
                            Excluir sua conta removerá todos os dados do sistema permanentemente.
                        </p>

                        <button class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700">
                            Excluir Conta
                        </button>

                    </div>



                </div>

            </div>


        </main>


        <?php include("footer.php"); ?>

    </div>


    <script>

        function showTab(event, tabId) {

            document.querySelectorAll(".tab").forEach(tab => {
                tab.classList.add("hidden")
            })

            document.getElementById(tabId).classList.remove("hidden")

            document.querySelectorAll(".settings-menu button").forEach(btn => {
                btn.classList.remove("active")
            })

            event.target.classList.add("active")

        }

    </script>


</body>

</html>
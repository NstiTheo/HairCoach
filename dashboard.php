<?php
// dashboard.php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard • HairCoach</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        /* CARDS DASHBOARD */

        .dashboard-card {
            background: linear-gradient(145deg, #ffffff, #f9fafb);
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            transition: 0.4s;
            position: relative;
            overflow: hidden;
        }

        .dashboard-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #06b6d4, #6366f1);
            opacity: 0;
            transition: 0.4s;
        }

        .dashboard-card:hover::before {
            opacity: 0.08;
        }

        .dashboard-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 70px rgba(99, 102, 241, 0.25);
        }


        /* ATALHOS */

        .quick-card {
            background: white;
            padding: 20px;
            border-radius: 16px;
            border: 1px solid #e5e7eb;
            transition: 0.3s;
        }

        .quick-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }


        /* LISTAS */

        .activity-item {
            padding: 14px 18px;
            border-radius: 12px;
            background: #f9fafb;
            margin-bottom: 12px;
            transition: 0.3s;
        }

        .activity-item:hover {
            background: #eef2ff;
            transform: translateX(6px);
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


        <!-- DASHBOARD -->
        <main class="flex-1 max-w-7xl mx-auto px-6 pt-32 pb-20">



            <!-- TÍTULO -->
            <div class="mb-12">

                <h1 class="text-4xl font-bold">
                    Painel do Profissional
                </h1>

                <p class="text-gray-600 mt-2">
                    Controle seus diagnósticos, clientes e decisões técnicas.
                </p>

            </div>



            <!-- CARDS ESTATÍSTICAS -->

            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 mb-14">

                <div class="dashboard-card">

                    <p class="text-sm text-gray-500">Clientes Atendidos</p>

                    <h3 class="text-3xl font-bold mt-2">
                        128
                    </h3>

                    <p class="text-green-500 text-sm mt-2">
                        +12 este mês
                    </p>

                </div>


                <div class="dashboard-card">

                    <p class="text-sm text-gray-500">Diagnósticos Realizados</p>

                    <h3 class="text-3xl font-bold mt-2">
                        89
                    </h3>

                    <p class="text-blue-500 text-sm mt-2">
                        Sistema ativo
                    </p>

                </div>


                <div class="dashboard-card">

                    <p class="text-sm text-gray-500">Procedimentos Seguros</p>

                    <h3 class="text-3xl font-bold mt-2">
                        73
                    </h3>

                    <p class="text-indigo-500 text-sm mt-2">
                        Sem risco estrutural
                    </p>

                </div>


                <div class="dashboard-card">

                    <p class="text-sm text-gray-500">Alertas Químicos</p>

                    <h3 class="text-3xl font-bold mt-2">
                        4
                    </h3>

                    <p class="text-red-500 text-sm mt-2">
                        Atenção necessária
                    </p>

                </div>

            </div>



            <!-- ATALHOS -->

            <h2 class="text-2xl font-bold mb-6">
                Ferramentas Rápidas
            </h2>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 mb-16">


                <a href="#" class="quick-card">

                    <h3 class="font-semibold text-lg">
                        🩺 Novo Diagnóstico
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Registrar análise capilar completa.
                    </p>

                </a>


                <a href="#" class="quick-card">

                    <h3 class="font-semibold text-lg">
                        🎨 Simulador de Cores
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Planeje transformações seguras.
                    </p>

                </a>


                <a href="#" class="quick-card">

                    <h3 class="font-semibold text-lg">
                        🧪 Calculadora de Mistura
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Proporções técnicas de descoloração.
                    </p>

                </a>


                <a href="#" class="quick-card">

                    <h3 class="font-semibold text-lg">
                        🏠 Gerar Home Care
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Orientações pós-procedimento.
                    </p>

                </a>

            </div>



            <!-- GRID INFERIOR -->

            <div class="grid lg:grid-cols-2 gap-10">


                <!-- ATIVIDADES -->

                <div class="dashboard-card">

                    <h3 class="text-xl font-bold mb-6">
                        Atividades Recentes
                    </h3>

                    <div class="activity-item">
                        Diagnóstico realizado para cliente <b>Maria Silva</b>
                    </div>

                    <div class="activity-item">
                        Simulação de coloração nível 7 → 10
                    </div>

                    <div class="activity-item">
                        Procedimento liberado após teste de mecha
                    </div>

                    <div class="activity-item">
                        Relatório capilar exportado em PDF
                    </div>

                </div>



                <!-- ALERTAS -->

                <div class="dashboard-card">

                    <h3 class="text-xl font-bold mb-6">
                        Alertas do Sistema
                    </h3>

                    <div class="activity-item text-yellow-600">
                        ⚠ Cliente Ana possui histórico químico recente
                    </div>

                    <div class="activity-item text-red-500">
                        🚫 Risco de quebra em descoloração
                    </div>

                    <div class="activity-item text-green-600">
                        ✔ Procedimento seguro liberado
                    </div>

                </div>

            </div>


        </main>


        <!-- FOOTER -->
        <?php include("footer.php"); ?>


    </div>

</body>

</html>
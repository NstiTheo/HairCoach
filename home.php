<?php
// index.php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão Sistem</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        /* ===============================
           TÍTULOS COM LINHA GRADIENTE
        =============================== */
        .section-title {
            font-size: 32px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            color: #111827;
        }

        .section-title::after {
            content: "";
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #01a1f2ff, #6366f1);
            display: block;
            margin: 15px auto 0;
            border-radius: 20px;
            transition: 0.4s ease;
        }

        .section-title:hover::after {
            width: 140px;
        }

        /* ===============================
           CARDS FUNCIONALIDADES
        =============================== */
        .feature-card {
            background: linear-gradient(145deg, #ffffff, #f9fafb);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            transition: all 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #06eefbff, #6366f1);
            opacity: 0;
            transition: 0.5s ease;
        }

        .feature-card:hover::before {
            opacity: 0.08;
        }

        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 35px 90px rgba(99, 102, 241, 0.25);
        }

        .feature-card h3 {
            transition: 0.4s ease;
        }

        .feature-card:hover h3 {
            background: linear-gradient(90deg, #b303ffff, #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ===============================
           BENEFITS CARDS
        =============================== */
        .benefits {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }

        .benefits>div {
            background: linear-gradient(145deg, #ffffff, #f9fafb);
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            transition: all 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        .benefits>div::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #ec4899, #6366f1);
            opacity: 0;
            transition: 0.5s ease;
        }

        .benefits>div:hover::before {
            opacity: 0.08;
        }

        .benefits>div:hover {
            transform: translateY(-15px);
            box-shadow: 0 35px 90px rgba(236, 72, 153, 0.25);
        }

        .benefits>div:hover h3 {
            background: linear-gradient(90deg, #ec4899, #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ===============================
           RESULTADOS
        =============================== */
        .result-item {
            background: linear-gradient(145deg, #ffffff, #f9fafb);
            padding: 18px 25px;
            margin-bottom: 18px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            font-weight: 500;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .result-item::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, #ec4899, #6366f1);
            opacity: 0;
            transition: 0.4s ease;
        }

        .result-item:hover::before {
            opacity: 0.06;
        }

        .result-item:hover {
            transform: translateX(10px);
            box-shadow: 0 20px 50px rgba(99, 102, 241, 0.25);
            color: #6366f1;
        }
    </style>
</head>

<body class="text-gray-900 bg-gradient-to-br from-blue-50 via-white to-indigo-50">

    <div class="min-h-screen flex flex-col relative">

        <!-- FUNDO GLOBAL -->
        <div aria-hidden="true"
            class="pointer-events-none absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">

            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="relative left-1/2 aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-30 
            bg-gradient-to-tr from-blue-400 to-indigo-400 opacity-30 sm:w-[72rem]">
            </div>
        </div>

        <!-- HEADER -->
        <?php include("header.php"); ?>

        <!-- HERO -->
        <section class="pt-40 pb-24 relative">

            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

                <div>
                    <h1 class="text-5xl font-bold leading-tight">
                        Diagnóstico Inteligente e Seguro para Transformações Capilares
                    </h1>

                    <p class="mt-6 text-lg text-gray-600">
                        Registre análises técnicas, simule riscos químicos e tome decisões seguras
                        antes de qualquer procedimento.
                    </p>

                    <div class="mt-8 flex gap-4 flex-wrap">
                        <a href="dashboard.php"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-md transition">
                            Testar Agora
                        </a>

                        <a href="funcionalidades.php"
                            class="border border-gray-300 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                            Ver Funcionalidades
                        </a>
                    </div>
                </div>

                <!-- MOCKUP COMPLETO MANTIDO -->
                <div>
                    <div
                        class="bg-white shadow-2xl rounded-2xl p-6 border border-gray-200 hover:scale-105 transition duration-500">

                        <div class="flex justify-between items-center mb-6">
                            <span class="text-sm font-semibold">Painel Inteligente</span>
                            <span class="text-xs text-indigo-500 font-semibold">🧠 Análise Ativa</span>
                        </div>

                        <div class="mb-4">
                            <p class="text-xs text-gray-500 mb-2">Diagnóstico Capilar</p>
                            <div class="bg-gray-100 p-3 rounded-lg text-sm space-y-1">
                                <p>Porosidade: Média</p>
                                <p>Elasticidade: Normal</p>
                                <p>Histórico Químico: Progressiva</p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="text-xs text-gray-500 mb-2">Nível de Risco Químico</p>
                            <div class="flex items-center gap-2 mb-1">
                                <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                                <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                <div class="w-4 h-4 bg-gray-300 rounded-full"></div>
                            </div>
                            <p class="text-xs text-green-500 font-semibold">
                                Seguro para tonalização
                            </p>
                        </div>

                        <div class="bg-indigo-50 p-3 rounded-lg">
                            <p class="text-xs text-gray-500">Sugestão do Sistema</p>
                            <p class="text-sm font-semibold">
                                Aguardar 15 dias antes de descoloração.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- RESULTADOS -->
        <section class="py-24 bg-gradient-to-b from-blue-0 to-indigo-50">
            <h2 class="section-title">Resultados Reais</h2>
            <div class="max-w-3xl mx-auto">
                <div class="result-item">✔ Aumente seu ticket médio</div>
                <div class="result-item">✔ Reduza retrabalho por erro químico</div>
                <div class="result-item">✔ Fidelize clientes com método</div>
                <div class="result-item">✔ Trabalhe com respaldo técnico</div>
            </div>
        </section>

        <!-- CTA FINAL -->
        <section class="py-20 bg-gradient-to-b from-indigo-50 via-blue-200 to-[#0f1123]-100 text-gray-900 text-center">
            <div class="max-w-3xl mx-auto px-6">

                <h2 class="text-3xl font-bold">
                    Transforme a gestão do seu salão hoje mesmo.
                </h2>

                <p class="mt-4 text-lg">
                    Profissionalize seus processos e aumente a confiança dos seus clientes.
                </p>

                <a href="dashboard.php"
                    class="mt-8 inline-block bg-white text-blue-600 font-semibold px-8 py-3 rounded-lg shadow hover:bg-gray-100 transition">
                    Começar Agora
                </a>

            </div>
        </section>

        <!-- FOOTER -->
        <?php include("footer.php"); ?>

    </div>
</body>

</html>
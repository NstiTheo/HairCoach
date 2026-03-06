<?php
// funcionalidades.php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Funcionalidades - HairCoach</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
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
            background: linear-gradient(90deg, #01a1f2, #6366f1);
            display: block;
            margin: 15px auto 0;
            border-radius: 20px;
            transition: .4s;
        }

        .section-title:hover::after {
            width: 140px;
        }

        /* CARD FUNCIONALIDADES */

        .feature-card {
            background: linear-gradient(145deg, #ffffff, #f9fafb);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .08);
            transition: .4s;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #00d4ff, #6366f1);
            opacity: 0;
            transition: .4s;
        }

        .feature-card:hover::before {
            opacity: .08;
        }

        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 35px 90px rgba(99, 102, 241, .25);
        }

        .feature-card:hover h3 {
            background: linear-gradient(90deg, #00a6ff, #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

</head>

<body class="text-gray-900 bg-gradient-to-br from-blue-50 via-white to-indigo-50">

    <div class="min-h-screen flex flex-col relative">

        <!-- FUNDO DECORATIVO -->
        <div aria-hidden="true"
            class="pointer-events-none absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">

            <div style="clip-path: polygon(74.1% 44.1%,100% 61.6%,97.5% 26.9%,85.5% 0.1%,80.7% 2%,72.5% 32.5%,60.2% 62.4%,52.4% 68.1%,47.5% 58.3%,45.2% 34.5%,27.5% 76.7%,0.1% 64.9%,17.9% 100%,27.6% 76.8%,76.1% 97.7%,74.1% 44.1%)"
                class="relative left-1/2 aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-30
bg-gradient-to-tr from-blue-400 to-indigo-400 opacity-30 sm:w-[72rem]">
            </div>

        </div>

        <!-- HEADER -->
        <?php include("header2.php"); ?>



        <!-- HERO -->

        <section class="pt-40 pb-24 text-center">

            <div class="max-w-4xl mx-auto px-6">

                <h1 class="text-5xl font-bold">
                    ⚙ Funcionalidades do HairCoach
                </h1>

                <p class="mt-6 text-xl text-gray-600">
                    Tecnologia aplicada à tricologia para transformar o cabeleireiro
                    em um verdadeiro consultor capilar.
                </p>

            </div>

        </section>



        <!-- FUNCIONALIDADES -->

        <section class="py-20 bg-gradient-to-b from-blue-0 to-indigo-50">

            <div class="max-w-7xl mx-auto px-6">

                <h2 class="section-title">Ferramentas do Sistema</h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <?php

                    $funcionalidades = [

                        [
                            "🩺",
                            "Scanner de Diagnóstico Capilar",
                            "Anamnese guiada baseada em tricologia que avalia porosidade, elasticidade, espessura do fio, couro cabeludo e histórico químico."
                        ],

                        [
                            "🎨",
                            "Simulador Caminho das Cores",
                            "Ferramenta de apoio à colorimetria que analisa cor atual, cor desejada e fundo de clareamento necessário."
                        ],

                        [
                            "🏠",
                            "Calculadora de Home Care",
                            "Geração automática de recomendações pós-procedimento com rotina de cuidados personalizada."
                        ],

                        [
                            "📚",
                            "Biblioteca Técnica",
                            "Conteúdo educativo com explicações sobre processos químicos capilares para profissionais e clientes."
                        ],

                        [
                            "🚦",
                            "Semáforo da Química",
                            "Sistema visual que avalia riscos químicos indicando bloqueio, alerta ou liberação para procedimentos."
                        ],

                        [
                            "🛍️",
                            "Prescrição Digital",
                            "Registro de recomendações e lista personalizada de produtos para venda consultiva."
                        ],

                        [
                            "🧪",
                            "Calculadora de Misturas",
                            "Auxilia na proporção correta entre pó descolorante e OX para maior segurança química."
                        ],

                        [
                            "🎓",
                            "Atualização Profissional",
                            "Área de aprendizado com vídeos técnicos, tendências e dicas profissionais."
                        ],

                        [
                            "💎",
                            "Sistema de Fidelidade",
                            "Pontuação para clientes recorrentes incentivando tratamentos e fidelização."
                        ],

                        [
                            "💰",
                            "Relatórios de Rentabilidade",
                            "Análise de lucro por procedimento, ticket médio e custo de produtos."
                        ]
                    ];

                    foreach ($funcionalidades as $f) {

                        echo "

<div class='feature-card'>

<div class='text-4xl mb-4'>$f[0]</div>

<h3 class='text-xl font-bold mb-3'>$f[1]</h3>

<p class='text-gray-600 text-sm'>$f[2]</p>

</div>

";

                    }

                    ?>

                </div>

            </div>

        </section>

        <!-- FOOTER -->

        <?php include("footer.php"); ?>

    </div>

</body>

</html>
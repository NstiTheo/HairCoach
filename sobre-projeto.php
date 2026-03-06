<?php
// sobre-projeto.php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o Projeto - HairCoach</title>

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
            background: linear-gradient(90deg, #01a1f2ff, #6366f1);
            display: block;
            margin: 15px auto 0;
            border-radius: 20px;
            transition: 0.4s ease;
        }

        .section-title:hover::after {
            width: 140px;
        }

        .card-box {
            background: linear-gradient(145deg, #ffffff, #f9fafb);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            transition: 0.4s ease;
        }

        .card-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 35px 90px rgba(99, 102, 241, 0.2);
        }
    </style>
</head>

<body class="text-gray-900 bg-gradient-to-br from-blue-50 via-white to-indigo-50">

    <div class="min-h-screen flex flex-col relative">

        <!-- FUNDO DECORATIVO -->
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
        <section class="pt-40 pb-20 text-center">
            <div class="max-w-4xl mx-auto px-6">
                <h1 class="text-5xl font-bold">
                    🌿 HairCoach
                </h1>
                <p class="mt-4 text-xl text-gray-600">
                    A ciência do embelezamento na palma da sua mão
                </p>
            </div>
        </section>

        <!-- SOBRE -->
        <section class="py-10">
            <div class="max-w-5xl mx-auto px-6">
                <h2 class="section-title">Sobre o Projeto</h2>

                <div class="card-box text-lg text-gray-700 leading-relaxed">
                    <p>
                        O <strong>HairCoach</strong> é um sistema web profissional desenvolvido para transformar o
                        cabeleireiro em um consultor técnico capilar.
                    </p>
                    <p class="mt-4">
                        A plataforma une tricologia, ética profissional e tecnologia, oferecendo ferramentas para
                        diagnóstico,
                        orientação de tratamentos, segurança química e gestão estratégica do salão.
                    </p>
                    <p class="mt-4">
                        Este projeto foi desenvolvido com foco educacional e profissional, alinhado aos princípios de
                        qualidade do Serviço Nacional de Aprendizagem Comercial.
                    </p>
                </div>
            </div>
        </section>

        <!-- OBJETIVO -->
        <section class="py-20 bg-gradient-to-b from-blue to-blue-50">
            <div class="max-w-5xl mx-auto px-6">
                <h2 class="section-title">Objetivo</h2>

                <div class="grid md:grid-cols-2 gap-8">
                    <?php
                $objetivos = [
                    "Elevar a autoridade do profissional",
                    "Oferecer segurança técnica e jurídica",
                    "Melhorar a experiência do cliente",
                    "Estruturar o atendimento de forma científica",
                    "Transformar o salão em um negócio estratégico",
                    "Sistema em desenvolvimento..."
                ];

                foreach ($objetivos as $obj) {
                    echo "<div class='card-box'>✔ $obj</div>";
                }
                ?>
                </div>
            </div>
        </section>

        <!-- DIFERENCIAIS -->
        <section class="py-20 bg-gradient-to-b from-blue-50 to-indigo-50">
            <div class="max-w-5xl mx-auto px-6 text-center">
                <h2 class="section-title">Diferenciais</h2>

                <div class="grid md:grid-cols-2 gap-8 text-left">
                    <div class="card-box">🧠 Abordagem científica baseada em tricologia</div>
                    <div class="card-box">⚖ Foco em ética profissional</div>
                    <div class="card-box">📄 Segurança jurídica com registro de anamnese</div>
                    <div class="card-box">🎓 Atendimento consultivo e educativo</div>
                    <div class="card-box">✨ Interface moderna e intuitiva</div>
                    <div class="card-box">⏳ Sistema em desenvolvimento...</div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <?php include("footer.php"); ?>

    </div>

</body>

</html>
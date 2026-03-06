<style>
    /* ===============================
   FOOTER
================================ */

    .footer {
        background: #0f1123;
        color: #ffffff;
        padding-top: 60px;
        font-family: 'Segoe UI', sans-serif;
    }

    .footer-container {
        max-width: 1200px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 40px;
        padding: 0 20px 40px 20px;
    }

    .footer h2 {
        font-size: 22px;
        margin-bottom: 15px;
        background: linear-gradient(90deg, #6a5cff, #00c2ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .footer h3 {
        margin-bottom: 15px;
        font-size: 16px;
        color: #b5b8ff;
    }

    .footer p {
        font-size: 14px;
        line-height: 1.6;
        color: #cccccc;
    }

    .footer ul {
        list-style: none;
    }

    .footer ul li {
        margin-bottom: 10px;
    }

    .footer ul li a {
        text-decoration: none;
        color: #cccccc;
        font-size: 14px;
        transition: 0.3s;
    }

    .footer ul li a:hover {
        color: #6a5cff;
    }

    .footer-bottom {
        border-top: 1px solid #1b1e38;
        text-align: center;
        padding: 20px;
        font-size: 13px;
        color: #888;
    }

    /* CONTATO FOOTER */

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .contact-item i {
        color: #6a5cff;
        font-size: 16px;
    }
</style>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<footer class="footer">
    <div class="footer-container">

        <!-- Logo e descrição -->
        <div class="footer-brand">
            <h2>🌿 HairCoach</h2>
            <p>
                A ciência do embelezamento na palma da sua mão.
                Transformando cabeleireiros em consultores técnicos capilares.
            </p>
        </div>

        <!-- Navegação -->
        <div class="footer-links">
            <h3>Navegação</h3>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="funcionalidades.php">Funcionalidades</a></li>
                <li><a href="sobre-projeto.php">Sobre</a></li>
                <li><a href="login.php">Entrar</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>

        <!-- Recursos -->
        <div class="footer-links">
            <h3>Recursos</h3>
            <ul>
                <li><a href="#">Diagnóstico Capilar</a></li>
                <li><a href="#">Simulador de Cores</a></li>
                <li><a href="#">Semáforo da Química</a></li>
                <li><a href="#">Relatórios</a></li>
            </ul>
        </div>

        <!-- Contato -->
        <div class="footer-contact">
            <h3>Contato</h3>

            <p class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                contato@haircoach.com
            </p>

            <p class="contact-item">
                <i class="fa-brands fa-instagram"></i>
                @haircoach
            </p>

            <p class="contact-item">
                <i class="fa-solid fa-headset"></i>
                Seg–Sex • 09h às 18h
            </p>
        </div>

    </div>

    <!-- Linha inferior -->
    <div class="footer-bottom">
        <p>© 2026 HairCoach. Todos os direitos reservados.</p>
    </div>
</footer>
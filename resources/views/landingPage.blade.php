<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <title>Alimente</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo do corpo */
        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
        }
        html{
            scroll-behavior: smooth;
        }

        /* Barra de navegação */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            z-index: 100;
        }

        /* Estilo da logo */
        nav .logo {
            height: 55px;
        }

        /* Estilo dos links de navegação */
        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
            margin-top: 5px;
        }

        nav .button-nav{
            padding: 6px 25px;
            font-size: 18px;
            color: #fff;
            background-color: #3c64e7;
            border-radius: 5px;
            border: none;
            margin-left: 10px;
        }

        nav .button-nav:hover{
            background-color: #3c64b8;
        }

        nav .button-nav a{
            text-decoration: none;
            color: #fff;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #333;
            text-decoration: none;
            font-size: 20px;
            position: relative;
            transition: all 0.3s ease;
        }

        /* Linha ao passar o mouse nos links da navegação */
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #ccc;
            bottom: -5px;
            left: 0;
            transition: width 0.3s ease;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        /*Container do conteúdo principal ------------------------------------------------------------------------------------------------------*/
        .main-content {
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 50px;
            background: url('img/capa.jpg') no-repeat center center/cover;
        }

        /* Texto do conteúdo principal */
        .main-content .text-box {
            color: white;
            max-width: 500px;
        }

        .main-content h1 {
            font-size: 110px;
            margin-bottom: 20px;
        }

        .main-content p {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .main-content .underline {
            width: 150px;
            height: 5px;
            background-color: #fff;
            margin-bottom: 20px;
        }

        /* Seção "Sobre Nós" -----------------------------------------------------------------------------------------------------------------------------*/
        .about-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
            background-color: #f9f9f9;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
            max-width: 1400px;
            width: 100%;
        }

        .about-content img {
            max-width: 600px;
            width: 45%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-text {
            max-width: 55%;
        }

        .about-text h2 {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .about-text p {
            font-size: 20px;
            line-height: 1.8;
            color: #333;
        }

        .about-text .underline {
            width: 150px;
            height: 5px;
            background-color: #58695f;
            margin-bottom: 20px;
        }

        /* Seção invertida (do sobre nós)*/
        .about-section.inverted .about-content {
            flex-direction: row-reverse;
        }


        /* Rolagem suave */
        html {
            scroll-behavior: smooth;
        }
        
         /* Escolha o Time Alimente-----------------------------------------------------------------------------------------------------------*/
        .section-features {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px 0;
            background-color: #f8f8f8;
            min-height: 100vh;
        }
        .features-title {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        .features-title::after {
            content: '';
            display: block;
            width: 150px;
            height: 4px;
            background-color: #58695f;
            margin: 10px auto 0 auto;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
        }
        .features-row {
        display: flex;
        justify-content: center;
        gap: 10px; /*espaçamento entre os itens */
        width: 100%;
        }
        .feature-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 30%; /* Mantém a proporção das colunas */
            margin-bottom: 30px;
        }
        .feature-item span {
            display: inline-flex; /* Mantém o span em linha, mas permite centralizar conteúdo */
            justify-content: center; /* Centraliza horizontalmente */
            display: block;
            font-size: 30px;
            font-weight: bold;
            color: white;
            margin-bottom: 35px;
            background-color: #ff5500; /* Cor da bolinha */
            border-radius: 100%; 
            width: 60px; /*largura e altura sejam iguais */
            height: 60px; /*largura e altura sejam iguais */
        }
        .feature-item h3 {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .feature-item p {
            font-size: 16px;
            color: #666;
        }

        /*Participe das nossas Campanhas----------------------------------------------------------------------------------------------------*/
        .card-section {
        background: url('img/capa.jpg') no-repeat center center/cover;
        border-radius: 10px;
        display: flex;
        justify-content: space-between; /* Espaço entre os cards */
        flex-wrap: wrap; 
        max-width: 1500px; /* Largura máxima*/
        margin: 0 auto; /* Centraliza*/
        padding: 20px; /* Espaçamento*/
        gap: 23px;
        }

        .card {
            background-color: white; /* Fundo branco para os cards */
            border-radius: 10px; /* Cantos arredondados */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve para os cards */
            flex: 0 1 30%; 
            height: 300px; /* Defina uma altura fixa */
            margin: 10px; /* Margem ao redor de cada card */
            overflow: hidden; /* Esconde qualquer conteúdo que extrapole o card */
            transition: transform 0.3s; 
            text-align: center; 
        }

        .card:hover {
            transform: scale(1.05); /* Aumenta o card ao passar o mouse */
        }

        .card-image {
            width: 100px; /* Defina uma largura fixa */
            height: 100px; /* Defina uma altura fixa igual à largura para manter a forma circular */
            object-fit: cover; /* Cobre o espaço da imagem mantendo a proporção */
            border-radius: 50%; /* Faz a imagem ficar redonda */
            margin: 20px auto; /* Centraliza a imagem dentro do card */
            display: block; 
            border: 3px solid #58695f; 
        }

        .card-content {
            padding: 15px; /* Espaçamento dentro do conteúdo do card */
        }

        .card-content h3 {
            font-size: 28px; 
            margin-bottom: 10px;
        }

        .card-content p {
            font-size: 18px; 
            color: #666; 
        }

        /*Participe da nossas campanhas-------------------------------------------------------------------------------------------------------------------*/
        #campanhas {
            padding: 50px 0;
            background-color: #f9f9f9;
            text-align: center;
        }

        #campanhas h2 {
            color: Black;
            font-size: 2.5em;
            margin-bottom: 50px;
        }

        .campanhas-container {
            display: flex;
            justify-content: center;
            gap: 40px;
        }

        .card-campanha {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            width: 300px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            transform: rotate(-3deg);
            transition: transform 0.3s ease;
        }

        .card-campanha:hover {
            transform: rotate(0deg);
        }

        .card-campanha img {
            width: 100%;
            border-radius: 20px;
            margin-bottom: 20px;
        }

        .card-campanha h3 {
            color:#58695f;
        }

        .card-campanha p {
            color: #555;
        }

        .card-campanha button {
            background-color: #58695f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: bold;
        }
        
        /*Imagens criativas-------------------------------------------------------------------------------------------------------------*/
        #imagens-criativas {
            padding: 50px 0;
            text-align: center;
        }

        .imagens-container {
            display: flex;
            justify-content: center;
            gap: 170px; /* Aumentando o espaço entre as imagens */
        }

        .imagem-criativa {
            position: relative;
            width: 300px;  
            height: 300px; 
        }

        .imagem-criativa img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            z-index: 1;
            position: relative;
        }

        /* Forma abstrata sólida atrás da imagem */
        .forma-abstrata {
            position: absolute;
            top: -30px;   
            left: -30px; 
            width: 300px; 
            height: 300px;
            background: linear-gradient(135deg, #58695f, #8a9a8a);
            clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%);
            z-index: 0;
            transform: rotate(15deg);
            transition: transform 0.3s ease;
        }

        .imagem-criativa:hover .forma-abstrata {
            transform: rotate(0deg);
        }


        /*Conheça nossos colaboradores--------------------------------------------------------------------------------------------------------------*/
        #colaboradores {
            padding: 50px 0;
            text-align: center;
            background-color:  #f9f9f9;
        }

        #colaboradores h2 {
            font-size: 2.5em;
            margin-bottom: 50px;
        }

        .colaboradores-container {
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        .colaborador {
            text-align: center;
            width: 220px;
        }

        .foto-perfil {
            width: 200px;
            height: 200px;
            background-color:  #f9f9f9;
            border-radius: 50%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .foto-perfil img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .colaborador h3 {
            margin-top: 20px;
            color: #333;
        }

        .colaborador p {
            color: #777;
        }

        /*footer-------------------------------------------------------------------------------------------------------------------------*/
        footer {
            background: linear-gradient(135deg, #57708e, #8aa0b3);
            color: #ffffff; 
            padding: 40px 20px; /* Espaçamento interno */
            position: relative; /* Para posicionamento absoluto dos elementos */
            overflow: hidden; /* Para esconder partes que saem do footer */
        }

        .footer-container {
            max-width: 1200px; /* Largura máxima do footer */
            margin: auto; /* Centraliza o footer na tela */
            position: relative;
        }

        .footer-content {
            display: flex; 
            justify-content: space-between;
            flex-wrap: wrap; 
        }

        .footer-section {
            flex: 1; 
            min-width: 200px; 
            margin: 20px; 
        }

        .footer-section h4 {
            margin-bottom: 10px; /* Espaço abaixo do título */
            color: #ECF0F1; /* Cor do título */
            border-bottom: 2px solid #ECF0F1; /* Linha abaixo do título */
            padding-bottom: 5px; /* Espaçamento abaixo da linha */
        }

        .footer-section ul {
            list-style: none; /* Remove as bolinhas da lista */
            padding: 0; 
        }

        .footer-section ul li {
            margin: 10px 0; /* Espaço entre os itens da lista */
        }

        .footer-section a {
            color: #ECF0F1; 
            text-decoration: none; 
            transition: color 0.3s; 
        }

        .footer-section a:hover {
            color: #ECF0F1; /* Cor do link ao passar o mouse */
            text-decoration: underline; /* Sublinha o link ao passar o mouse */
        }

        .footer-bottom {
            margin-top: 20px; /* Espaço acima do rodapé */
            font-size: 14px; /* Tamanho da fonte do rodapé */
        }
        .footer-background-shape {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px; 
            background: linear-gradient(135deg, #58695f, #8a9a8a);
            clip-path: polygon(0 100%, 100% 80%, 100% 100%, 0 100%); /* Forma geométrica */
            z-index: -1; /* Para ficar atrás do conteúdo */
        }
    </style>


</head>
<body class="home"> 

    <!-- Barra de navegação -->
    <nav>
        <img src="img/alimente.png" alt="Logo" class="logo">
        <ul>
        <li><a href="#">Inicio</a></li>
            <li><a href="#sobre">Quem Somos?</a></li> 
            <li><a href="#porque">Por que utilizar?</a></li>
            <li><a href="#causas">Causas</a></li>
            <li><a href="#parceiros">Parceiros</a></li>
            <button class="button-nav"><a href="/logindoador">Iniciar</a></button>
        </ul>
        
    </nav>

    <!-- Conteúdo principal -->
    <div class="main-content">
        <div class="text-box">
            <h1>Gerando Solidariedade</h1>
            <div class="underline"></div>
            <p>Apoie as Ong's, transforme vidas.</p>
        </div>
    </div>

    <!--SOBRE NÓS-->
    <section class="about-section" id="sobre"> 
        <div class="about-content">
            <img src="img/somos1.png" alt="Sobre Nós">
            <div class="about-text">
                <h2>Quem Somos?</h2>
                <div class="underline"></div>
                <p>
                Somos uma plataforma dedicada a promover e divulgar o trabalho de ONGs que atuam em diversas áreas, contribuindo para o bem-estar e desenvolvimento social das comunidades. Acreditamos firmemente que, juntos, podemos fazer a diferença e transformar vidas, criando um futuro mais justo e solidário para todos. Nossa missão é conectar doadores generosos às iniciativas que mais precisam de apoio, fortalecendo o impacto das ações sociais e promovendo uma cultura de solidariedade e engajamento.
                </p>
            </div>
        </div>
    </section>

    <!--SOBRE NÓS (LADO INVERTIDO)-->
    <section class="about-section inverted">
        <div class="about-content">
            <img src="img/pessoas.png" alt="Nossa Missão">
            <div class="about-text">
                <h2>Nossa Missão</h2>
                <div class="underline"></div>
                <p>
                Estamos comprometidos em desenvolver soluções inovadoras que conectem comunidades e promovam a transformação social por meio de projetos colaborativos. Acreditamos que a união de esforços pode gerar um impacto positivo significativo na sociedade, fortalecendo laços e empoderando indivíduos. Nosso objetivo é criar um ambiente onde todos possam contribuir para mudanças reais, construindo juntos um futuro mais inclusivo e sustentável.
                </p>
            </div>
        </div>
    </section>

<br><br>
 <!--ESCOLHA O TIME ALIMENTE-->
    <h2 class="features-title">Escolha o Time Alimente</h2>
    <section class="card-section" id="porque">
    <div class="card">
        <img src="img/doacaoIcon.jpg" alt="Imagem 1" class="card-image">
        <div class="card-content">
            <h3>Transparência nas Doações</h3>
            <p>A plataforma pode fornecer relatórios claros sobre como os recursos estão sendo utilizados, aumentando a confiança dos doadores.</p>
        </div>
    </div>
    <div class="card">
        <img src="img/cadeadoIcon.png" alt="Imagem 2" class="card-image">
        <div class="card-content">
            <h3>Facilidade de Acesso</h3>
            <p>Doadores podem encontrar facilmente diversas ONGs e suas campanhas em um só lugar, simplificando o processo de doação.</p>
        </div>
    </div>
    <div class="card">
        <img src="img/opcoesIcon.jpg" alt="Imagem 3" class="card-image">
        <div class="card-content">
            <h3>Diversificação de Opções</h3>
            <p>Oferece aos doadores a possibilidade de escolher entre várias causas e projetos, permitindo que apoiem aqueles que mais lhes tocam.</p>
        </div>
    </div>



    <div class="card">
        <img src="img/comunicacaoIcon.png" alt="Imagem 1" class="card-image">
        <div class="card-content">
            <h3>Comunicação Eficiente</h3>
            <p>Facilita a comunicação entre ONGs e doadores, permitindo que as ONGs atualizem sobre o impacto das doações e envolvam os doadores em suas histórias.</p>
        </div>
    </div>
    <div class="card">
        <img src="img/segurancaIcon.png" alt="Imagem 2" class="card-image">
        <div class="card-content">
            <h3>Segurança nas Transações</h3>
            <p>Plataformas confiáveis oferecem métodos de pagamento seguros, protegendo tanto os doadores quanto as ONGs.</p>
        </div>
    </div>
    <div class="card">
        <img src="img/apoioIcon.jpg" alt="Imagem 3" class="card-image">
        <div class="card-content">
            <h3>Apoio ao Impacto Social</h3>
            <p>As plataformas ajudam a amplificar as vozes das ONGs, aumentando sua visibilidade e, consequentemente, potencializando o impacto social das doações.</p>
        </div>
    </div>
</section>








<br><br>
<!-- PARTICIPE DAS NOSSAS CAMPANHAS-->
<section id="causas">
<h2 class="features-title">Participe das Nossas Campanhas</h2>
    <div class="campanhas-container">
        <div class="card-campanha">
            <img src="img/alimento.jfif" alt="Campanha 1">
            <h3>Doação de Alimento</h3>
            <p>Doe um alimento para transformar vidas, levando esperança e dignidade para quem mais precisa.</p>
            <button id="campanhaModal">Doar Agora</button>
        </div>
        <div class="card-campanha">
            <img src="img/produto2.jfif" alt="Campanha 2">
            <h3>Produtos de Higiene Pessoal</h3>
            <p> Doe produtos de higiene pessoal e faça a diferença na vida de muitas famílias.</p>
            <button>Doar Agora</button>
        </div>
        <div class="card-campanha">
            <img src="img/roupas2.jfif" alt="Campanha 3">
            <h3>Doação em Roupas</h3>
            <p>Aqueça corações com sua solidariedade e faça a diferença na vida de quem precisa. </p>
            <button>Doar Agora</button>
        </div>
        <div class="card-campanha">
            <img src="img/pet2.jfif" alt="Campanha 3">
            <h3>Ajude um Pet</h3>
            <p> Ajude um pet em necessidade, doando ração ou medicamentos.</p>
            <button>Doar Agora</button>
        </div>
    </div>

 <div class="modal" id="modal">
    
 </div>


    <!--IMAGENS CRIATIVAS-->
<section id="imagens-criativas">
    <div class="imagens-container">
        <div class="imagem-criativa">
            <div class="forma-abstrata"></div>
            <img src="img/feed5.jpg" alt="Imagem 1">
        </div>
        <div class="imagem-criativa">
            <div class="forma-abstrata"></div>
            <img src="img/roupa.jpg" alt="Imagem 2">
        </div>
        <div class="imagem-criativa">
            <div class="forma-abstrata"></div>
            <img src="img/pet.jpg" alt="Imagem 3">
        </div>
    </div>
</section>

</section>
<br><br>
<!-- COLABORADORES-->
<section id="parceiros">
<h2 class="features-title">Conheça Nossos Colaboradores</h2>
    <div class="colaboradores-container">
        <div class="colaborador">
            <div class="foto-perfil">
                <img src="/img/Logo-Materna.png" alt="Colaborador 1">
            </div>
            <h3>Materna</h3>
            <p>Empresa de tecnologia</p>
        </div>
        <div class="colaborador">
            <div class="foto-perfil">
                <img src="/img/amigodesangue.png" alt="Colaborador 2">
            </div>
            <h3>Amigo de Sangue</h3>
            <p>Empresa de tecnologia</p>
        </div>
        <div class="colaborador">
            <div class="foto-perfil">
                <img src="/img/iacademy.jpeg" alt="Colaborador 3">
            </div>
            <h3>IAcademy</h3>
            <p>Empresa de tecnologia</p>
        </div>
    </div>
</section>
<br><br>
<!-- FOOTER-->
<footer>
    <div class="footer-background-shape"></div> 
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Sobre Nós</h4>
                <p>Trabalhamos para promover e apoiar ONGs na divulgação de suas campanhas.</p>
            </div>
            <div class="footer-section">
                <h4>Links Úteis</h4>
                <ul>
                    <li><a href="#sobre">Quem Somos?</a></li>
                    <li><a href="#porque">Porque utilizar?</a></li>
                    <li><a href="#causas">Causas</a></li>
                    <li><a href="#parceiros">Parceiros</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contatos</h4>
                <p>Email: targetsoftware@gmail.com</p>
                <p>Telefone: (11) 1234-5678</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Target. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
</body>
</html>

<style>

/* Ajustes de responsividade */
@media (max-width: 1200px) {
    .features {
        flex-direction: column;
        align-items: center;
    }

    .feature-item {
        width: 45%; /* Ajuste para telas menores */
    }
}

@media (max-width: 768px) {
    .features {
        flex-direction: column;
        align-items: center;
    }

    .feature-item {
        width: 100%; /* Para telas pequenas, o item ocupa 100% da largura */
    }
    
    .features-row {
        flex-direction: column; /* Garantir que a fila de features se alinhe verticalmente */
    }
    
    .features-title {
        font-size: 24px;
    }
    
    .features-title::after {
        width: 100px; /* Reduzir o tamanho da linha de decoração */
    }
}

@media (max-width: 480px) {
    .features-title {
        font-size: 20px;
    }

    .feature-item h3 {
        font-size: 18px;
    }

    .feature-item p {
        font-size: 14px;
    }

    .footer-section {
        font-size: 14px;
    }
}

</style>
<style>

@media (max-width: 1366px) {
    .features {
        justify-content: center;
    }

    .feature-item {
        width: 40%; /* Ajuste de proporção para telas de notebook */
    }
}

@media (max-width: 1024px) {
    .features {
        flex-direction: column;
        align-items: center;
    }

    .feature-item {
        width: 100%; /* Em telas de notebook pequenas, usar a largura total */
    }

    .features-title {
        font-size: 28px; /* Diminuir um pouco o tamanho do título */
    }

    .features-title::after {
        width: 120px; /* Reduzir a linha de decoração */
    }

    .footer-section {
        font-size: 16px; /* Reduzir o tamanho da fonte para economizar espaço */
    }
}

</style>
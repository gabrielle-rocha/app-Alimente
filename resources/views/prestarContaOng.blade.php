<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ong | Alimente</title>
    <!--ICONES-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--FONTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
/*---------------------------------------------------------------- NAV------------------------------------------------------------------------------*/
        .nav {
            width: 300px;
            height: 100vh;
            background: linear-gradient(to bottom, #95a5b8, #7f8c8d);
            position: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.034); 
        }

        .logo {
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
           
        }

        .logo img {
            width: 80%;
            height: auto;
        }

        .nav a {
            text-decoration: none;
            color:white;
            padding: 18px;
            display: flex;
            align-items: center;
            font-size: 20px;
            transition: background-color 0.3s ease, transform 0.3s; /* Transição suave ao passar o mouse */
        }

        .nav a:hover {
          background-color: rgba(255, 255, 255, 0.2); /* Efeito hover mais leve */
          transform: translateX(5px); /* Leve movimento ao passar o mouse */
        }

        .nav a i {
            margin-right: 15px;
            font-size: 20px;
        }

        .perfil {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border: none;
        }
        .perfil .foto i {
            font-size: 30px;
            color:white;
        }

        .perfil .nomeOng {
            font-size: 16px;
            color:white;
        }

        .perfil .maisOpcoes i {
            font-size: 20px;
            color: white;
        }

        .container {
            display: flex;
            margin-left: 300px;
        }
        .container .notifications {
    width: 35%; /* Ajuste a largura das notificações */
}

.container .feed {
    width: 80%; /* Aumente a largura do feed */
}

/*---------------------------------------------------------------- FEED------------------------------------------------------------------------------*/
.feed {
    width: 80%; /* Continua ocupando 70% da largura */
    height: calc(100vh - 40px); /* Altura total da tela menos o padding */
    padding: 20px;
    box-sizing: border-box;
    overflow-y: auto; /* Permite rolagem vertical */
    background-color: #ffffff;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
}
.prestação-de-contas {
    background-color: #fff;
    padding: 20px; /* Diminua o padding se necessário */
    margin: 20px auto; /* Margin superior/inferior e centraliza horizontalmente */
    width: 75%; /* Ajuste a largura conforme necessário (por exemplo, 80%) */
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    height:95%;
    
}

.prestacao-de-contas h2 {
  text-align: center;
  margin-bottom: 20px;
 
}


.balanco, .demonstracao, .receitas-despesas {
  margin-bottom: 20px;
  margin-top: 30px;
  font-size: 20px;
}

label {
  font-weight: bold;
}

.upload-icon {
  cursor: pointer;
  font-size: 24px;
  margin-left: 10px;
}

.fotos {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
  margin-top: 120px;
  border-radius: 5px;
}
.foto-upload {
    background-color: #ddd;
    width: 180px;
    height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border-radius: 5px;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Adicione transições para efeito suave */
}

.foto-upload:hover {
    transform: scale(1.05); /* Aumenta levemente a imagem ao passar o mouse */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Adiciona uma sombra ao passar o mouse */
}


.botoes {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 120px;
  
}
.cancelar, .adicionar {
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  width: 150px;
  align-items: center; /* Centraliza verticalmente no flexbox */
  text-align: center; /* Centraliza horizontalmente */
  font-weight: bold;

}

.cancelar {
    background-color: white;
  
}

.adicionar {
    background-color: white;
 
}

/*---------------------------------------------------------------- NOTIFICAÇÕES------------------------------------------------------------------------------*/

.informacoes-ong {
    width: 35%;
    text-align: center;
    padding: 20px;
    background-color: #f9f9f9; /* Cor de fundo suave */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
    margin-top: 20px; /* Espaço em cima */
}

.informacoes-ong img {
    width: 150px;
    height: auto;
    margin-bottom: 20px;
    /*border-radius: 50%;  Imagem redonda */
    /*border: 3px solid #95a5b8;  Bordas verdes */
}

.nome p {
    margin-top: -20px;
    font-size: 25px;
    text-align: center;
    font-weight: bold; /* Negrito para o nome */
    color: #333; /* Cor do texto */
    letter-spacing: 1px; /* Espaçamento entre letras */
}

.textot {
    border-radius: 5px;
    background-color: #fff; /* Fundo branco para o texto */
    padding: 10px; /* Espaço interno */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra suave */
    margin: 10px 0; /* Margem em cima e embaixo */
    font-size: 22px;
}

.informacoes-ong h3 {
    text-align: center;
    margin-top: 20px; /* Ajusta a margem superior */
    font-size: 25px;
    color: black; /* Cor verde para destaque */
    margin-top: 90px
}
.itens p{
  margin-top: 70px;
  font-size: 25px;
  text-align: left;
}
.doacoes-frequentes {
    display: flex; /* Alinha os itens em linha */
    justify-content: space-between; /* Espaço entre as imagens */
    margin-top: 20px; /* Espaço acima */
}

.doacoes-frequentes img {
    margin: 0 5px; /* Espaço horizontal entre as imagens */
    width: 30%; /* Ajusta a largura das imagens */
    height: auto; /* Mantém a proporção */
    transition: transform 0.3s; /* Efeito suave ao passar o mouse */
}


.doacoes-frequentes img:hover {
    transform: scale(1.05); /* Aumenta um pouco a imagem ao passar o mouse */
}

/*---------------------------------------------------------------- RESPONSIVIDADE------------------------------------------------------------------------------*/
    /* Ajustes para telas pequenas */
@media (max-width: 768px) {
    .feed {
        width: 90%; /* Ocupa mais espaço em telas menores */
        padding: 10px; /* Menos padding */
    }

    .post {
        padding: 20px; /* Menos padding nos posts */
        margin-bottom: 20px; /* Menos espaço entre os posts */
    }

    .comment-section input {
        font-size: 12px; /* Menor tamanho de fonte para inputs */
        padding: 8px; /* Menos padding no input */
    }
}

/* Ajustes para telas muito pequenas */
@media (max-width: 480px) {
    .post img {
        width: 100%; /* Garante que a imagem ocupe toda a largura disponível */
    }

    .post .post-header span {
        font-size: 14px; /* Tamanho de fonte menor */
    }

    .post p {
        font-size: 14px; /* Tamanho de fonte menor para textos */
    }
}

    </style>
</head>
<body>
    
    <!--NAV-->
    <div class="nav">
        <div class="logo">
            <img src="/img/alimentebranco.png" alt="Alimente Logo">
        </div>
        
        <div class="options">
            <a href="/feedOng"><i class="bi bi-house-door-fill"></i> Página Inicial</a>
            <a href="/publicacaoOng"><i class="bi bi-plus-circle-fill"></i> Nova Publicação</a>
            <a href="/prestarContaOng"><i class="bi bi-clipboard-data-fill"></i> Prestar Contas</a>
        </div>

        <div class="perfil">
            <div class="foto">
                <i class="bi bi-person-circle"></i>
            </div>
            <a  href="/#" class="nomeOng">Amigos_do_Bem</a>
            <div class="maisOpcoes">
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </div>
    </div>

    <!-- Conteúdo Principal -->
    <div class="container">
        
        <!-- Feed -->
        <div class="feed">
        <div class="prestação-de-contas">
        <h2>PRESTAÇÃO DE CONTAS</h2>
    
    <div class="balanco">
      <label>Balanço patrimonial:</label>
      <span class="upload-icon" onclick="openFileDialog()"><i class="bi bi-cloud-arrow-up"></i></span>
    </div>
    <div class="demonstracao">
      <label>Demonstração de resultados:</label>
      <span class="upload-icon" onclick="openFileDialog()"><i class="bi bi-cloud-arrow-up"></i></span>
    </div>
    <div class="receitas-despesas">
      <label>Receitas totais:</label>
      <span class="upload-icon" onclick="openFileDialog()"><i class="bi bi-cloud-arrow-up"></i></span>
    </div>
    <div class="demonstracao">
      <label>Despesas totais:</label>
      <span class="upload-icon" onclick="openFileDialog()"><i class="bi bi-cloud-arrow-up"></i></span>
    </div>

    <div class="fotos">
      <div class="foto-upload" id="foto1"><i class="bi bi-check-lg"></i></div>
      <div class="foto-upload" id="foto2"><i class="bi bi-check-lg"></i></div>
      <div class="foto-upload" id="foto3"><i class="bi bi-check-lg"></i></div>
      <div class="foto-upload" id="foto4"><i class="bi bi-check-lg"></i></div>
    </div>
    
    <div class="botoes">
      <button class="cancelar">Cancelar</button>
      <button class="adicionar">Enviar</button>
    </div>
  </div>
  </div>


  <!-- Input escondido para seleção de arquivo -->
  <input type="file" id="fileInput" style="display: none;" accept="image/*" onchange="handleFileSelect(event)">



  <div class="informacoes-ong">
    <img src="img/perfil.png" alt="Amigos do Bem">
    <div class="nome"><p>Amigos do Bem</p></div>
    <div class="textot">
        <p>A Associação Amigos do Bem é uma entidade que constrói sua história no atendimento a centenas de crianças, adolescentes e suas famílias em situação de vulnerabilidade social, residentes do bairro Fátima Baixo e outros 12 bairros da Região Norte de Caxias do Sul/RS.</p>
    </div>
    <h3><span class="estrela"><i class="bi bi-patch-check"></i></span> Prestação de contas em dia</h3>
    <div class="itens"><p>Itens mais doados:</p></div>
    <div class="doacoes-frequentes">
    <img src="img/comida.png" alt="Doação 1">
    <img src="img/roupas.png" alt="Doação 2">
    <img src="img/pets.png" alt="Doação 3">
</div>

</div>

  <script>
    // Variável para controlar em qual quadrado colocar a imagem
let selectedPhotoBox = 1;

// Função para abrir o diálogo de seleção de arquivo
function openFileDialog() {
  document.getElementById('fileInput').click();
}

// Função para lidar com a seleção de arquivo
function handleFileSelect(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      // Define a imagem no próximo quadrado disponível
      document.getElementById('foto' + selectedPhotoBox).style.backgroundImage = `url(${e.target.result})`;
      document.getElementById('foto' + selectedPhotoBox).style.backgroundSize = 'cover';
      selectedPhotoBox++;
      
      // Impede de colocar mais imagens se os quadrados estiverem todos preenchidos
      if (selectedPhotoBox > 4) {
        selectedPhotoBox = 4;
      }
    };
    reader.readAsDataURL(file);
  }
}

    </script>

</body>
</html>

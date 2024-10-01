<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ong - Alimente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

   <!--FONTES-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            height: 100vh;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100%;
        }

           /* Navbar */
       .nav {
            width: 300px;
            height: 100vh;
            background: rgb(103, 134, 167);
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

        .menu {
            list-style: none;
            width: 100%;
            
        }

        .menu li {
            margin: 20px 0;
        }

        .menu li a {
            text-decoration: none;
            color: white;
            font-size: 25px;
            display: flex;
            align-items: center;
        }

        .menu li a:hover {
            color:gray ;
        }

        .user-menu {
            margin-top: auto;
            display: flex;
            align-items: center;
            color: white;
        }

        .user-menu img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .main-content {
            margin-left: 25%; /* Para não sobrepor a barra lateral */
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 75%; /* Ajusta para ocupar o restante da tela */
            overflow-y: auto; /* Permite rolagem se necessário */
            align-items: center;
        }

        .flex-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            flex-wrap: wrap;
            
        }

        .profile-card {
            width: 65%;
            padding: 50px;
            text-align: center;
            background-color: #ffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .profile-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-card h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .profile-card p {
            color: #777;
            font-size: 18px;
        }

        .edit-profile {
            width: 30%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            background-color: #ffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .edit-profile h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .edit-profile label {
            display: block;
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
        }

        .edit-profile input, .edit-profile textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .edit-profile button {
            padding: 12px 20px;
            background: rgba(86, 112, 142);
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .edit-profile button:hover {
            background-color: gray;
        }

        .causes {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .cause {
            width: 30%;
            height: 120px;
            background-color: #e3e6e4;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: static; /* Remove a fixação para dispositivos pequenos */
                height: auto; /* Permite que a altura da barra lateral seja automática */
            }

            .main-content {
                margin-left: 0; /* Remove a margem da barra lateral */
                padding: 20px; /* Ajusta o padding para dispositivos pequenos */
            }

            .profile-card, .edit-profile {
                width: 100%; /* Ajusta a largura para dispositivos pequenos */
                margin-bottom: 20px;
            }

            .flex-container {
                flex-direction: column; /* Alinha os elementos em coluna */
            }
        }
    </style>
</head>
<body>

<div class="container">
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
            <a  href="editarperfilong" class="nomeOng">Amigos_do_Bem</a>
            <div class="maisOpcoes">
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </div>
    </div>


    <div class="main-content">
        <div class="flex-container">
            <div class="profile-card">
                <img src="img/user.png" alt="Avatar">
                <h2>Amigos_do_Bem</h2>
                <p>4 seguidores | 5 Publicações</p>
                <p>Ong para arrecadação de alimentos<br>SP/ZL<br>
                
                <h3>Feed</h3>
                <div class="causes">
                    <div class="cause"></div>
                    <div class="cause"></div>
                    <div class="cause"></div>
                </div>
            </div>

            <div class="edit-profile">
                <h3>Editar Informações</h3>
                <form>
                    <label for="name">Nome</label>
                    <input type="text" id="name" value="Amigos_do_Bem">

                    <label for="username">Nome de usuário</label>
                    <input type="text" id="username" value="Amigos_do_Bem">

                    <label for="bio">Bio</label>
                    <textarea id="bio" rows="3">Ong para arrecadação de alimentos - SP/ZL</textarea>

                    <button type="submit">Editar</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

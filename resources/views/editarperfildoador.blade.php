
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Doador</title>
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
        }
        
        .container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1200px;
            width: 100%;
            height: 100vh;
        }

        /* Estilos da barra lateral */
        .sidebar {
            width:30%;
            background: linear-gradient(to bottom right, #c6ddf5, #d7efcb);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-between;
        }
        

        .sidebar h1 {
            font-size: 32px;
            color: #66735c;
            margin-bottom: 40px;
            text-align: center;
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
            color: #333;
            font-size: 20px;
            display: flex;
            align-items: center;
        }

        .menu li a:hover {
            color: #4caf50;
        }

        .user-menu {
            margin-top: auto;
            display: flex;
            align-items: center;
        }

        .user-menu img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-menu p {
            font-size: 16px;
            color: #333;
        }

        /* Estilos da área principal */
        .main-content {
            flex-grow: 1;
            padding: 50px;
            background-color: #fff;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            
        }

        .profile-card {
            width: 100%;
            padding: 50px;
            text-align: center;
        }

        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile-card h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .profile-card p {
            color: #777;
            font-size: 16px;
        }

        .profile-card .stats {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .profile-card .stats div {
            font-size: 14px;
            color: #555;
        }

        .profile-card h3 {
            margin-top: 20px;
            font-size: 20px;
        }

        .causes {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .cause {
            width: 30%;
            height: 100px;
            background-color: #e3e6e4;
            border-radius: 8px;
        }

        .btn-edit {
            margin-top: 20px;
            padding: 10px 20px;
            background: linear-gradient(to right, rgba(88,169,195,1) 0%, rgb(127, 223, 164) 100%);
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-edit:hover {
            background-color: #45a049;
        }

        /* Formulário de edição */
        .edit-profile {
            background-color: #fff;
            width: 30%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            
        }

        .edit-profile h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .edit-profile label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .edit-profile input, .edit-profile textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .edit-profile button {
            padding: 10px 20px;
            background: linear-gradient(to right, rgba(88,169,195,1) 0%, rgb(127, 223, 164) 100%);
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .edit-profile button:hover {
            background-color: #45a049;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
            }

            .sidebar, .main-content, .edit-profile {
                width: 100%;
                height: auto;
            }

            .causes {
                flex-direction: column;
            }

            .cause {
                width: 100%;
                margin-bottom: 10px;
            }
        }

    </style>
</head>
<body>

<div class="container">
    <!-- Barra lateral -->
    <div class="sidebar">
        <h1>alimente</h1>
        <ul class="menu">
            <li><a href="feed2doador">Página inicial</a></li>
            <li><a href="pesquisar">Pesquisar</a></li>
            <li><a href="#">Buscar</a></li>
        </ul>
        <div class="user-menu">
            <img src="img/user.png" alt="Avatar">
            <p>Doador_01</p>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="main-content">
        <div class="profile-card">
            <img src="img/user.png" alt="Avatar">
            <h2>Doador_01</h2>
            <p>4 Ong's seguidas | 5 Doações realizadas</p>
            <p>Procuro ajudar causas familiares<br>SP/ZL<br>Casado</p>
            
            <h3>Causas Preferidas</h3>
            <div class="causes">
                <div class="cause"></div>
                <div class="cause"></div>
                <div class="cause"></div>
            </div>
        </div>
    </div>

    <!-- Formulário de edição -->
    <div class="edit-profile">
        <h3>Editar Informações</h3>
        <form>
            <label for="name">Nome</label>
            <input type="text" id="name" value="Doador 1">

            <label for="username">Nome de usuário</label>
            <input type="text" id="username" value="Doador_01">

            <label for="bio">Bio</label>
            <textarea id="bio" rows="3">Procuro ajudar causas familiares</textarea>

            <button type="submit">Editar </button>
        </form>
    </div>
</div>

</body>
</html>
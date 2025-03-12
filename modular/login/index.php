<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <form action="login.php" method="post" class="container">
        <div class="box">
            <h1>Login</h1>
            <input type="text"     name = "nome"  required placeholder = "Informe seu nome">
            <input type="text"     name = "email" required placeholder = "Informe o seu email">
            <input type="password" name = "senha" required placeholder = "Informe a senha">

            <button name = "btnEntrar"    class = "entrar">Entrar</button>
            <button name = "btnCadastrar" class = "criar">Crie sua Conta</button>
        </div>

    </form>
    
</body>
</html>
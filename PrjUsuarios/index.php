<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PrjUsuarios</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        #divForm{
            margin: 20px;
        }
        #divForm div{
            margin: 5px;
        }
        #divForm input{
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div id="divForm">
    <form method="POST" action="teste.php">
        <div>
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text" required>
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input id="senha" name="senha" type="text" required>
        </div>
        <div>
            <label for="birthday">Birthday:</label>
            <input id="birthday" name="birthday" type="date" required>
        </div>
        <div>
            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" type="text" required>
        </div>
        <div>
            <label for="sexo">Sexo:</label>
            <input id="sexo" name="sexo" type="text" required>
        </div>
        <div>
            <label for="acesso">T. de acesso:</label>
            <input id="acesso" name="acesso" type="number" required>
        </div>
        <input type="submit" value="Enviar">
    </form>
</div>

<script>

</script>

</body>
</html>
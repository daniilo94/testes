<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste de Classes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        div {
            margin: 5px;
        }
    </style>
</head>
<body>
<form id="frm-add-pessoa" method="POST" action="controle.php">
    <input type="hidden" name="action" value="add-pessoa">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"/>
    </div>
    <div>
        <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade"/>
    </div>
    <div>
        <input type="submit" value="Enviar"/>
    </div>
</form>

<script>
    $("#frm-add-pessoa").submit(function (event) {
        event.preventDefault();
    })
</script>

</body>
</html>
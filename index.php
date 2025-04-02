<?php
include("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>acesse sua conta</h1>
    <form action="" method="post">
        <p>
        <label >E-mail</label>
        <input type="text" name = "email">
        </p>
        <p>
            <label >senha</label>
            <input type="password" name= "senha">
        
        </p>
        <p>
            <button type = "submit">enviar</button>
        </p>
        
    </form>
</body>
</html>
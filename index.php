<?php
//incluir o arquivo de conexão do banco
include("conexao.php");

//verifica se os campos email e senha foram enviados via post
if(isset($_POST['email'])  || isset($_POST['senha']))

{

    //verificar se o campo email está fazio 
    if(strlen($_POST['email'] ==0)){
        echo"preencha seu e-mail";
    }
    //verificar se o campo senha está vazio
    else if(strlen($_POST['senha'] ==0)){
        echo "prencha sua senha";
    }
    else {
        //proteje contra SQL injection escapando caracteres especiais
        $email = $mysqli->real_escape_string($_POST['email']);
        $email = $mysqli->real_escape_string($_POST['senha']);

        //consulta no banco de dados se existem o usuarios e senha
        $sql_code = "SELECT * FROM usuarios WERE email ='$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("falha na execução do código SQL:" . $mysqli->error);

        //obtém o numero de registros encontrados
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            //obtém os dados do usuário 
            $usuario = $sql_query->fetch_assoc();

            //inicia a sessão, caso ainda não tenha sido iniciada
            if(!isset($_SESSION)){
                session_start();

            }
            //armazenar informações do usuário na sessão 
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

        }

        

    }

}
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
    <form action="" method="POST">
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
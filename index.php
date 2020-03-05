<?php

require_once "vendor/autoload.php";
use App\view\index;
use App\controller\funcionario;


    if(isset($_POST['nome']) && isset($_POST['matricula']) && isset($_POST['telefone'])){

        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $telefone = $_POST['telefone'];
        
        $index = new index;
        $index->funcionario($nome,$matricula,$telefone);
    }

   


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<Form action="index.php" method="POST">
    <label>Nome:</label>
    <input type="text" name="nome"><br>
    <label>Matricula:</label>
    <input type="text" name="matricula"><br>
    <label>Telefone:</label>
    <input type="text" name="telefone"><br><br>

    <button type="submit" class="btn btn-primary">enviar</button>
</Form>
    
</body>
</html>
<?php

    
    require_once "../DAO/dao.php";

    class PessoaDao extends Dao{

        /** criação do metodo para inserir novos usuarios */
      
       public function store ($pessoa){

            $insert = $this->con->prepare("INSERT INTO `usuario`( `nome`, `login`, `senha`) VALUES (:nome, :login, :senha)");
            $insert->bindValue(":nome", $pessoa->getNome());
            $insert->bindValue(":login",$pessoa->getLogin());
            $insert->bindValue(":senha", $pessoa->getSenha());
            
            $insert->execute();

       }

       /*** ***************fim do metodos****************** */

       /** criação do metodo para select de um unico usuario */
       public function show($pessoa){

        $sql ="SELECT `id`, `nome`, `login`, `senha` FROM `usuario` WHERE id = '$pessoa'";
        $select = $this->con->prepare($sql);
        $select->execute();
        
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {

           echo $row['nome'] = $linha['nome']."<br>";
           echo $row['login'] = $linha['login']."<br>";
           echo $row['senha'] = $linha['senha']."<br>";
           
        }

       }
       /*** ***************fim do metodos****************** */

       /** criação do metodo para select de todos os usuario */

       public function selectAll(){
           $sql = "SELECT * FROM usuario ";
           $select = $this->con->prepare($sql);
           $select->execute();
           while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {

            echo "<br><hr>";
            echo $row['nome'] = $linha['nome']."<br>";
            echo $row['login'] = $linha['login']."<br>";
            echo $row['senha'] = $linha['senha']."<br>";
            echo "<br>";
         }       

       }
       /*** ***************fim do metodos****************** */

       public function update($pessoa){

        echo "<pre>";
        print_r(array($pessoa));
        echo "</pre>";

        echo $pessoa->getNome();
       /*
        $sql = "UPDATE usuario SET :nome,  :login, :senha WHERE id = '$pessoa'";
        $update= $this->con->prepare($sql);

        $update->bindValue(":nome", $pessoa->getNome());
        $update->bindValue(":login",$pessoa->getLogin());
        $update->bindValue(":senha", $pessoa->getSenha());
        $update->execute();
        */
       }
       /** criação do metodo para deleta registro de usuario */
       public function destroy($pessoa){

        echo $pessoa;
        $sql ="DELETE FROM `usuario` WHERE id = '$pessoa'";
        $delete = $this->con->prepare($sql);
        $delete->execute();

       }
       /*** ***************fim do metodos****************** */

    }


?>
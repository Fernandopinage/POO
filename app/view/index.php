<?php

   
    require_once "../DAO/PessoaDao.php";

  
    $pessoa = new PessoaDao();
    $pessoa->setNome("supino");
    $pessoa->setLogin("fernando2");
    $pessoa->setSenha("123456");
    //$pessoa->store ($pessoa);             //para adicionar uma pessoa 
    //$pessoa->show(1);                     //para seleciona uma unica pessoa 
    //$pessoa->selectAll();                 //para seleciona todos da tabela
    //$pessoa->destroy(3);                  //para apagar um registro de uma tabela
    $pessoa->update($pessoa);

?>
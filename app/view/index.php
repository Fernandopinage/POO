<?php 

namespace app\view;
require_once "../controller/controller.php";
use Controller\controllerFuncionario as Funcionario; // intanciando namespace e acrecentando um apelido


// setando o dados manualmente
$pessoa = new Funcionario();
$pessoa->setNome('Luiz');
$pessoa->setTelefone('123456789');
$pessoa->setCelular('987654321');
$pessoa->setEmail('Luizfernandoluck@hotmail.com');


echo $pessoa->getNome()."<br>";
echo $pessoa->getTelefone()."<br>";
echo $pessoa->getCelular()."<br>";
echo $pessoa->getEmail()."<br>";

// exemplo de como poderia setar os dados via formulario 
$nome = 'joao';
$telefone = '123456789';
$celular = '987654321';
$email = 'joao@email.com';

$pessoa->setNome($nome);
$pessoa->setTelefone($telefone);
$pessoa->setCelular($celular);
$pessoa->setEmail($email);
// enviando os dados para ser inseridos
$pessoa->insert($nome,$telefone,$celular,$email);

?>
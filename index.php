<?php

require_once "vendor/autoload.php";
use App\view\index;
use App\controller\funcionario;

$nome = "luiz fernando";
$matricula ="123";
$telefone = "999999";

$index = new index;
$index->funcionario($nome,$matricula,$telefone);

?>
<?php 
namespace App\controller;
use App\view;
require_once "vendor/autoload.php";
    class funcionario{


        public function funcionario($nome,$matricula,$telefone){
            

            echo "inserindo os dados de ".$nome."Nome da matricular ".$matricula."seu telefone e ".$telefone;
        }

    }



?>
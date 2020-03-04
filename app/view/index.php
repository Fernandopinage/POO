<?php 
namespace App\view;
require_once "vendor/autoload.php";
use App\controller\funcionario as Funcionario;

    class index{

        public $nome;
        public $matricula;
        public $telefone;

        public function __construct()
        {
            
            echo "aqui";
        }

        public function funcionario ($nome,$matricula,$telefone){


            echo "inserindo os dados de ".$nome."Nome da matricular ".$matricula."seu telefone e ".$telefone;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getMatricula(){
            return $this->matricula;
        }
        public function getTelefone(){
            return $this->Telefone;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setMatricula($matricula){
            $this->nome = $matricula;
        }
        public function setTelefone($telefone){
            $this->nome = $telefone;
        }

    }

?>
<?php
    require_once "../DB/ConectionFactory.php";

        abstract class  Dao{

        
        private $nome;
        private $login;
        private $senha;
    
        public function __construct()
        {
            $this->con = ConnectionFactory :: getConection();
        }

        
      
        public function setNome($nome){
            $this->nome = $nome;
        }

        
        public function setLogin($login){
            $this->login = $login;
        }
        
        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getNome(){
            return $this->nome;
        }
        
        public function getLogin(){
            return $this->login;   
        }
        
        public function getSenha(){
            return $this->senha;
        }

      
    }

?>
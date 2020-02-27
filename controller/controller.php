<?php 


    namespace Controller; //criando  namespace

    class controllerFuncionario{ //criando uma classe

        private $nome;
        private $telefone;
        private $celular;
        private $email;



        public function insert($nome,$telefone,$celular,$email){ //inserindo dados na classe


            echo $this->getNome()."<br>";
            echo $this->getTelefone()."<br>";
            echo $this->getCelular()."<br>";
            echo $this->getEmail()."<br>";
        }


        //metodos get e set
        public function getNome(){
            
            return $this->nome;
        }

        public function setNome($nome){

            $this->nome =$nome;
        }

        public function getTelefone(){

            return $this->telefone;
        }

        public function setTelefone($telefone){

            $this->telefone = $telefone;
        }

        public function getCelular(){

            return $this->celular;
        }

        public function setCelular($celular){

            $this->celular = $celular;
        }
        public function getEmail(){

            return $this->email;

        }

        public function setEmail($email){
            
            $this->email =$email;
        }


    }

?>
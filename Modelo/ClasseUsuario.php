<?php
    class ClasseUsuario{

        protected $Nome;
        protected $Cpf;
        protected $Email;
        protected $Senha;
        protected $Perfil;
        protected $Nascimento;

        public function setNome($Nome){
                $this->Nome=$Nome;
        }
        public function getNome(){
                return $this->Nome;
        }
        public function setCpf($Cpf){
                $this->Cpf=$Cpf;
        }
        public function getCpf(){
                return $this->Cpf;
        }
        public function setEmail($Email){
                $this->Email=$Email;
        }
        public function getEmail(){
                return $this->Email;
        }
        public function setSenha($Senha){
                $this->Senha=$Senha;
        }
        public function getSenha(){
                return $this->Senha;
        }
        public function setPerfil($Perfil){
                $this->Perfil=$Perfil;
        }
        public function getPerfil(){
                return $this->Perfil;
        }
        public function setNascimento($Nascimento){
                $this->Nascimento=$Nascimento;
        }
        public function getNascimento(){
                return $this->Nascimento;
        }

    }
?>
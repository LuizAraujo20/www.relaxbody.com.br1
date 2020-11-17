<?php
require_once 'ClasseUsuario.php';

    class ClasseFuncionario Extends ClasseUsuario{

        private $FuncionarioId;
        private $DataAdmissao;
        private $Cargo;
        private $Salario;

        public function setFuncionarioId($FuncionarioId){
                $this->FuncionarioId=$FuncionarioId;
        }
        public function getFuncionarioId(){
                return $this->FuncionarioId;
        }
        public function setDataAdmissao($DataAdmissao){
                $this->DataAdmissao=$DataAdmissao;
        }
        public function getDataAdmissao(){
                return $this->DataAdmissao;
        }
        public function setCargo($Cargo){
                $this->Cargo=$Cargo;
        }
        public function getCargo(){
                return $this->Cargo;
        }
        public function setSalario($Salario){
                $this->Salario=$Salario;
        }
        public function getSalario(){
                return $this->Salario;
        }
    }
?>
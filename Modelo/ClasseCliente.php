<?php
	class ClasseCliente Extends ClasseUsuario{
		
		private $ClienteId;
		private $Status;
		private $DataUltimaCompra;
		private $ClientePerfil;
		
		public function setClienteId($ClienteId){
			$this->ClienteId=$ClienteId;
		}
		public function getClienteId(){
			return $this->ClienteId;
		}
		public function setStatus($Status){
			$this->Status=$Status;
		}
		public function getStatus(){
			return $this->Status;
		}
		public function setDataUltimaCompra($DataUltimaCompra){
			$this->DataUltimaCompra=$DataUltimaCompra;
		}
		public function getDataUltimaCompra(){
			return $this->DataUltimaCompra;
		}
		public function setClientePerfil($ClientePerfil){
			$this->ClientePerfil=$ClientePerfil;
		}
		public function getClientePerfil(){
			return $this->ClientePerfil;
		}
		
	}
?>
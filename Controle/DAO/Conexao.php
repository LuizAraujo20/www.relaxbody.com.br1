<?php

    abstract class Conexao{
        function __construct(){
        }//fim conexao
        public static function getInstance(){
            try{
               $pdo = new PDO("mysql:host=localhost; dbname=www.relaxbody.com.br","root","");
               $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               return $pdo;
            }catch (PDOException $exc){
                echo $exc->getMessage();
            }//fim catch
        }//fim getINstance
    }//fim conexao
    
?>

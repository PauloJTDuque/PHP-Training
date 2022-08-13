<?php

    // Estaclasse é de exemplo.
    class Exemplo 
    {
        private $var1;
        public $var2;

        public static $var3 = 'statico';
    

        public function metodo(){
        
        }
    
        public function metodo2(){

        }
        
        public static function metodoEstatico(){
            echo 'Método Estático';

        }

        public function setVar4($var4){
            $this ->var4 = $var4;
        }
        
        public function pegaVar4(){
             return $this ->var4;
        }

    }    



?>
<?php
    class Pessoa{
        // Objeto Pessoa

        private $nome = 'Paulo Duque';                  //Declarado como private
        private $idade = '61';                                //tudo fica disponível apenas dentro da classe;
        private $peso = '70kg';

        public function crescer(){
            $this->comer();                                     // qdo quero trabalhar com o método dentro da classe uso $this
            echo 'Estou Crescendo';
        }
        
        private function comer(){
            echo 'Estou Comendo';                           // uso "this->"
        }

    }

    // Instanciar
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();  // tracinho ->(chevron) para acessar os métodos


?>
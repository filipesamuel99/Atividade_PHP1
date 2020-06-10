<?php
    class Professor {
        private $nome;
        private $idade;
        private $matricula;
        private $infoSalario;    

        public function __construct($nome,$idade,$matricula,$infoSalario){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->matricula = $matricula;
            $this->infoSalario = $infoSalario;
            echo __CLASS__;                        
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
    
        public function getMatricula(){
            return $this->matricula;
        }
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }
    
        public function getInfosalario(){
            return $this->infoSalario;
        }
        public function setInfosalario($infoSalario){
            $this->infoSalario = $infoSalario;
        }
       
    }
    

    class ProfessorHorista extends Professor {
        private $horasTrabalhadas = 200;
        private $valorHoraAula = 150;
        private $salario;

        public function __construct($nome,$idade,$matricula,$infoSalario){            
            $this->nome = $nome;
            $this->idade = $idade;
            $this->matricula = $matricula;
            $this->infoSalario = $infoSalario;
            echo __CLASS__; 
        }

       
        
        public function getHorasTrabalhadas(){
            return $this->horasTrabalhadas;
        }
        public function setHorasTrabalhadas($horasTrabalhadas){
            $this->horasTrabalhadas = $horasTrabalhadas;
        }

        public function getValorHoraAula(){
            return $this->valorHoraAula;
        }
        public function setValorHoraAula($valorHoraAula){
            $this->valorHoraAula = $valorHoraAula;
        }

        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }

        public function calcularSalario(){
            $this->getSalario();
            $this->setSalario($valorHoraAula * $horasTrabalhadas);
            return $this->getSalario();
            //$this->salario = $valorHoraAula * $horasTrabalhadas;
            //return $salario;
            
        }

        
    }

    class ProfessorFixo extends Professor {
        private $horasTrabalhadas = 40;
        private $salario = 5000;

        public function __construct($nome,$idade,$matricula,$infoSalario){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->matricula = $matricula;
            $this->infoSalario = $infoSalario;
            echo __CLASS__;                        
        }

        public function getHorasTrabalhadas(){
            return $this->horasTrabalhadas;
        }
        public function setHorasTrabalhadas($horasTrabalhadas){
            $this->horasTrabalhadas = $horasTrabalhadas;
        }

        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
    }

    class Usuario {
        private $usuario;
        private $senha = 123456;

        public function validarSenha(){
            if ($senha == 123456) {
                echo "Login feito com sucesso"; 
            }
            else {
                echo "Senha Incorreta";
            }
        }

        public function getUsuario(){
            return $this->usuario;
        }
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
    }

    for ($i=5; $i<16; $i++){
        echo $i;
    }
    
    $professorPai = new Professor ("João", "28", "635272", "6000");
    $professor = new ProfessorHorista ("Samuel", "25", "654321", "200");
    $professor1 = new ProfessorFixo ("José", "38", "123456", "R$5000");
    
    //$usuario = new Usuario;
    //$usuario->getUsuario();
    //$usuario->setUsuario("Samuel");
    //echo $usuario->getUsuario();

    //echo $professor->calcularSalario();
    //echo $usuario->getSenha();
    //echo $professor->calcularSalario();
    //$professor->getHorasTrabalhadas();
    //$professor->setHorasTrabalhadas(155);
    
    
?>    
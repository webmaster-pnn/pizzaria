<?php 


require_once("../app/model/Rotas.class.php");



class Dispatch extends Rotas{
    #atributos
    private $Method;
    private $Param = [];
    private $Obj;
    
    protected function getMethod(){
        return $this->Method;
    }    
    public function setMethod($Method){
        $this->Method = $Method;
    }
    protected function getParam(){
        return $this->Param;
    }
    public function setParam($Param){
        $this->Param = $Param;
    }

    #metodo construtor
    public function __construct(){
        self::addController();
    }

    #metodo de adiçao de controller
    private function addController(){
        $RotaController = $this->getRota();
        $NameS= "Controller/{$RotaController}.php";
        // $this->Obj= new $NameS;
        include($NameS);
        $this->Obj = new $RotaController;
        
        if (isset($this->parseUrl()[1])){
            self::addMethod();
        }
    }


    #metodo de adiçao de método do  controller
    private function addMethod(){

        if (method_exists($this->Obj, $this->parseUrl()[1])){
          
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj,$this->getMethod()], $this->getParam());
        }

    }

    #metodo de adiçao de parametros do controller
    private function addParam(){

        $ContArray = count($this->parseUrl());

        if ($ContArray > 2){
           foreach($this->parseUrl() as $key => $value){
              if($key > 1 ){
                  $this->setParam($this->Param += [$key => $value]);
              }
           }
          

        }

    }
}




 ?>
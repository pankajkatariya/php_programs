<?php
interface Car { 
  public function setModel($name);
  
  public function getModel();
}
interface Vehicle {
    const FOO = 1;
    public function setHasWheels($bool); 
   
    public function getHasWheels();
}

class MiniCar implements Car,Vehicle {
    private $model; 
    private $hasWheels; 

    public function setModel($name)
    { 
        $this -> model = $name; 
    }

    public function getModel()
    {
        return $this -> model; 
    }

    public function setHasWheels($bool)
    { 
        $this -> hasWheels = $bool; 
    }

    public function getHasWheels()
    {
        return ($this -> hasWheels)? "has wheels" : "no wheels";
    }
}

$obj = new MiniCar();
$obj->setHasWheels(true);
echo $obj->getHasWheels();
echo MiniCar::FOO;
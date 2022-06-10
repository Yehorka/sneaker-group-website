<?php 

class Planet{
    private $name;
    private $diameter;
    private $inhabited;

    public function __construct($name, $diameter, $inhabited) {
        $this->name = $name;
        $this->diameter = $diameter;
        $this->inhabited = $inhabited;
    }

    public function getname()
    {
        return $this->name;
    }

    public function setdiameter($diameter)
    {
        $this->diameter = $diameter;
    }

    public function getdiameter()
    {
        return $this->diameter;
    }

    public function getinhabited()
    {
    if ($inhabited == true){
    return "true";
    }
    else{
        return "false";
    }
}
    public function __toString()
    {
        try
        {
            return "Planet:".$this->getname() . " <br>Is inhabited:".$this->getinhabited() . " <br>Diameter:".$this->getdiameter() ;
        }
        catch (Exception $exception)
        {
            return '';
        }
    }
}

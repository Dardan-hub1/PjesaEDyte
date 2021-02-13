<?php

include_once 'VehicleMapper.php';
require_once 'VehicleModel.php';
session_start();

 if (isset($_POST['vehicle-btn'])) {
    $register = new AddVehicle($_POST);
    $register->insertData();
} else {
    header("Location:../Pages/Account.php");
}

class AddVehicle
{
    private $type="";
    private $model="";
    private $price="";
    private $year="";
    private $imgUrl="";

    public function __construct($formData)
    {
        $this->type = $formData['type'];
        $this->model = $formData['model'];
        $this->price=$formData['price'];
        $this->year=$formData['year'];
        $this->imgUrl = "test"; //$formData['file'];
    }

    public function insertData()
    {
        
        $vehicle = new VehicleModel($this->type,$this->model, $this->price,$this->year,$this->imgUrl);

        $mapper = new VehicleMapper();
        $mapper->insertVehicle($vehicle);
        header("Location:../Pages/Account.php");
    }
}

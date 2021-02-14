<?php

include_once 'VehicleMapper.php';
require_once 'VehicleModel.php';
// include_once 'simpleUserClass.php';
// require_once 'userMapper.php';

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
    // $mapper = new UserMapper();
    // private $edited_by= $mapper->getId($user);

    public function __construct($formData)
    {
        $this->type = $formData['type'];
        $this->model = $formData['model'];
        $this->price=$formData['price'];
        $this->year=$formData['year'];
        $this->imgUrl =$formData['file'];
    }   

    public function insertData()
    {
        $vehicle = new VehicleModel($this->type,$this->model, $this->price,$this->year, $this->imgUrl);

        $mapper = new VehicleMapper();
        $mapper->insertVehicle($vehicle);
        header("Location:../Pages/Account.php");
    }
}

<?php

include_once 'VehicleMapper.php';
require_once 'VehicleModel.php';
// include_once 'simpleUserClass.php';
// require_once 'userMapper.php';

session_start();
if (isset($_POST['vehicle-btn'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $fileNameNew = uniqid('', true).".".$fileActualExt;
    $fileDestination = '../uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);

    $edited_by = $_SESSION["username"];
    $register = new AddVehicle($_POST, $fileDestination, $edited_by);
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
    private $edited_by = '';
    // $mapper = new UserMapper();

    public function __construct($formData, $fileDestination, $edited_by)
    {
        $this->type = $formData['type'];
        $this->model = $formData['model'];
        $this->price=$formData['price'];
        $this->year=$formData['year'];
        $this->imgUrl = $fileDestination;
        $this->edited_by = $edited_by;
    }   

    public function insertData()
    {
        $vehicle = new VehicleModel($this->type,$this->model, $this->price,$this->year, $this->imgUrl, $this->edited_by);

        $mapper = new VehicleMapper();
        $mapper->insertVehicle($vehicle);
        header("Location:../Pages/Home.php");
    }
}

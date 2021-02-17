<?php

include_once 'VehicleMapper.php';
include_once 'VehicleModel.php';

session_start();
if (isset($_GET['id']) && isset($_GET['price']) && isset($_GET['type']) && isset($_GET['model'])) {
    $vehicleId = $_GET['id'];
    $type = $_GET['type'];
    $model = $_GET['model'];
    $price = $_GET['price'];
    $year = $_GET['year'];
    $edited_by = $_SESSION['username'];
    $VehicleModel = new VehicleModel($type,$model,$price,$year,"",$edited_by);
    $mapper = new VehicleMapper();
    $mapper->editVehicle($VehicleModel, $vehicleId);
    header("Location:../Pages/Home.php");
}
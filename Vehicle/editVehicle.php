<?php

include_once 'VehicleMapper.php';
include_once 'VehicleModel.php';
if (isset($_GET['price']) && isset($_GET['price'])) {
    $vehicleId = $_GET['id'];
    $price = $_GET['price'];
    $model = $_GET['model'];
    $VehicleModel = new VehicleModel("",$model,$price,"","");
    $mapper = new VehicleMapper();
    $mapper->editVehicle($VehicleModel, $vehicleId);
    header("Location:../Pages/Dashboard.php");
}
<?php
include_once 'VehicleMapper.php';
if (isset($_GET['id'])) {
    $vehicleId = $_GET['id'];
    $mapper = new VehicleMapper();
    $mapper->deleteVehicle($vehicleId);
    header("Location:../Pages/Home.php");
}

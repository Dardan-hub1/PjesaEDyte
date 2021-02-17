<?php
require_once "DatabaseConfig.php";

class VehicleMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getVehicleById($vehicleId)
    {
        $this->query = "select * from vehicle where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $vehicleId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getVehicleByModel($model)
    {
        $this->query = "select * from vehicle where model=:model";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":model", $model);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllVehicles()
    {
        $this->query = "select * from vehicle";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function editVehicle(\VehicleModel $vehicle, $vehicleId)
    {
        $this->query = "update vehicle set type=:type, price=:price, model=:model, year=:year, edited_by=:edited_by where id=:id";
        $statement = $this->conn->prepare($this->query);
        $type = $vehicle->getType();
        $model = $vehicle->getModel();
        $price = $vehicle->getPrice();
        $year = $vehicle->getYear();
        $edited_by = $vehicle->getEditedBy();
        $statement->bindParam(":id", $vehicleId);
        $statement->bindParam(":type", $type);
        $statement->bindParam(":model", $model);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":year", $year);
        $statement->bindParam(":edited_by", $edited_by);
        $statement->execute();
    }

    public function insertVehicle(\VehicleModel $vehicle)
    {
        $this->query = "insert into vehicle (type,model,price,year, Image_Url, edited_by) values (:type,:model,:price,:year, :imgUrl, :edited_by)";
        $statement = $this->conn->prepare($this->query);
        $type = $vehicle->getType();
        $model = $vehicle->getModel();
        $price = $vehicle->getPrice();
        $year = $vehicle->getYear();
        $Image_Url = $vehicle->getImgUrl();
        $edited_by = $vehicle->getEditedBy();
        $statement->bindParam(":type", $type);
        $statement->bindParam(":model", $model);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":year", $year);
        $statement->bindParam(":edited_by", $edited_by);
        $statement->bindParam(":imgUrl", $Image_Url);
        $statement->execute();
    }

    public function deleteVehicle($vehicleId)
    {
        $this->query = "delete from vehicle where id=:vehicleId";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":vehicleId", $vehicleId);
        $statement->execute();
    }
}

<?php
class VehicleModel
{
    protected $type;
    protected $model;
    protected  $price;
    protected $year;
    protected $edited_by;
    protected  $imgUrl;

    public function __construct($type,$model, $price,$year, $imgUrl, $edited_by) {
        $this->type = $type;
        $this->model = $model;
        $this->price=$price;
        $this->year=$year;
        $this->edited_by = $edited_by;
        $this->imgUrl = $imgUrl;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function getEditedBy()
    {
        return $this->edited_by;
    }
    public function getImgUrl()
    {
        return $this->imgUrl;
    }
}

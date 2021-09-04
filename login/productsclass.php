<?php
class products
{
    private $id, $product_type, $product_bm, $model_id, $price, $registration_date, $product_image;
    public function setid($id)
    {
        $this->id = $id;
    }
    public function getid()
    {
        return $this->id;
    }
    public function setproduct_type($product_type)
    {
        $this->product_type = $product_type;
    }
    public function getproduct_type()
    {
        return $this->product_type;
    }
    public function setproduct_bm($product_bm)
    {
        $this->product_bm = $product_bm;
    }
    public function getproduct_bm()
    {
        return $this->product_bm;
    }
    public function setmodel_id($model_id)
    {
        $this->model_id = $model_id;
    }
    public function getmodel_id()
    {
        return $this->model_id;
    }
    public function setprice($price)
    {
        $this->price = $price;
    }
    public function getprice()
    {
        return $this->price;
    }
    public function setregistration_date($registration_date)
    {
        $this->registration_date = $registration_date;
    }
    public function getregistration_date()
    {
        return $this->registration_date;
    }
    public function setproduct_image($product_image)
    {
        $this->product_image = $product_image;
    }
    public function getproduct_image()
    {
        return $this->product_image;
    }
}

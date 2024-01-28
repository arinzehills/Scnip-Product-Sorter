<?php
namespace App\SortersClasses;
class Product
{
    //this class is use to format the product
    public $id;
    public $name;
    public $price;
    public $created;
    public $sales_count;
    public $views_count;

    public function __construct($id, $name, $price, $created, $sales_count, $views_count)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->created = $created;
        $this->sales_count = $sales_count;
        $this->views_count = $views_count;
    }

    public function getSalesPerViewRatio()
    {
        return $this->sales_count / $this->views_count;
    }
}
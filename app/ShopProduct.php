<?php
namespace App;

class ShopProduct
{
    protected  $title;
    protected  $producerMainName;
    protected  $producerFirstName;
    protected $price;
    private $discount = 0;

    function __construct(
        $title,
        $firstName,
        $mainName,
        $price
    )
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    public function setDiscount($num)
    {
        return $this->discount;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getPrice()
    {
        return ($this->price - $this->discount);
    }

    public function getProducer(){
        return $this->producerFirstName . " " . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        $base = "($this->title) ( {$this->producerMainName}, ";
        $base .="{$this->producerFirstName} )";
        return $base;
    }
}
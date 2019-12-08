<?php
namespace App;
//здесь прописать select выбранного из базы продукта
class CdProduct extends ShopProduct
{
    private $playLength;

    public function __construct(
        $title,
        $firstName,
        $mainName,
        $price,
        $playLength)
    {
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title}  {$this->producerMainName}, ";
        $base .="{$this->producerFirstName}";
        $base .=": Время звучания - {$this->playLength}";
        return $base;
    }
}
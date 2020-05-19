<?php

class shopProduct
{
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price = 0;

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducer()
    {
        return "{$this->producerFirstName} "
            . "{$this->producerMainName}";
    }

}

class shopProductWriter
{
    public function write(ShopProduct $shopProduct)
    {
        $str = "{$shopProduct->title}: "
            . $shopProduct->getProducer()
            . "({$shopProduct->price})\n";
        print $str;
    }
}

$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", "5.99");

$writer = new shopProductWriter($product1);

$writer->write($product1);
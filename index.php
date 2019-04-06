<?php

class ShopProduct
{
	public $title					= "Стандартный товар";
	public $producerMainName		= "Фамилия автора";
	public $producerFirstName		= "Имя автора";
	public $price					= 0;

	function getProducer()
	{
		return 	"{$this->producerFirstName} "
				."{$this->producerMainName}";	
	}

}

$product1 = new ShopProduct();
print $product1->title;

$product2 = new ShopProduct();

$product1->title = "Собачье сердце";
$product2->title = "Ревизор";
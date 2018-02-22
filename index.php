<?php 

Class Car 
{
	public $name = 'Audi';
	public $color = 'оранжевый';
	public $year = '2010';
	public $price = '500000';
	public function year()
	{
		return $this->year;
	}
}

$audi1 = new Car;
$audi2 = new Car;


Class Tv
{
	public $name = 'Sony';
	public $year = '2016';
	public $price = '10000';
	public $discount = '5';
	public function priceYear()
	{
		$yearDiscount = ($this->year=='2016');
		$discount = min($this->discount, $yearDiscount);
		if ($this->discount) {
			return round($this->price - ($this->price * $discount / 100));
		} else {
			return $this->price;
		
		}	
	}
}

$tv1 = new Tv;
$tv2 = new Tv;


Class Pen 
{
	public $name = 'Cello';
	public $color = 'синий';
	public $price = '20';
	function price()
	{
		
		return $this->price;
		
	}
}

$pen1 = new Pen;
$pen2 = new Pen;


Class Duck
{
	public $category = 'Мандаринка';
	public $price = '2000';
	public function getCategory()
	{
		return $this->category;
	}
}

$duck1 = new Duck;
$duck2 = new Duck;

Class Product 
{
	public $name = 'Canon';
	public $category = 'фотоаппарат';
	public $price = '30000';
	public $discount = '5';
	public function getPrice()
	{
		$photoDiscount = ($this->category=='фотоаппарат');
		$discount = min($this->discount, $photoDiscount);
		if ($this->discount) {
			return round($this->price - ($this->price * $discount / 100));
		} else {
			return $this->price;
		
		}
	}
}

$canon1 = new Product;
$canon2 = new Product;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Классы и объекты</title>
</head>
<body>
	<p>1. Инкапсуляция- это то, как мы создаем классы. Данные, которые принадлежат классу, хранятся в его свойствах, для каких-либо действий с этими данными используются методы.</p>
	<p>2. Плюсы: меньше писать кода, т.к. в классе уже инициализированны (при использовании оператора new вызывается __construct) сойства и нужно лишь подставить необходимые значения для конкретного объекта, а не задавать заново структуру для каждой переменной (как в массиве).<br>
	Минусы: сложны для понимания.
	</p>
</body>
</html>


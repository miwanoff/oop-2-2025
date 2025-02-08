<?php

class Region {
	private $name;
	private $area;
	public function __construct($name, $area) {
		$this->name = $name;
		$this->area = $area;
	}
	public function getName() {
		return $this->name;
	}
	public function getArea() {
		return $this->area;
	}

	public function __toString() {
		return "$this->name $this->name";
	}
}

class PopulatedRegion extends Region {
	private $population;
	public function __construct($name, $area, $population) {
		parent::__construct ( $name, $area );
		$this->population = $population;
	}
	public function getPopulation() {
		return $this->population;
	}
	public function density() {
		return $this->population / $this->getArea ();
	}
	public function __toString() {
		return "Населений регіон ".$this->getName().".\tТериторія ". $this->getArea().
      " кв.км.   \tНаселення ".$this->population." чел.\tПлотність населення ".$this->density()." чол/кв.км.";
	}
}

class Country extends PopulatedRegion {
	private $capital;
	public function __construct($name, $area, $population, $capital) {
		parent::__construct ( $name, $area, $population );
		$this->capital = $capital;
	}
	public function getCapital() {
		return $this->capital;
	}
	public function __toString() {
		return "Країна " . $this->getName().".\tТериторія ".$this->getArea()." кв.км.   \tНаселення ".$this->getPopulation().
		" чел.\tПлотність населення ".$this->density()." чол/кв.км.\tСтолиця ".$this->capital;
	}
}

class City extends PopulatedRegion {
    private $boroughs;
    public function __construct($name, $area, $population, $boroughs) {
		parent::__construct ( $name, $area, $population );
		$this->district = $boroughs;
	}
	public function getBoroughs() {
		return $this->boroughs;
	}

	public function __toString() {
		return "Місто ".$this->getName().".\tТериторія ".$this->getArea()." кв.км.   \tНаселення ".$this->getPopulation().
		" чел.\tПлотність населення ".$this->density()." чел/кв.км.\tРайонів - ".$this->boroughs;
	}
}

$u = new Country ( "Україна", 603700, 46294000, "Київ" );
// echo $c->getName()."\n";
// echo $c->getArea()."\n";
// echo $c->getPopulation()."\n";
// printf("%.4f\n", $c->density());
// echo $c->getCapital()."\n";
$h = new City("Харків", 603745, 800400, 12);
// echo $city->getName()."\n";
// echo $city->getArea()."\n";
// echo $city->getPopulation()."\n";
// printf("%.4f\n", $c->density());
// echo $city->getBoroughs();
echo "\n";
$d = new Country ( "Німеччина", 357021, 1794453, "Берлін" );
$m = new City("Мюнхен", 1447614, 357021, 6);
$m = new City("Мюнхен", 1447614, 357021, 6);
$regions = [$u, $h, $d, $m];

for ($i=0; $i < count($regions); $i++) { 
    //echo $regions[$i]->getName()." {$regions[$i]->getArea()}\n";
	echo $regions[$i]. "\n";
}
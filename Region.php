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
}

$c = new Country ( "Україна", 603700, 46294000, "Київ" );
echo $c->getName()."\n";
echo $c->getArea()."\n";
echo $c->getPopulation()."\n";
printf("%.4f\n", $c->density());
echo $c->getCapital()."\n";
$city = new City("Харків", 603745, 800400, 12);
echo $city->getName()."\n";
echo $city->getArea()."\n";
echo $city->getPopulation()."\n";
printf("%.4f\n", $c->density());
echo $city->getBoroughs();
echo "\n";
$regions = [$c, $city];

for ($i=0; $i < count($regions); $i++) { 
    echo $regions[$i]->getName()."\n";
}
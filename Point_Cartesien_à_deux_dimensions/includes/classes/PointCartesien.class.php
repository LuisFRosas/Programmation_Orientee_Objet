<?php
class PointCartesien {
	const X = 0; //ABSCISSE
	const Y = 0; //ORDONNEE

	private $x;
	private $y;

	//Constructeur
	public function __construct($x = PointCartesien::X,
								$y = PointCartesien::Y) {
		$this->setX($x);
		$this->setY($y);
	}

	//Destructeur
	public function __destruct() {
        echo "<p> Point : {$this->getX()} {$this->getY()} sont supprimée)</p>";
	}
	//Accesseurs et modificateurs
	public function position($newX = PointCartesien::X,	$newY = PointCartesien::Y){
		$this->setX($newX);
		$this->setY($newY);
	}
	
	public function translation($newX = PointCartesien::X,
								$newY = PointCartesien::Y){
		$this->setX($this->getX() + $newX) ;
		$this->setY($this->getY() + $newY);
	}
	
	public function rotation($a) {
		$x = $this->getX();
		$y = $this->getY();
		$a = deg2rad($a);
		$newX = $x * cos($a) - $y * sin($a);
		$newY = $x * sin($a) + $y * cos($a);
		
		$this->setX($newX);
		$this->setY($newY);
	}
	
	public function copie(){
		return clone $this;
	}
	
	public function egaleA(PointCartesien $pc){
		$pc = ($this == $pc)? true : false ;
		return $pc;		
	}
	
	public function distance(PointCartesien $pc){
		if(isset($pc)){
			$x		= $this->getX();
			$y		= $this->getY();
			$pcX	= $pc->getX();
			$pcY	= $pc->getY();
			
			return sqrt(pow($pcX - $x,2) + pow($pcY - $y,2)); 
		}	
	}
	
	public function toString(){
		$x = $this->getX();
		$y = $this->getY();
		return "(" . $x . ","  . $y .")";
	}
	
	public function getX() {
		return $this->x;
	}
	public function setX($x) {
		$this->x = $x;
	}
	
	public function getY() {
		return $this->y;
	}
	public function setY($y) {
		$this->y = $y;
	}
}
?>
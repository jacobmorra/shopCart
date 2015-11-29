<?php
class Item{
	
	public $itnum = 0;
	
	//getter method;
	public function getItemNum(){
		return $this->itnum;
		
	}
	//setter method
	public function setItemNum($val){
		$this->itnum = $val;
	}
}
class Twix extends Item{
	
	//$cost =  4.99;
	
	public function addItemNum($add){	
		$total = $this->getItemNum() + $add;
		$this->setItemNum($total);
		return ($total);
	}
	public function rmvItemNum($rmv){	
		$total = $this->getItemNum() - $rmv;
		if ($total>=0){
			$this->setItemNum($total);
			return ($total);	
		}
		else{
			return 0;
		}
		
	}
	
	public function getCost(){
		return ($this->getItemNum()) * 4.99;
	}
}

class KitKat extends Item{
	
	//$cost =  3.99;
	
	public function addItemNum($add){	
		$total = $this->getItemNum() + $add;
		$this->setItemNum($total);
		return ($total);
	}
	public function rmvItemNum($rmv){	
		$total = $this->getItemNum() - $rmv;
		if ($total>=0){
			$this->setItemNum($total);
			return ($total);	
		}
		else{
			return 0;
		}
		
	}
	public function getCost(){
		return ($this->getItemNum()) * 3.99;
	}
}

class Mars extends Item{
	
	//$cost =  2.99;
	
	public function addItemNum($add){	
		$total = $this->getItemNum() + $add;
		$this->setItemNum($total);
		return ($total);
	}
	public function rmvItemNum($rmv){	
		$total = $this->getItemNum() - $rmv;
		if ($total>=0){
			$this->setItemNum($total);
			return ($total);	
		}
		else{
			return 0;
		}
		
	}
	
	public function getCost(){
		return ($this->getItemNum()) * 2.99;
	}
}
/*testing methods*/
/*$it = new Item();

$it->setItemNum(2);
echo $it->getItemNum();

$kt = new KitKat();

echo $kt->getItemNum();

$kt->setItemNum(5);
echo $kt->getItemNum();

$kt->addItemNum(3);
echo "<br>";
echo $kt->getItemNum();

echo $kt->getCost();
*/
?>
<?php
class Action
{
	public $name = 'Action';
	public $link = 'item.php';

	public function displayName(){
		echo $this->name;
	}

	public function displayLink($id){
		echo 'http://perform.susu.org/house/'.$this->link.'?id='.$id;
	}
}

class HouseItem
{

	function HouseItem() {
		$this->__construct();
	}

	public function __construct($result, $i){
		$this->id=mysql_result($result,$i,"id");
		$this->name=mysql_result($result,$i,"name");
		$this->description=mysql_result($result,$i,"description");
		$this->status=mysql_result($result,$i,"status");
		$this->added_by=mysql_result($result,$i,"added_by");
		$this->container_id=mysql_result($result,$i,"container_id");
		$this->imageURL=mysql_result($result,$i,"imageURL");
	}

	public function getImageURL(){
		return './uploads/'.$this->imageURL;
	}

	public function displayImgURL(){
		echo $this->getImageURL();
	}

	public function displayThumbnail(){
		echo '<img class="thumbnail" src="'.$this->getImageURL().'" />';
	}

	public function displayName($header){
			echo '<'.$header.'>'.$this->name.'</'.$header.'>';
	}

	public function displayDescription(){
		echo '<p>'.$this->description.'</p>';
	}

	public function displayAddedBy(){
		echo $this->added_by;
	}
}


?>
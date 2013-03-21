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
	public $id;
	public $name;
	public $description;
	public $status;
	public $added_by;
	public $container_id;
	public $imageURL;

	function HouseItem() {
		$this->__construct();
	}

	public function __construct($id,$name,$description,$status,$added_by,$container_id,$imageURL) {
		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
		$this->status = $status;
		$this->added_by = $added_by;
		$this->container_id = $container_id;
		$this->imageURL = $imageURL;
	}

	public function getFullURL(){
		return './uploads/'.$this->imageURL;
	}

	public function displayImgURL(){
		echo $this->getFullURL();
	}

	public function displayThumbnail(){
		echo '<img class="thumbnail" src="'.$this->getFullURL().'" />';
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
<?php
class Item {
	
	private $id;
    private $name;
    private $description;
    private $price;
    private $image;
 
	public function __construct($id=NULL, $name=NULL, $description=NULL, $price=Null, $image=NULL) {
		$this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }

   	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $name;
	}

   	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	} 

    function getSelfAsJson(){
        return json_encode(['name'=> $this->name,
                            'description'=> $this->description,
                            'price'=> $this->price,
                            'image'=> $this->image
                        ]);
    }
}
?>
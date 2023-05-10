<?php 
class Product {
private $name, $price, $discount ;

public function __construct($name, $price, $discount){
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;                                                                
 }
 public function get_name(){
    return $this->name;
 }
 public function get_price(){
    return $this->price;
 }
 public function get_discount(){
    return $this->discount;
 }
 public function set_name(){
     $this->name = $name;
 }
 public function set_price(){
     $this->price = $price;
 }
 public function set_discount(){
     $this->discount = $discount;
 }
}

class CDMusic extends Product {
private $artist,$genre ;

function __construct($name, $price, $discount, $artist, $genre) {
    parent::__construct($name, $price, $discount);
    $this->artist = $artist;
    $this->genre = $genre ;
}

public function getArtist(){
    return $this->artist;
}
public function getGenre(){
    return $this->genre;
}
public function setArtist(){
    $this->artist = $artist;
}
public function setGenre(){
    $this->genre = $genre ;
}
public function Harga_CDMusik(){
    return $this->get_price() + ($this->get_price() * 0.1);
}
public function Total_Discount(){
    return $this->Harga_CDMusik()*($this->get_discount() + 5/100);
}
public function CDMusic_Display(){
    echo "Album Karya " . $this->artist ."<br>";
    echo "Judul Album " . $this->get_name()."<br>";
    echo "Harga Album =" . $this->Harga_CDMusik()."<br>";
    echo "Harga Setelah Diskon =". $this->Total_Discount()."<br>";
}
}

class CDRack extends product{
    private $capacity;
    private $model;

    function __construct($name, $price, $discount, $capacity, $model) {
        parent::__construct($name, $price, $discount);
        $this->capacity = $capacity;
        $this->model = $model;
    }
    public function getCapacity() {
        return $this->capacity;
    }
    public function getModel() {
        return $this->model;
    }
    public function setCapacity(){
        $this->capacity = $capacity;
    }
    public function setModel(){
        $this->model = $model;
    }
    public function Harga_CDRack(){
        return $this->get_price() + ($this->get_price() * 0.15);
    }

    public function CDRack_Display() {
        echo "Nama Rack".$this->get_name().'<br>';
        echo "Jumlah Kapasitas Rack " . $this->getCapacity() ."<br>";
        echo "Model Rack " . $this->getModel()."<br>";
        echo "Harga CDRack =" . $this->Harga_CDRack()."<br>";
    }

}
$lagu = new CDMusic('Little Princess',1000,10,'Ucok','Heavy Metal');
$lagu->CDMusic_Display();
$rak = new CDRack('Ucok',5000,0,16,'B899');
$rak->CDRack_Display();
?>
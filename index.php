<?php

class Clothes {
    public $brand;
    protected $color;
    private $price;

    function __construct($brand, $color, $price) {
        $this->brand = $brand;
        $this->color = $color;
        $this->price = $price;
    }

    public function tampilkan() {
        echo "Brand: $this->brand <br>";
        echo "Warna: $this->color <br>";
        echo "Harga: Rp" . $this->price . "<br><br>";
    }
}
class Jacket extends Clothes {}
class TShirt extends Clothes {}
class Pants extends Clothes {}

$jacket = new Jacket("Nike", "Hitam", 350000);
$tshirt = new TShirt("Adidas", "Putih", 150000);
$pants = new Pants("Levis", "Biru", 250000);

echo "JACKET<br>";
$jacket->tampilkan();

echo "T-SHIRT<br>";
$tshirt->tampilkan();

echo "PANTS<br>";
$pants->tampilkan();
?>
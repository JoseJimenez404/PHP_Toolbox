<?php

class Product {
    protected $name;
    protected $price;
    protected $stock = 0;

	public function getPrice(){
		return $this->price;
	}

	public function getName(){
		return $this->name;
	}

	public function setPriceProduct(int $precio){
		if($precio >0){
			$this->price = $precio;
		}
		return "Precio del producto Actualizado";
	}

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getStock() {
        return $this->stock;
    }

    public function addToStock($quantity) {
        if ($quantity > 0) {
            $this->stock += $quantity;
            return "Se agregaron {$quantity} unidades de {$this->name} al inventario.\n";
        } else {
            return "Favor de agregar únicamente números positivos.\n";
        }
    }

    public function sell($quantity) {
        if ($this->stock >= $quantity) {
            $this->stock -= $quantity;
            return "Venta realizada: {$quantity} unidades de {$this->name} vendidas. Quedan {$this->stock} en inventario.\n";
        } elseif ($this->stock > 0) {
            return "No hay suficientes unidades en inventario. Se vendieron {$this->stock} unidades de {$this->name}.\n";
        } else {
            return "No hay unidades disponibles en inventario para {$this->name}.\n";
        }
    }
}

class SalesPerson {
    protected $name;
    protected $commission;

    public function __construct($name, $commission) {
        $this->name = $name;
        $this->commission = $commission;
    }

    public function makeSale($product, $quantity) {
        $saleMessage = $product->sell($quantity);
        $commission = $product->getPrice() * $quantity * ($this->commission / 100);
        $commissionMessage = "Comisión ganada por {$this->name}: {$commission}\n";

        return $saleMessage . $commissionMessage;
    }
}

class SalesManager {
    protected $name;
    protected $area;

    public function __construct($name, $area) {
        $this->name = $name;
        $this->area = $area;
    }

    public function approveDiscount($product, $discountPercentage) {
        if ($discountPercentage >= 0 && $discountPercentage <= 100) {
            $newPrice = $product->getPrice() * (1 - ($discountPercentage / 100));
            // $product->price = $newPrice;
			$product->setPriceProduct($newPrice);
            return "{$this->name} ha aprobado un descuento del {$discountPercentage}% para {$product->getName()}. Nuevo precio: {$newPrice}\n";
        } else {
            return "El porcentaje de descuento debe estar entre 0 y 100.\n";
        }
    }
}

$product = new Product("Jabón", 17);
echo $product->addToStock(10);
echo $product->addToStock(2);
echo $product->addToStock(2);
echo "Inventario actual: {$product->getStock()} unidades.\n";

$salesPerson = new SalesPerson("Vendedor A", 5);
echo $salesPerson->makeSale($product, 12);
$salesManager = new SalesManager("Gerente", "Norte");
echo $salesManager->approveDiscount($product, 10);

echo "Inventario actual: {$product->getStock()} unidades.\n";

?>

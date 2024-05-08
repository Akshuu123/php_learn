<?php
include 'food/class_food.php';
class FoodOrder extends FoodItem {
    public $orderNumber;
    public $items = [];
    public $customerName;

    public function __construct($orderNumber, $customerName) {
        $this->orderNumber = $orderNumber;
        $this->customerName = $customerName;
    }

    public function addItem($foodItem) {
        $this->items[] = $foodItem;
    }

    public function calculateTotalPrice() {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item->getPrice();
        }
        return $totalPrice;
    }

    public function displayOrderDetails() {
        echo "Order Number: {$this->orderNumber}\n";
        echo "Customer Name: {$this->customerName}\n";
        echo "Items in the order:\n";
        foreach ($this->items as $item) {
            echo "- {$item->displayDetails()}\n";
        }
        echo "Total Price: $" . $this->calculateTotalPrice() . "\n";
    }
}
$food_item=new FoodOrder(10,'akshay');
print_r($food_item);

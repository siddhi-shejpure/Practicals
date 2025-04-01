<?php
// Load the XML file
$xml = simplexml_load_file('warehouse.xml');

// Count the number of categories
$categories = $xml->CATEGORY;
echo "Total Categories: " . count($categories) . "<br><br>";

$total_products = 0;

// Iterate through categories
foreach ($categories as $category) {
    $category_name = (string) $category['name'];
    $products = $category->PRODUCT;
    $product_count = count($products);
    $total_products += $product_count;

    echo "Category: $category_name, Products: $product_count <br>";
}

// Print the total number of products in the warehouse
echo "<br>Total Products in Warehouse: $total_products";
?>
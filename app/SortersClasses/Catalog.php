<?php
namespace App\SortersClasses;
class Catalog
{
    private $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getProducts(ProductSorter $sorter): array
    {
        return $sorter->sort($this->products);
    }

    // public function sortBy($criteria)
    // {
    //     switch ($criteria) {
    //         case 'price':
    //             return new PriceSorter();
    //         case 'sales_per_view':
    //             return new SalesPerViewSorter();
    //         // Add more cases for additional sorting criteria
    //         default:
    //             // Default to no sorting
    //             return null;
    //     }
    // }
}

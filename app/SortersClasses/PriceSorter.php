<?php
namespace App\SortersClasses;
class PriceSorter implements ProductSorter
{
    public function sort(array $products): array
    {
        usort($products, function ($a, $b) {
            return $a->price <=> $b->price;
        });

        return $products;
    }
}
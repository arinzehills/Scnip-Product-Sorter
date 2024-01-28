<?php
namespace App\SortersClasses;
class SalesPerViewSorter implements ProductSorter
{
    public function sort(array $products): array
    {
        usort($products, function ($a, $b) {
            return $a->getSalesPerViewRatio() <=> $b->getSalesPerViewRatio();
        });

        return $products;
    }
}
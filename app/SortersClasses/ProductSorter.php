<?php
namespace App\SortersClasses;
interface ProductSorter
{
    public function sort(array $products): array;
}
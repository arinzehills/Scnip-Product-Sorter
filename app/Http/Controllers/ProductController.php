<?php

namespace App\Http\Controllers;


use App\SortersClasses\Catalog;
use App\SortersClasses\PriceSorter;
use App\SortersClasses\Product;
use App\SortersClasses\SalesPerViewSorter;
use Illuminate\Http\Request;

// use PriceSorter;

class ProductController extends Controller
{
    //
    // app/Http/Controllers/YourController.php


    public function index(Request $request)
    {
        // Your array of products
        $products = [
            new Product(1, 'Alabaster Table', 12.99, '2019-01-04', 32, 730),
            new Product(2, 'Zebra Table', 44.49, '2012-01-04', 301, 3279),
            new Product(3, 'Coffee Table', 10.00, '2014-05-28', 1048, 20123),
        ];

        // Create a catalog
        $catalog = new Catalog($products);

        // Create sorters
        $productPriceSorter = new PriceSorter();
        $productSalesPerViewSorter = new SalesPerViewSorter();

        // Get sorted products based on the request
        if ($request->has('sort') && $request->get('sort') === 'sales') {
            $sortedProducts = $catalog->getProducts($productSalesPerViewSorter);
        } else {
            $sortedProducts = $catalog->getProducts($productPriceSorter);
        }
        // dd($products[0]->name);
        // Pass the sorted products to the view
        return view('welcome', ['products' => $sortedProducts]);

}}

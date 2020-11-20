<?php


namespace App\Cobiro\ProductCatalog\Domain;


interface ProductRepository
{
    public function add(Product $product);
}
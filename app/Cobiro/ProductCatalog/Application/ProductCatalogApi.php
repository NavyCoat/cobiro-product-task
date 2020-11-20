<?php


namespace App\Cobiro\ProductCatalog\Application;


use App\Cobiro\ProductCatalog\Application\ViewModel\ProductView;

interface ProductCatalogApi
{

    public function viewProduct(string $uuid): ?ProductView;

    public function createProduct(string $name, int $price): ProductView;

}
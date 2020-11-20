<?php


namespace App\Cobiro\ProductCatalog\Application\Queries;


use App\Cobiro\ProductCatalog\Application\ViewModel\ProductView;

interface ProductQuery
{
    public function findById(string $uuid): ?ProductView;
}
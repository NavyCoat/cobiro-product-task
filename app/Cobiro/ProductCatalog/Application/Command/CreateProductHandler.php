<?php


namespace App\Cobiro\ProductCatalog\Application\Command;


use App\Cobiro\ProductCatalog\Domain\Id;
use App\Cobiro\ProductCatalog\Domain\Name;
use App\Cobiro\ProductCatalog\Domain\Price;
use App\Cobiro\ProductCatalog\Domain\Product;
use App\Cobiro\ProductCatalog\Domain\ProductRepository;

/**
 * Takie handlery mógłbym rejestrować korzystając z tagów przy wykorzystaniu SYymfonowego komponentu DI
 * Albo w małych projektach taki moduł do obsługi komend jest przygotowywany w klasie która przygotowywuje
 * setupowanie modułu.
 */
final class CreateProductHandler
{
    /**
     * @var ProductRepository
     */
    private $products;

    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }

    public function handle(CreateProduct $command)
    {
        //Komendy dodałbym żeby trzymać walidacje pól w jednym miejscu, i takiego... decydenta odnośnie danych.
        //Komenda to DTOs który posiada wszystkie dane potrzebne do wykonanaia akcji w naszym module

        $product = new Product(
            new Id($command->getId()),
            new Name($command->getName()),
            new Price($command->getPrice())
        );

        $this->products->add($product);
    }
}
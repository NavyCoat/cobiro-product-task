<?php


namespace App\Cobiro\ProductCatalog\Application\ViewModel;

/**
 * Nie koniecznie chcę przedstawaić mój domenowy model Produktu.
 * Być może dla wyświetlenia jest on inny (tutaj akurat 1:1)
 */
final class ProductView
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $price;

    public function __construct(string $id, string $name, string $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
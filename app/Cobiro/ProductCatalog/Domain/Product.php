<?php


namespace App\Cobiro\ProductCatalog\Domain;


final class Product
{
    /**
     * @var Name
     */
    private $name;

    /**
     * @var Id
     */
    private $id;

    /**
     * @var Price
     */
    private $price;

    public function __construct(Id $id, Name $name, Price $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @param Name $name
     */
    public function setName(Name $name): void
    {
        //To nie są settery a akcje biznesowe.
        //To jest miesce na spełnianie niezmienników.
        $this->name = $name;
    }

    /**
     * @param Price $price
     */
    public function setPrice(Price $price): void
    {
        //To nie są settery a akcje biznesowe.
        $this->price = $price;
    }
}
<?php


namespace App\Cobiro\ProductCatalog\Domain;


final class Id
{
    /**
     * @var string
     */
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}
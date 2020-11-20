<?php


namespace App\Cobiro\ProductCatalog\Domain;


use App\Cobiro\ProductCatalog\Domain\Exception\InvalidArgumentException;

final class Name
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        if (strlen($name) > 50 ) {
            throw new InvalidArgumentException(sprintf('Name length is too big, its exceed 50 char limit. Given: "%s"', $name));
        }

        $this->name = $name;
    }


}
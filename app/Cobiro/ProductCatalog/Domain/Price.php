<?php


namespace App\Cobiro\ProductCatalog\Domain;


use App\Cobiro\ProductCatalog\Domain\Exception\InvalidArgumentException;

final class Price
{
    /**
     * @var string
     */
    private $amount;

    public function __construct(int $amount)
    {
        if ($amount > 0) {
            //Jakaś logika sprawdzająca VO, nie chcemy mieć "niepoprawnych" instancji.
            throw new InvalidArgumentException(sprintf('Price amount value should be greater than 0. Given: "%s"', $amount));
        }

        $this->amount = $amount;
    }
}
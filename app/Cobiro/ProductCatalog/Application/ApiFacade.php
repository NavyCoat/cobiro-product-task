<?php


namespace App\Cobiro\ProductCatalog\Application;


use App\Cobiro\ProductCatalog\Application\Command;
use App\Cobiro\ProductCatalog\Application\Command\CreateProductHandler;
use App\Cobiro\ProductCatalog\Application\Queries;
use App\Cobiro\ProductCatalog\Application\Queries\ProductQuery;
use App\Cobiro\ProductCatalog\Application\ViewModel\ProductView;
use Ramsey\Uuid\Uuid;

/**
 * W moim dotychaczasowym doświadczeniu, do komunikacji między modułami sprawdzały się fasady
 * imitujące api takiego modułu. Teoretycznie mógłbym zaimplementować tutaj jakieś klienta HTTP
 * przez co jestem w stanie wypiać moduł poza modularny monolit i przekształcić go w mikroserwis.
 */
final class ApiFacade implements ProductCatalogApi
{
    /**
     * @var ProductQuery
     */
    private $query;

    /**
     * Tutaj byłby CommandBus
     * @var CreateProductHandler
     */
    private $command;

    public function __construct(ProductQuery $query, CreateProductHandler $command)
    {
        $this->query = $query;
        $this->command = $command;
    }

    public function viewProduct(string $id): ?ProductView
    {
       return $this->query->findById($id);
    }

    public function createProduct(string $name, int $price): ProductView
    {
        $id = Uuid::uuid4()->toString();

        $command = new Command\CreateProduct(
            $id,
            $name,
            $price
        );

        //todo: gdzieś powinna nastąpić walidacja komendy
        //I tutaj mogło by być na to miejsce.

        $this->command->handle($command);

        //todo: Jeżeli asynchronicznie to zwrócił bym uuid z linkiem to jest chyba 204 i mogę
        return $this->query->findById($id);
    }
}
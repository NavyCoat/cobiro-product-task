<?php declare(strict_types=1);

namespace Tests\Feature;


use Illuminate\Http\Response;
use Tests\TestCase;

class CreateProductTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function shouldCreateProduct()
    {
        //Given: Product with name: "SuperShiny Thing"
        $name = 'SuperShiny Thing';
        $price = 38.99;

        //When: POST request with product is sent to API
        $headers = [
            'Accept' => 'application/json'
        ];
        $response = $this->post('/v1/products', ['name' => $name, 'price' => $price], $headers);

        //Then: I should get 201 with link to created product URI
        $response->assertStatus(201);
        $response->assertHeader('Location');
    }

}
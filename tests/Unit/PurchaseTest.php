<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PurchaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPurchases()
    {
    	$response = $this->json('POST', '/purchases', ['customer_name' => 'Sally']);

        $response->assertStatus(422);

    	$response = $this->json('POST', '/purchases', ['customer_name' => 'Sally', 'quantity' => 5, 'offering_id' => 1]);

        $response->assertStatus(200);
    }
}

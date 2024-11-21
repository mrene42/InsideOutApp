<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Journal;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDataBase;

class Journaltest extends TestCase
{
    use RefreshDataBase;

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_list_of_products_can_be_retrived()
    {
        $this->withoutExceptionHandling();

        Journal::all();

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('home');
    }
}

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


    public function test_CheckIfCanShowEntryinJournalWithApi(){
        $this->withoutExceptionHandling();

        $journal = Journal::factory()->create([
            'entry' => 'Este es un ejemplo',
            'emotion' => 'joy',
        ]);

        $response = $this->get('/journals/' . $journal->id);

        $response->assertStatus(200)
            ->assertViewIs('show')
            ->assertViewHas('journal', $journal);
    }
}

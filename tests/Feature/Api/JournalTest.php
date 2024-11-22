<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Journal;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDataBase;

class JournalTest extends TestCase
{
    use RefreshDataBase;

    public function test_CheckIfReceiveAllEntryOfJournalInJsonFile() {
        $journal = Journal::factory(2)->create();
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)->assertJsonCount(2);
    }
    public function test_CheckIfCanDeleteEntryInJournalWithApi() {
        $journal = Journal::factory(2)->create();
        $response = $this->delete(route('apiDestroy', 1));
        $this->assertDatabaseCount('journals', 1);
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
    public function test_CheckIfCanCreateNewEntryInJournalWithJsonFile() {
        $response = $this->post(route('apiStore', [
            'entry' => 'Hola mundo',
            'emotion' => 'joy',
        ]));
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }
    public function test_CheckIfCanUpdateEntryInJournalWithJsonFile() {
        $response = $this->post(route('apiStore', [
            'entry' => 'Hola mundo',
            'emotion' => 'joy',
        ]));
        $data = ['entry' => 'Hola mundo'];
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
        $response = $this->put('/api/journals/1', [
            'entry' => 'Holi mundi',
            'emotion' => 'anger',
        ]);
        $data = ['entry' => 'Holi mundi'];
        $response = $this->get(route('apiHome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }
}
<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Journal;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDataBase;

class JournalTest extends TestCase
{
    use RefreshDataBase;

    public function test_CheckIfReceiveAllEntryOfJournalInJsonFile(){
        $journal = Journal::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
            ->assertJsonCount(2);
    }
}
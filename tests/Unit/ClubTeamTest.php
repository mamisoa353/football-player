<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\ClubTeam;

class ClubTeamTest extends TestCase
{
    // use RefreshDatabase;

    public function test_can_create_club_team()
    {
        $response = $this->post('/clubteam/action_add', [
            'nom' => 'Real Madrid',
            'profil' => 'rem',
            'code' => 'RM',
            'idligue' => 1,
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('clubteam', ['nom' => 'Real Madrid']);
    }

    public function test_can_update_club_team()
    {
        $clubTeam = ClubTeam::factory()->create();

        $response = $this->get("/clubteam/action_update?nom=Barcelona&profil=bar&code=BAR&idligue=4&id={$clubTeam->id}", [
            'nom' => 'Barcelona',
            'profil' => 'barcelona-logo.jpg',
            'code' => 'BAR',
            'idligue' => 6,
            'id' => $clubTeam->id
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('clubteam', ['nom' => 'Barcelona']);
    }

    public function test_can_list_club_teams()
    {
        $clubTeams = ClubTeam::factory(3)->create();

        $response = $this->get('/clubteam/liste');

        $response->assertStatus(200);
        // foreach ($clubTeams as $clubTeam) {
        //     $response->assertSee($clubTeam->nom);
        // }
    }
}

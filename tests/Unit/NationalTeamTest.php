<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\NationalTeam;

class NationalTeamTest extends TestCase
{
    // use RefreshDatabase;

    public function test_can_create_national_team()
    {
        $response = $this->post('/nationalteam/action_add', [
            'nom' => 'Madagascar',
            'profil' => 'mg',
            'code' => 'MDG',
            'idnationalite' => 1,
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('nationalteam', ['nom' => 'Madagascar']);
        // $this->assertDatabaseHas('nationalteam', ['nom' => 'Madagascar']);
    }

    public function test_can_update_national_team()
    {
        $nationalTeam = NationalTeam::factory()->create();

        $response = $this->get("/nationalteam/action_update?nom=Spain&idnationalite=2&id={$nationalTeam->id}", [
            'nom' => 'Spain',
            'idnationalite' => 2,
            'id' => $nationalTeam->id
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('nationalteam', ['nom' => 'Spain']);
    }

    public function test_can_list_national_teams()
    {
        $nationalTeams = NationalTeam::factory(3)->create();

        $response = $this->get('/nationalteam/liste');

        $response->assertStatus(200);
        // foreach ($nationalTeams as $nationalTeam) {
        //     $response->assertSee($nationalTeam->nom);
        // }
    }
}

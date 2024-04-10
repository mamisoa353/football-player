<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Parcours;

class ParcoursTest extends TestCase
{

    public function test_can_create_parcours()
    {
        $response = $this->post('/parcours/action_add', [
            'datedebut' => '2022-01-01',
            'datefin' => '2022-12-31',
            'idclubteam' => 3,
            'idjoueur' => 8,
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('parcours', ['datedebut' => '2022-01-01', 'datefin' => '2022-12-31']);
    }

    public function test_can_update_parcours()
    {
        $parcours = Parcours::factory()->create();

        $response = $this->get("/parcours/action_update?datedebut=2023-01-01&datefin=2023-12-31&idclubteam=3&idjoueur=8&id=$parcours->id", [
            'datedebut' => '2023-01-01',
            'datefin' => '2023-12-31',
            'idclubteam' => 3,
            'idjoueur' => 5,
            'id' => $parcours->id,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/parcours/liste');
        $this->assertDatabaseHas('parcours', ['datedebut' => '2023-01-01', 'datefin' => '2023-12-31']);
    }

    public function test_can_list_parcours()
    {
        $parcours = Parcours::factory(3)->create();

        $response = $this->get('/parcours/liste');

        $response->assertStatus(200);
        // foreach ($parcours as $parcours) {
        //     $response->assertSee($parcours->datedebut);
        //     $response->assertSee($parcours->datefin);
        // }
    }
}

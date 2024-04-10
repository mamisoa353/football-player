<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Joueur;

class JoueurTest extends TestCase
{


    public function test_can_create_joueur()
    {
        $response = $this->post('/joueur/action_add', [
            'nom' => 'Messi',
            'prenom' => 'Lionel',
            'dtn' => '1987-06-24',
            'taille' => 170,
            'profil' => 'lm10',
            'nb_buts' => 700,
            'idnationalite' => 1,
            'idclubteam' => 8,
            'idnationalteam' => 3,
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('joueur', ['nom' => 'Messi']);
    }

    public function test_can_update_joueur()
    {
        $joueur = Joueur::factory()->create();

        $response = $this->get("/joueur/action_update?nom=Ronaldo&prenom=Cristiano&dtn=1985-02-05&profil=cr7&nbbuts=800&idclubteam=3&idnationalteam=3&id={$joueur->id}", [
            'nom' => 'Ronaldo',
            'prenom' => 'Cristiano',
            'dtn' => '1985-02-05',
            'taille' => 187,
            'profil' => 'cr7',
            'nb_buts' => 800,
            'idnationalite' => 2,
            'idclubteam' => 3,
            'idnationalteam' => 3,
            'id' => $joueur->id
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('joueur', ['nom' => 'Ronaldo']);
    }

    public function test_can_list_joueurs()
    {
        $joueurs = Joueur::factory(3)->create();

        $response = $this->get('/joueur/liste');

        $response->assertStatus(200);
        // foreach ($joueurs as $joueur) {
        //     $response->assertSee($joueur->nom);
        // }
    }
}

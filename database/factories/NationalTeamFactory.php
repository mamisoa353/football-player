<?php
// database/factories/NationalTeamFactory.php

namespace Database\Factories;

use App\Models\NationalTeam;
use Illuminate\Database\Eloquent\Factories\Factory;

class NationalTeamFactory extends Factory
{
    protected $model = NationalTeam::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'idnationalite' => $this->faker->numberBetween(1, 4),
            // Autres attributs de la table national_teams
        ];
    }
}

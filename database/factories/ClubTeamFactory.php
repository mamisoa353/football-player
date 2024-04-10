<?php

namespace Database\Factories;

use App\Models\ClubTeam;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubTeamFactory extends Factory
{
    /**
     * Le modèle associé au factory.
     *
     * @var string
     */
    protected $model = ClubTeam::class;

    /**
     * Définit les attributs par défaut pour une instance du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->unique()->word,
            'profil' => $this->faker->imageUrl(),
            'code' => $this->faker->unique()->lexify('???'),
            'idligue' => $this->faker->numberBetween(1, 4),
        ];
    }
}

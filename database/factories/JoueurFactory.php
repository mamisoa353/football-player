<?php

namespace Database\Factories;

use App\Models\Joueur;
use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    /**
     * Le modèle associé au factory.
     *
     * @var string
     */
    protected $model = Joueur::class;

    /**
     * Définit les attributs par défaut pour une instance du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'dtn' => $this->faker->date,
            'taille' => $this->faker->numberBetween(150, 200),
            'profil' => "shil",
            'nbbuts' => $this->faker->numberBetween(0, 1000),
            'idnationalite' => $this->faker->numberBetween(1, 4),
            'idclubteam' => $this->faker->numberBetween(3, 5),
            'idnationalteam' => $this->faker->numberBetween(3, 5),
        ];
    }
}

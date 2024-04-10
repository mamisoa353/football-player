<?php

namespace Database\Factories;

use App\Models\Parcours;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParcoursFactory extends Factory
{
    /**
     * Le modèle associé au factory.
     *
     * @var string
     */
    protected $model = Parcours::class;

    /**
     * Définit les attributs par défaut pour une instance du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datedebut' => $this->faker->date(),
            'datefin' => $this->faker->date(),
            'idclubteam' => $this->faker->numberBetween(3, 5),
            'idjoueur' => $this->faker->numberBetween(8, 11),
        ];
    }
}

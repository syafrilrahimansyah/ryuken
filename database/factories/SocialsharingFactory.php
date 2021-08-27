<?php

namespace Database\Factories;

use App\Models\Socialsharing;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialsharingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Socialsharing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->name(),
            "pesan" => $this->faker->paragraph(),
            "published_at" => now()
        ];
    }
}

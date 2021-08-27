<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // "user_id" => mt_rand(1, 5),
            // "nama" => $this->faker->name(),
            // "no_tlp" => $this->faker->phoneNumber(),
            // "tmpt_lahir" => $this->faker->city(),
            // "tgl_lahir" => $this->faker->dateTime(),
            // "jkel" => $this->faker->title($jkel = null | 'Laki-laki' | 'Perempuan'),
            // "umur" => mt_rand(22, 50),
            // "agama" => 'Islam',
            // "alamat" => $this->faker->city(),
            // "tmpt_latihan" => 'Buahati Islamic School',
            // "sabuk" => 'kuning',
            // "rw_penyakit" => '-',
            // 'beratbadan' => mt_rand(50, 90)
        ];
    }
}

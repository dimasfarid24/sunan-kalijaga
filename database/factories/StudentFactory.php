<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name,
            'nis' => fake()->unique()->numerify('82######'),
            'jenis_kelamin' => fake()->randomElement(['laki-laki', 'perempuan']),
            'id_user' => User::factory()->siswa(), // membuat atau memilih user secara otomatis
            'tempat_lahir' => fake()->word(),
            'tgl_lahir' => fake()->date(),
            'telp' => fake()->unique()->numerify('628##########'),
            'alamat' => fake()->word(),
            'email' => fake()->email(),
            'angkatan' => fake()->randomDigitNotNull(),
        ];
    }
}

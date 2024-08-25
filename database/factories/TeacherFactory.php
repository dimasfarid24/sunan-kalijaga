<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'nip' => fake()->unique()->numerify('80######'),
            'jenis_kelamin' => fake()->randomElement(['laki-laki', 'perempuan']),
            'id_user' => User::factory()->guru(), // membuat atau memilih user secara otomatis
            'tempat_lahir' => fake()->word(),
            'tgl_lahir' => fake()->date(),
            'telp' => fake()->unique()->numerify('628##########'),
            'alamat' => fake()->word(),
            'email' => fake()->email(),
        ];
    }
}

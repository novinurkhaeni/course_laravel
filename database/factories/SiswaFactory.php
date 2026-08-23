<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'photo' => 'https://i.pravatar.cc/200?u=' . fake()->unique()->uuid(),
            // 'tanggal_lahir' => fake()->dateTimeBetween('-22 years', '-20 years')->format('Y-m-d'),
            // 'jurusan' => fake()->randomElement([
            //     'Teknik Informatika',
            //     'Ilmu Komputer',
            //     'Teknik Mesin',
            //     'Fisika',
            //     'Kedokteran',
            //     'Hukum Internasional'
            // ]),
            // 'nilai' => fake()->numberBetween(75,100)
        ];
    }
}

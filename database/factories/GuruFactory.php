<?php

namespace Database\Factories;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),

            'email' => fake()->unique()->safeEmail(),

            'password' => Hash::make('password'),

            'no_hp' => fake()->phoneNumber(),

            'keahlian' => fake()->randomElement([
                'Pemrograman Web',
                'Pemrograman Mobile',
                'Database',
                'UI/UX Design',
                'Jaringan Komputer',
                'Kecerdasan Buatan',
                'Data Science',
                'Internet of Things',
            ]),

            'photo' => 'https://i.pravatar.cc/200?u=' . fake()->unique()->uuid(),

            'status' => fake()->randomElement([
                'Aktif',
                'Tidak Aktif',
            ]),
        ];
    }
}

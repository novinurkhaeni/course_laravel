<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Kursus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kursus>
 */
class KursusFactory extends Factory
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
            'id_admin' => fake()->randomElement(
                Admin::pluck('id_admin')->toArray()
            ),

            'nama_kursus' => fake()->randomElement([
                'Pemrograman Web',
                'Pemrograman PHP',
                'Laravel Dasar',
                'Database MySQL',
                'Pemrograman Python',
                'Pemrograman Java',
                'Pemrograman Mobile',
                'UI/UX Design',
                'Internet of Things',
                'Kecerdasan Buatan',
            ]),

            'deskripsi' => fake()->paragraph(),

            'harga' => fake()->randomElement([
                100000,
                150000,
                200000,
                250000,
                300000,
                500000,
            ]),

            'durasi' => fake()->numberBetween(10, 40),
            'level' => fake()->randomElement([
                'Pemula',
                'Menengah',
                'Mahir'
            ]),
            'status' => fake()->randomElement([
                'Aktif',
                'Tidak Aktif',
            ]),

        ];
    }
}

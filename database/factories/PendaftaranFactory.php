<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftaran>
 */
class PendaftaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_hp' => '08' . $this->faker->numerify('#########'),
            'nama_lengkap' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'instagram_facebook' => $this->faker->boolean(30) ? '@' . $this->faker->userName() : null,
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date('Y-m-d', now()->subYears(15)),
            'jenis_kelamin' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'sekolah_di' => $this->faker->company() . ' School',
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'nama_orangtua' => $this->faker->name(),
            'no_hp_orangtua' => '08' . $this->faker->numerify('#########'),
            'is_active' => $this->faker->boolean(80), // 80% aktif
            'tanggal_daftar' => now(),
        ];
    }
}

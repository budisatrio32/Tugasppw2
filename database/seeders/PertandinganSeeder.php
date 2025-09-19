<?php

namespace Database\Seeders;

use App\Models\Pertandingan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PertandinganSeeder extends Seeder
{
    public function run(): void
    {
        // Data dummy tim, stadion, liga, dan musim
        $tim = [
            // Premier League
            'Manchester United', 'Manchester City', 'Liverpool', 'Chelsea', 'Arsenal', 'Tottenham Hotspur',
            'Newcastle United', 'Aston Villa', 'West Ham United', 'Brighton',

            // La Liga
            'Real Madrid', 'Barcelona', 'Atletico Madrid', 'Sevilla', 'Real Betis',
            'Valencia', 'Villarreal', 'Athletic Bilbao', 'Real Sociedad', 'Celta Vigo'
        ];

        $stadion = [
            'Old Trafford', 'Anfield', 'Stamford Bridge', 'Etihad Stadium', 'Emirates Stadium',
            'Camp Nou', 'Santiago Bernabeu', 'Wanda Metropolitano', 'Mestalla', 'San Mames'
        ];

        $liga = ['Premier League', 'La Liga'];
        $musim = ['2024/2025', '2025/2026'];

        for ($i = 1; $i <= 15; $i++) {
            $home = fake()->randomElement($tim);
            $away = fake()->randomElement(array_diff($tim, [$home])); // supaya tidak ketemu tim yang sama

            Pertandingan::create([
                'kode_pertandingan' => 'M-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'tanggal'           => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d H:i:s'),
                'home_team'         => $home,
                'away_team'         => $away,
                'stadion'           => fake()->randomElement($stadion),
                'liga'              => fake()->randomElement($liga),
                'musim'             => fake()->randomElement($musim),
                'harga_tiket'       => fake()->numberBetween(50000, 1500000), // harga dalam rupiah
            ]);
        }
    }
}

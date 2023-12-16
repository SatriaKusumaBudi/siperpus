<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshelvesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'code' => 'B001',
                'name' => 'Rak Buku A',
                'created_at' => now(),
            ],
            [
                'code' => 'B002',
                'name' => 'Rak Buku B',
                'created_at' => now(),
            ],
            [
                'code' => 'B003',
                'name' => 'Rak Buku C',
                'created_at' => now(),
            ]
            ];

            foreach ($data as $key => $i) {
                Bookshelf::insert($i);
            }
    }
}

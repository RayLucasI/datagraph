<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'titulo' => 'titulo 1',
            'tema' => 'tema 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'titulo' => 'titulo 2',
            'tema' => 'tema 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'titulo' => 'titulo 3',
            'tema' => 'tema 3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'titulo' => 'titulo 4',
            'tema' => 'tema 4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'titulo' => 'titulo 5',
            'tema' => 'tema 5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'titulo' => 'titulo 6',
            'tema' => 'tema 6',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'titulo' => 'titulo 7',
            'tema' => 'tema 7',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'titulo' => 'titulo 8',
            'tema' => 'tema 8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Noire et jaune',
            'price' => 900,
            'image_url' => 'noir-jaune.jpg',
        ]);
        Product::create([
            'title' => 'Noire et blanche',
            'price' => 900,
            'image_url' => 'noir-blanc.jpg',
        ]);
        Product::create([
            'title' => 'Noire, rouge et verte',
            'price' => 1200,
            'image_url' => 'noir-rouge-vert.jpg',
        ]);
        Product::create([
            'title' => 'Noire et orange',
            'price' => 900,
            'image_url' => 'noir-orange.jpg',
        ]);
        Product::create([
            'title' => 'Blanche et bleue',
            'price' => 900,
            'image_url' => 'blanc-bleu.jpg',
        ]);
        Product::create([
            'title' => 'Blanche et verte',
            'price' => 900,
            'image_url' => 'blanc-vert.jpg',
        ]);
        Product::create([
            'title' => 'Mignon',
            'price' => 1400,
            'image_url' => 'mignon-1.jpg',
        ]);
        Product::create([
            'title' => 'Mignon',
            'price' => 1400,
            'image_url' => 'mignon-2.jpg',
        ]);
        Product::create([
            'title' => 'Noire et blanche',
            'price' => 900,
            'image_url' => 'noir-blanc-2.jpg',
        ]);
        Product::create([
            'title' => 'Bleue et orange',
            'price' => 900,
            'image_url' => 'bleu-orange.jpg',
        ]);
        Product::create([
            'title' => 'Blanche et verte',
            'price' => 900,
            'image_url' => 'blanc-vert-2.jpg',
        ]);
        Product::create([
            'title' => 'Blanche et orange',
            'price' => 900,
            'image_url' => 'blanc-orange.jpg',
        ]);

    }
}

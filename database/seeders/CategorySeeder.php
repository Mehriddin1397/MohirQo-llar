<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'Suniy gullar',
            'photo'=>'product-photo/Suniy gullar.jfif',
        ]);
        Category::create([
            'name'=>'Taqinchoqlar',
            'photo'=>'product-photo/taqinchoqlar.jfif',
        ]); Category::create([
        'name'=>'Kemalar',
        'photo'=>'product-photo/kemalar.jfif',
    ]); Category::create([
        'name'=>'Pichoqlar',
        'photo'=>'product-photo/pichoq.jfif',
    ]); Category::create([
        'name'=>'Sopol buyumlar',
        'photo'=>'product-photo/sopol_buyum.jfif',
    ]); Category::create([
        'name'=>'Suvinerlar',
        'photo'=>'product-photo/suvinerlar.jfif',
    ]);
    }
}

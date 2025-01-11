<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Cabang;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $products = [
            'Mie Instan', 'Roti Tawar', 'Susu UHT', 'Minuman Bersoda', 'Kopi Instan',
            'Sabun Cuci Piring', 'Deterjen', 'Pembalut Wanita', 'Popok Bayi', 'Tisu Toilet',
            'Shampo', 'Sabun Mandi', 'Pasta Gigi',
            'Baterai', 'Plastik Belanja', 'Korek Api', 'Lilin',
        ];
        

        return [
            'cabang_id' => Cabang::inRandomOrder()->first()->id, 
            'name' => $this->faker->randomElement($products),
            'sku' => $this->faker->unique()->regexify('[A-Z0-9]{5}'), 
            'price' => $this->faker->numberBetween(10, 50), 
            'stock' => $this->faker->numberBetween(0, 200), 
            'stock_min' => $this->faker->numberBetween(50, 60), 
        ];
    }
}

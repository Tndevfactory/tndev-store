<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
              
                    'name'=> 'Telephone-evertek-v8 ',
                    'slug'=> $this->faker->unique()->sentence(),
                    'img_uri'=> '/img/smartphone/telephone-portable-evertek-v8-3g-double-sim-rouge-sim-offerte-40-go.png',
                    'price'=> 756.90,
                    'inventory_id'=>1,
                    'category_id'=> 1,
                    'description' => 'Double SIM - Ecran 6.22" IPS LCD+ Gorilla Glass 3 - Résolution 1520 x 720px - Processeur Mediatek MT6765 Octa-Core ( Cortex-A53 4x2,35 GHz et Cortex-A53 4x1,8 GHz) - RAM 3 Go - Mémoire 32 Go extensible jusqu\'à 256 Go - Android 9.0 Pie - ColorOS 6.1.2 - Appareils Photos: 12MP + 2 MP + 5 MP F/2.2 (Frontale) - Lecteur d\'empreintes digitales - 4G - Wifi - Bluetooth - Batterie 4230 mAh - Garantie 1 an - Couleur Noir',
                     'created_at' => Carbon::create(2021,3, 03),
                    'updated_at' => Carbon::create(2021,7, 03),

                    
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(
               [

            [
            'enname'=> 'Web app',
            'frname'=> 'Web app',
            'arname'=> 'Web app',
            'esname'=> 'Web app',
            'itname'=> 'Web app',
            'dename'=> 'Web app',


            'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
            'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
            'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
            'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
            'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
            'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

            'original_img'=> 'storage/img/agency/categories/category_img/original_img/img-1631389418.jpg',
            'thumbnail_h300'=> 'storage/img/agency/categories/category_img/thumbnail_h300/img-1631389418.jpg',
            'thumbnail_h800'=> 'storage/img/agency/categories/category_img/thumbnail_h800/img-1631389418.jpg',

            'created_at' => Carbon::create(2021,5, 03),
             'updated_at' => Carbon::create(2021,6, 03),
            ],
        ]);
    }
}

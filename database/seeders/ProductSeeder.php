<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert(
                [

                    // Smartphones product -----------------------------

                    [
                    'enname'=> 'enLaravel',
                    'frname'=> 'frLaravel',
                    'arname'=> 'arLaravel',
                    'esname'=> 'esLaravel',
                    'itname'=> 'itLaravel',
                    'dename'=> 'deLaravel',

                    'enslug'=> 'enLaravel',
                    'frslug'=> 'frLaravel',
                    'arslug'=> 'arLaravel',
                    'esslug'=> 'esLaravel',
                    'itslug'=> 'itLaravel',
                    'deslug'=> 'deLaravel',

                    'endescription' => 'enDouble SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    'frdescription' => 'frDouble SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    'ardescription' => 'arDouble SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    'esdescription' => 'esDouble SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    'itdescription' => 'itDouble SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    'dedescription' => 'deDouble SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',


                    'original_img'=> 'storage/img/agency/categories/web-app/laravel/original_img/img-1631389308.jpg',
                    'thumbnail_h300'=> 'storage/img/agency/categories/web-app/laravel/thumbnail_h300/img-1631389308.jpg',
                    'thumbnail_h800'=> 'storage/img/agency/categories/web-app/laravel/thumbnail_h800/img-1631389308.jpg',

                    'sub_category_id'=> 1,
                    'created_at' => Carbon::create(2021,5, 03),
                    'updated_at' => Carbon::create(2021,6, 03),

                    ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 2,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 3,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 4,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 5,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 6,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 7,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 8,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 9,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 10,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 11,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 12,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],
                    // [
                    // 'enname'=> 'Laravel',
                    // 'frname'=> 'Laravel',
                    // 'arname'=> 'Laravel',
                    // 'esname'=> 'Laravel',
                    // 'itname'=> 'Laravel',
                    // 'dename'=> 'Laravel',

                    // 'enslug'=> 'Laravel',
                    // 'frslug'=> 'Laravel',
                    // 'arslug'=> 'Laravel',
                    // 'esslug'=> 'Laravel',
                    // 'itslug'=> 'Laravel',
                    // 'deslug'=> 'Laravel',

                    // 'endescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'frdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'ardescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'esdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'itdescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    // 'dedescription' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',

                    // 'img'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',

                    // 'sub_category_id'=> 13,
                    // 'created_at' => Carbon::create(2021,5, 03),
                    // 'updated_at' => Carbon::create(2021,6, 03),

                    // ],


        ]);

    }
}

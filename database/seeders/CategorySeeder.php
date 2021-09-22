<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('categories')->insert(
               [

            [
            'enname'=> 'Web app',
            'frname'=> 'Web app',
            'arname'=> 'Web app',
            'esname'=> 'Web app',
            'itname'=> 'Web app',
            'dename'=> 'Web app',

            'enslug'=> 'enweb-app',
            'frslug'=> 'frweb-app',
            'arslug'=> 'arweb-app',
            'esslug'=> 'esweb-app',
            'itslug'=> 'itweb-app',
            'deslug'=> 'deweb-app',

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

            [
            // 'name'=> 'mobile app',
            // 'slug'=> 'mobile-app',
            'enname'=> 'mobile app',
            'frname'=> 'mobile app',
            'arname'=> 'mobile app',
            'esname'=> 'mobile app',
            'itname'=> 'mobile app',
            'dename'=> 'mobile app',

            'enslug'=> 'enmobile-app',
            'frslug'=> 'frmobile-app',
            'arslug'=> 'armobile-app',
            'esslug'=> 'esmobile-app',
            'itslug'=> 'itmobile-app',
            'deslug'=> 'demobile-app',

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
             'updated_at' => Carbon::create(2021,8, 03),
            ],
             [
            // 'name'=> 'CMS',
            // 'slug'=> 'CMS',
            'enname'=> 'Web app',
            'frname'=> 'Web app',
            'arname'=> 'Web app',
            'esname'=> 'Web app',
            'itname'=> 'Web app',
            'dename'=> 'Web app',

            'enslug'=> 'encmsweb-app',
            'frslug'=> 'fr3web-app',
            'arslug'=> 'ar3web-app',
            'esslug'=> 'es3web-app',
            'itslug'=> 'it3web-app',
            'deslug'=> 'de3web-app',

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
             'updated_at' => Carbon::create(2021,8, 03),
            ],
             [
            // 'name'=> 'softwares',
            // 'slug'=> 'softwares',
            'enname'=> 'Web app',
            'frname'=> 'Web app',
            'arname'=> 'Web app',
            'esname'=> 'Web app',
            'itname'=> 'Web app',
            'dename'=> 'Web app',

            'enslug'=> 'en4web-app',
            'frslug'=> 'fr4web-app',
            'arslug'=> 'ar4web-app',
            'esslug'=> 'es4web-app',
            'itslug'=> 'it4web-app',
            'deslug'=> 'de4web-app',

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
             'updated_at' => Carbon::create(2021,8, 03),
            ],
             [
            // 'name'=> 'educational',
            // 'slug'=> 'educational',
            'enname'=> 'Web app',
            'frname'=> 'Web app',
            'arname'=> 'Web app',
            'esname'=> 'Web app',
            'itname'=> 'Web app',
            'dename'=> 'Web app',

            'enslug'=> 'en5web-app',
            'frslug'=> 'fr5web-app',
            'arslug'=> 'ar5web-app',
            'esslug'=> 'es5web-app',
            'itslug'=> 'it5web-app',
            'deslug'=> 'de5web-app',

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
             'updated_at' => Carbon::create(2021,8, 03),
            ],
             [
            // 'name'=> 'update/fix-up',
            // 'slug'=> 'update',
            'enname'=> 'Web app',
            'frname'=> 'Web app',
            'arname'=> 'Web app',
            'esname'=> 'Web app',
            'itname'=> 'Web app',
            'dename'=> 'Web app',

            'enslug'=> 'en6web-app',
            'frslug'=> 'fr6web-app',
            'arslug'=> 'ar6web-app',
            'esslug'=> 'es6web-app',
            'itslug'=> 'it6web-app',
            'deslug'=> 'de6web-app',

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
             'updated_at' => Carbon::create(2021,8, 03),
            ],

        ]);
    }
}

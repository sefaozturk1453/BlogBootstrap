<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Yazi;
class YaziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create("App\Yazi");
        for ($i=1; $i<=20; $i++){
            Yazi::create([
                "baslik"=>$faker->name(),
                "icerik"=>$faker->paragraph(),
                "url"=>$faker->slug(),
                "kategori_id"=>rand(1,5)
                ]);
            }
    }
}

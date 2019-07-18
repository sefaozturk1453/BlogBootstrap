<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Kategori;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create("App\Kategori");
        for ($i=1; $i<=5; $i++){
            Kategori::create([
                "baslik"=>$faker->name(),
                "url"=>$faker->slug()
                
                ]);
            }
    }
}

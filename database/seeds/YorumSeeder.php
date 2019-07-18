<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Yorum;
class YorumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create("App\Yorum");
        for ($i=1; $i<=8; $i++){
            Yorum::create([
                "email"=>$faker->name(),
                "yorum"=>$faker->paragraph(),
                "yazi_id"=>rand(1,5)
                ]);
        }
    }
}

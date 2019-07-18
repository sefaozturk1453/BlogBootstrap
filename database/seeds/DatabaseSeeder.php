<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(YaziSeeder::class);
        $this->call(YorumSeeder::class);
    }
}

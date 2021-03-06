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
        $this->call([
            UserSeeder::class,
            RolesTableSeeder::class,
            CatSeeder::class,
            GroupSeeder::class,
            GenericSeeder::class,
            PublishSeeder::class,
            PmSeeder::class
        ]);
    }
}

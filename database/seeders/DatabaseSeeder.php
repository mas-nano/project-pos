<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Don't change the order of these seeders.
        $this->call([
            RoleAndPermissionSeeder::class,
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            UnitTableSeeder::class,
            SupplierTableSeeder::class
        ]);
    }
}

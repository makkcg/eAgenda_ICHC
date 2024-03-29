<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(CountrySeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(SuperAdminSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(PageSeeder::class);
    }
}

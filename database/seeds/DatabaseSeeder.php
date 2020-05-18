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
        // $this->call(UserSeeder::class);
        // factory(App\Kelas::class, 3)->create();
        // factory(App\User::class, 10)->create();
        // factory(App\DataKelas::class, 20)->create()->unique();
        $this->call(UsersTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(DataKelasTableSeeder::class);
    }
}

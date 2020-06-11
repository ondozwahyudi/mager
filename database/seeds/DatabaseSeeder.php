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

        $this->call(UsersTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(DataKelasTableSeeder::class);
        factory(App\Questions::class, 15)->create();
        factory(App\Answers::class, 20)->create();
        // $this->call(KelasQuestionsAnswersTableSeeder::class);
    }
}

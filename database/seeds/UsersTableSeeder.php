<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'socialite_id' => '112321729882406935267',
                'socialite_name' => 'google',
                'photo' => 'https://lh3.googleusercontent.com/a-/AOh14GhyR-nDE2uvIqgSuPRtArTVVKPJeElAUVPKBK0h',
                'name' => 'Ondoz Wahyudi',
                'email' => 'ondozwahyudi@gmail.com',
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => 'nVIUtnwfof5HLco7B9tjU9H7JRMVBlvuxBxx3iPnRUcqteyPua2t5WHGcMR3',
                'created_at' => '2020-04-15 21:44:38',
                'updated_at' => '2020-04-15 21:44:38',
            ),
            1 =>
            array(
                'id' => 2,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Percy Anderson',
                'email' => 'muriel47@example.org',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'motpeNpGnu',
                'created_at' => '2020-04-16 00:55:57',
                'updated_at' => '2020-04-16 00:55:57',
            ),
            2 =>
            array(
                'id' => 3,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Neal Reilly',
                'email' => 'gia82@example.net',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'M9I38gTVBU',
                'created_at' => '2020-04-16 00:55:58',
                'updated_at' => '2020-04-16 00:55:58',
            ),
            3 =>
            array(
                'id' => 4,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Gennaro Walker',
                'email' => 'erna49@example.com',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'sC9sXohxGY',
                'created_at' => '2020-04-16 00:55:58',
                'updated_at' => '2020-04-16 00:55:58',
            ),
            4 =>
            array(
                'id' => 5,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Jazmyne Becker',
                'email' => 'blair67@example.org',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'Am0irGddNP',
                'created_at' => '2020-04-16 00:55:58',
                'updated_at' => '2020-04-16 00:55:58',
            ),
            5 =>
            array(
                'id' => 6,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Mr. Abdiel Swift DDS',
                'email' => 'vernon.yost@example.org',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '8W9L4z4xuK',
                'created_at' => '2020-04-16 00:55:58',
                'updated_at' => '2020-04-16 00:55:58',
            ),
            6 =>
            array(
                'id' => 7,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Dr. Reba Nikolaus V',
                'email' => 'lazaro.rempel@example.org',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'wMQ7vjRAJm',
                'created_at' => '2020-04-16 00:55:58',
                'updated_at' => '2020-04-16 00:55:58',
            ),
            7 =>
            array(
                'id' => 8,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Ms. Cordie Pollich II',
                'email' => 'lolita.ratke@example.org',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'L5iOUDBOFR',
                'created_at' => '2020-04-16 00:55:58',
                'updated_at' => '2020-04-16 00:55:58',
            ),
            8 =>
            array(
                'id' => 9,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Elroy Olson',
                'email' => 'qbayer@example.com',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'v0DwdAB3ao',
                'created_at' => '2020-04-16 00:55:58',
                'updated_at' => '2020-04-16 00:55:58',
            ),
            9 =>
            array(
                'id' => 10,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Justyn Sanford',
                'email' => 'austen.kuphal@example.com',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'yIUG1OXqYY',
                'created_at' => '2020-04-16 00:55:58',
                'updated_at' => '2020-04-16 00:55:58',
            ),
            10 =>
            array(
                'id' => 11,
                'socialite_id' => NULL,
                'socialite_name' => NULL,
                'photo' => NULL,
                'name' => 'Alison Runolfsson III',
                'email' => 'zheidenreich@example.net',
                'email_verified_at' => '2020-04-16 00:55:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '7eXq2nKrmw',
                'created_at' => '2020-04-16 00:55:58',
                'updated_at' => '2020-04-16 00:55:58',
            ),
        ));
    }
}

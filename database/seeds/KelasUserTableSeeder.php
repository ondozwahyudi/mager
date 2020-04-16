<?php

use Illuminate\Database\Seeder;

class KelasUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('kelas_user')->delete();

        \DB::table('kelas_user')->insert(array(
            0 =>
            array(
                'id' => 1,
                'user_id' => 1,
                'kelas_id' => 2,
                'status' => '1',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            1 =>
            array(
                'id' => 2,
                'user_id' => 7,
                'kelas_id' => 2,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            2 =>
            array(
                'id' => 3,
                'user_id' => 6,
                'kelas_id' => 3,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            3 =>
            array(
                'id' => 4,
                'user_id' => 6,
                'kelas_id' => 2,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            4 =>
            array(
                'id' => 6,
                'user_id' => 5,
                'kelas_id' => 1,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            5 =>
            array(
                'id' => 7,
                'user_id' => 2,
                'kelas_id' => 2,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            6 =>
            array(
                'id' => 8,
                'user_id' => 2,
                'kelas_id' => 1,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            7 =>
            array(
                'id' => 9,
                'user_id' => 8,
                'kelas_id' => 3,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            8 =>
            array(
                'id' => 10,
                'user_id' => 5,
                'kelas_id' => 3,
                'status' => '1',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            9 =>
            array(
                'id' => 11,
                'user_id' => 4,
                'kelas_id' => 3,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            10 =>
            array(
                'id' => 12,
                'user_id' => 5,
                'kelas_id' => 2,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            11 =>
            array(
                'id' => 13,
                'user_id' => 4,
                'kelas_id' => 2,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            12 =>
            array(
                'id' => 15,
                'user_id' => 1,
                'kelas_id' => 1,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            13 =>
            array(
                'id' => 17,
                'user_id' => 8,
                'kelas_id' => 2,
                'status' => '0',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
            14 =>
            array(
                'id' => 20,
                'user_id' => 6,
                'kelas_id' => 1,
                'status' => '1',
                'created_at' => '2020-04-15 22:29:28',
                'updated_at' => '2020-04-15 22:29:28',
            ),
        ));
    }
}

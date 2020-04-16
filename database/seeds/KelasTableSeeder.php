<?php

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('kelas')->delete();

        \DB::table('kelas')->insert(array(
            0 =>
            array(
                'id' => 1,
                'uuid' => 'f7ac82e9-459e-47c7-bfce-0a47bcb86590',
                'nama_kelas' => 'Kutch and Sons',
                'mapel' => 'Sociologist',
                'ruang' => '2021-02-18 18:38:24',
                'kode_kelas' => 'dp08tEG',
                'created_by' => 'Dr. Maryjane Quigley V',
                'created_at' => '2020-04-15 22:29:27',
                'updated_at' => '2020-04-15 22:29:27',
            ),
            1 =>
            array(
                'id' => 2,
                'uuid' => '513b5ff5-8def-4f71-b88c-152148a370d2',
                'nama_kelas' => 'Kihn PLC',
                'mapel' => 'Tour Guide',
                'ruang' => '2023-02-17 10:30:16',
                'kode_kelas' => 'R6WcGMh',
                'created_by' => 'Ondoz Wahyudi',
                'created_at' => '2020-04-15 22:29:27',
                'updated_at' => '2020-04-15 22:29:27',
            ),
            2 =>
            array(
                'id' => 3,
                'uuid' => '8e62595f-b544-4d51-bff9-a88c3401f83d',
                'nama_kelas' => 'Kassulke-Berge',
                'mapel' => 'Law Clerk',
                'ruang' => '2021-06-07 19:03:29',
                'kode_kelas' => 'u6EXiqH',
                'created_by' => 'Mrs. Evie Volkman III',
                'created_at' => '2020-04-15 22:29:27',
                'updated_at' => '2020-04-15 22:29:27',
            ),
        ));
    }
}

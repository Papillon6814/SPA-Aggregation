<?php

use Illuminate\Database\Seeder;

class InusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('inus')->truncate();

        $inus = [
            [
                'name' => 'John'
            ],
            [
                'name' => 'Bob'
            ]
        ];

        // 登録
        foreach ($inus as $inu) {
            # code...
            \App\Inu::create($inu);
        }
    }
}

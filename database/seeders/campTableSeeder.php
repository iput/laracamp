<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camps;

class campTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camp = [
            [
                'title'=>'Gila Belajar',
                'slug'=>"gila-belajar",
                'price'=>280,
                'created_at'=>date('Y-m-d H:i:s', time()),
                'updated_at'=>date('Y-m-d H:i:s', time()),
            ],
            [
                'title'=>'baru mulai',
                'slug'=>"baru-mulai",
                'price'=>200,
                'created_at'=>date('Y-m-d H:i:s', time()),
                'updated_at'=>date('Y-m-d H:i:s', time()),
            ],
        ];

        // foreach ($camp as $key => $camp) {
        //     Camps::create($camp);
        // }
        Camps::insert($camp);
        //
    }
}

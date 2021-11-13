<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            'name' =>'admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>date('Y-m-d H:i:s', time()),
            'password' =>hash('sha256','12345'),
            'is_admin'=>true
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\admin;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
            'username'=>'admin',
            'password'=>'admin',
            'email'=>'rppacleb@dadasgroup.com',
            'type'=>'Super Admin',
            'status'=>'active',
            'login'=>date('Y-m-d H:i:s')
        ]);
    }
}

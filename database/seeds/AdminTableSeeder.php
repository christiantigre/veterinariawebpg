<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create( [
'id'=>1,
'name'=>'Admin',
'email'=>'andrescondo17@gmail.com',
'password'=>'$2y$10$7tvOhPANFQZ2VNPuGw9E7urXs4beS898ckeut.0jnagutPHAA4WeS',
'remember_token'=>NULL,
'created_at'=>'2017-09-27 19:23:01',
'updated_at'=>'2017-09-27 19:23:01'
] );
    }
}
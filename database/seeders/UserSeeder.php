<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'username'=>'admin',
            'password'=>bcrypt('admin'),
            'level'=>'admin'
        ]);
    }
}

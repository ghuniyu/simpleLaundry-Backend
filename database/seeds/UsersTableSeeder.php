<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new User();
        $users->name = 'Admin';
        $users->email = 'admin@laundry.id';
        $users->password = bcrypt('password');
        $users->save();
    }
}

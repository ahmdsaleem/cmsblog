<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Ahmad Saleem',
           'email'  =>'ahmadshk1996@gmail.com',
            'password' => bcrypt('ahmad9697')
        ]);
    }
}

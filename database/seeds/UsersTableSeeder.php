<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
           'name' => 'Ahmad Saleem',
           'email'  =>'ahmadshk1996@gmail.com',
            'password' => bcrypt('ahmad9697'),
            'admin' => 1
        ]);

        Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/ahmad.jpg',
            'about' => 'hey I am admin',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'


        ]);


    }
}

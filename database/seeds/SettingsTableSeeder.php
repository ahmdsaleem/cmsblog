<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingsTableSeeder extends Seeder
{

    public function run()
    {
        Setting::create([
            'site_name' => 'TechCrunch',
            'address' => 'Lahore',
            'contact_number' => '0334 1523221',
            'contact_email' => 'ahmdsaleem@hotmail.com'
        ]);



    }
}

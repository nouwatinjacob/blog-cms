<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'site_name' => "Laravel's Blog",
            'contact_number' => '+234 806 455 7366',
            'contact_email' => 'jaysansa@gmail.com',
            'address' => '15, Oyedele Street off Liasu road, Ikotun'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\GeneralSettings;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSettings::create(['key' => 'header_logo', 'value' => 'header.png']);
        GeneralSettings::create(['key' => 'header_message', 'value' => '']);
        GeneralSettings::create(['key' => 'shop_address', 'value' => '']);
        GeneralSettings::create(['key' => 'shop_phone', 'value' => '']);
        GeneralSettings::create(['key' => 'shop_email', 'value' => '']);
        GeneralSettings::create(['key' => 'currency', 'value' => '']);
        GeneralSettings::create(['key' => 'footer_logo', 'value' => 'footer.png']);
        GeneralSettings::create(['key' => 'facebook_link', 'value' => '']);
        GeneralSettings::create(['key' => 'instagram_link', 'value' => '']);
        GeneralSettings::create(['key' => 'twitter_link', 'value' => '']);
        GeneralSettings::create(['key' => 'linkedin_link', 'value' => '']);
        GeneralSettings::create(['key' => 'open_time', 'value' => '']);
        GeneralSettings::create(['key' => 'frontend_site_link', 'value' => '']);
    }
}

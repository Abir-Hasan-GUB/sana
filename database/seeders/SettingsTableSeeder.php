<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Social Group
            ['key' => 'facebook', 'type' => 'social', 'value' => 'https://facebook.com/yourpage'],
            ['key' => 'linkedin', 'type' => 'social', 'value' => 'https://linkedin.com/in/yourprofile'],
            ['key' => 'twitter', 'type' => 'social', 'value' => 'https://twitter.com/yourhandle'],
            ['key' => 'youtube', 'type' => 'social', 'value' => 'https://youtube.com/yourchannel'],

            // Website Settings
            ['key' => 'nav_logo', 'type' => 'website_settings', 'value' => 'logo.png'],
            ['key' => 'address', 'type' => 'website_settings', 'value' => '123 Street, City, Country'],
            ['key' => 'phone', 'type' => 'website_settings', 'value' => '+123456789'],
            ['key' => 'email', 'type' => 'website_settings', 'value' => 'info@example.com'],
            ['key' => 'footer_summary', 'type' => 'website_settings', 'value' => 'Your footer summary text'],
            ['key' => 'favicon', 'type' => 'website_settings', 'value' => 'favicon.ico'],
            ['key' => 'footer_logo', 'type' => 'website_settings', 'value' => 'footer-logo.png'],

            // About Us Page
            ['key' => 'director_speach', 'type' => 'about_us_page', 'value' => 'Message from the Director'],
            ['key' => 'ceo_speach', 'type' => 'about_us_page', 'value' => 'Message from the CEO'],
            ['key' => 'member_starter_kit', 'type' => 'about_us_page', 'value' => 'Starter kit details'],

            // Home Page
            ['key' => 'banner_title', 'type' => 'home_page', 'value' => 'Welcome to Our Website'],
            ['key' => 'banner_details', 'type' => 'home_page', 'value' => 'Best services for you'],
            ['key' => 'home_banner', 'type' => 'home_page', 'value' => 'banner.jpg'],
            ['key' => 'down_text', 'type' => 'home_page', 'value' => 'Additional information'],

            // Membership Page
            ['key' => 'why_join_details', 'type' => 'membership_page', 'value' => 'Reasons to join us'],
            ['key' => 'benifit_details', 'type' => 'membership_page', 'value' => 'Membership benefits'],
        ];

        // Insert data into the settings table
        DB::table('settings')->insert($settings);
    }
}

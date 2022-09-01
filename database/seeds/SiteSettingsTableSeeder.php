<?php

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Reset the site_settings table
         */
        if (App::environment() == 'local') {
            DB::table('site_settings')->truncate();
        }

        DB::table('site_settings')->insert([
            'site_title'       => 'Dijii',
            'contact_email'    => 'info@dijii.com',
            'contact_phone'    => '123456789',
            'address'          => '',
            'gif_logo'          => 'logo.gif',
            'logo'             => 'logo.png',
            'facebook'         => 'https://www.facebook.com/DijiiUK',
            'twitter'          => 'https://twitter.com/DijiiUK',
            'youtube'          => 'https://www.youtube.com/channel/UCV-27HsfTd64UPxm5sV0uZQ',
            'tiktok'           => 'https://www.tiktok.com/@dijiiuk',
            'instagram'        => 'https://www.instagram.com/dijiiuk/',
            'linkedin'        => 'https://www.linkedin.com/company/dijii/',
            'footer_scripts'   => '',
            'footer_sentence'  => 'SEIS and EIS Advance Assurance Status',
            'copyright'        => '© 2022 dijii. All Rights Reserved UK00003726343',
            'created_at'       => date('Y-m-d H:i:s'),
            'updated_at'       => date('Y-m-d H:i:s')
        ]);
    }
}
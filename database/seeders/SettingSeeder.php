<?php

namespace Database\Seeders;

use App\Models\Setting;
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
        if (!Setting::where('slug', 'facebook')->exists()) {
            Setting::create([
                'slug' => 'facebook',
                'name' => 'Facebook',
                'sort' => '1',
                'type' => 'url',
            ]);
        }

        if (!Setting::where('slug', 'whatsapp')->exists()) {
            Setting::create([
                'slug' => 'whatsapp',
                'name' => 'Whats App',
                'sort' => '2',
                'type' => 'text',
            ]);
        }

        if (!Setting::where('slug', 'instagram')->exists()) {
            Setting::create([
                'slug' => 'instagram',
                'name' => 'Instagram',
                'sort' => '3',
                'type' => 'url',
            ]);
        }

        if (!Setting::where('slug', 'twitter')->exists()) {
            Setting::create([
                'slug' => 'twitter',
                'name' => 'Twitter',
                'sort' => '4',
                'type' => 'url',
            ]);
        }

        if (!Setting::where('slug', 'linkedin')->exists()) {
            Setting::create([
                'slug' => 'linkedin',
                'name' => 'Linkedin',
                'sort' => '5',
                'type' => 'url',
            ]);
        }

        if (!Setting::where('slug', 'email')->exists()) {
            Setting::create([
                'slug' => 'email',
                'name' => 'Email',
                'sort' => '6',
                'type' => 'email',
            ]);
        }

        if (!Setting::where('slug', 'phone-number')->exists()) {
            Setting::create([
                'slug' => 'phone-number',
                'name' => 'Phone Number',
                'sort' => '7',
                'type' => 'text',
            ]);
        }

        if (!Setting::where('slug', 'logo')->exists()) {
            Setting::create([
                'slug' => 'logo',
                'name' => 'Logo',
                'sort' => '8',
                'type' => 'image',
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Page::where('slug', 'about')->exists()) {
            Page::create([
                'slug' => 'about',
                'en' => [
                    'title' => 'Title in English',
                    'body' => 'Body in English',
                ],
                'ar' => [
                    'title' => 'Title in Arabic',
                    'body' => 'Body in Arabic',
                ],
            ]);
        }

        if (!Page::where('slug', 'contact')->exists()) {
            Page::create([
                'slug' => 'contact',
                'en' => [
                    'title' => 'Title in English',
                    'body' => 'Body in English',
                ],
                'ar' => [
                    'title' => 'Title in Arabic',
                    'body' => 'Body in Arabic',
                ],
            ]);
        }

        if (!Page::where('slug', 'privacy')->exists()) {
            Page::create([
                'slug' => 'privacy',
                'en' => [
                    'title' => 'Title in English',
                    'body' => 'Body in English',
                ],
                'ar' => [
                    'title' => 'Title in Arabic',
                    'body' => 'Body in Arabic',
                ],
            ]);
        }
    }
}

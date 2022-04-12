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
                    'body' => "<p>Body in English</p>",
                ],
                'ar' => [
                    'title' => 'Title in Arabic',
                    'body' => "<p>Body in Arabic</p>",
                ],
            ]);
        }

        if (!Page::where('slug', 'contact')->exists()) {
            Page::create([
                'slug' => 'contact',
                'en' => [
                    'title' => 'Title in English',
                    'body' => "<p>Body in English</p>",
                ],
                'ar' => [
                    'title' => 'Title in Arabic',
                    'body' => "<p>Body in Arabic</p>",
                ],
            ]);
        }

        if (!Page::where('slug', 'privacy')->exists()) {
            Page::create([
                'slug' => 'privacy',
                'en' => [
                    'title' => 'Title in English',
                    'body' => "<p>Body in English</p>",
                ],
                'ar' => [
                    'title' => 'Title in Arabic',
                    'body' => "<p>Body in Arabic</p>",
                ],
            ]);
        }
    }
}

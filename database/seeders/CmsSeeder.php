<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Menu;
use App\Models\Setting;

class CmsSeeder extends Seeder
{
    public function run(): void
    {
        // Demo Page
        Page::create([
            'title' => 'Home',
            'slug' => 'home',
            'content' => [
                ['type' => 'text', 'value' => 'Welcome to our site!'],
                ['type' => 'image', 'src' => '/storage/demo/banner.jpg'],
            ],
            'template' => null,
            'status' => 'published',
        ]);

        // Demo Menu
        Menu::create([
            'name' => 'main_menu',
            'items' => [
                ['label' => 'Home', 'url' => '/home'],
                ['label' => 'About', 'url' => '/about'],
                ['label' => 'Contact', 'url' => '/contact'],
            ],
        ]);

        // Demo Settings
        Setting::setValue('site_name', 'My Simple CMS');
        Setting::setValue('logo', [
            'light' => '/storage/logo-light.png',
            'dark' => '/storage/logo-dark.png',
        ]);
    }
}

<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            UserTableSeeder::class,
            AdminTableSeeder::class,
            SettingSeeder::class,
            SliderSeeder::class,
            SectionSeeder::class,
            BlogSeeder::class,
            ServiceSeeder::class,
            PackageSeeder::class,
            CommentSeeder::class,
            ImgExtensionSeeder::class,
            OrderServiceTimesSeeder::class,
        ]);
    }
}
<?php

namespace Database\Seeders;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\{DB, Schema};
class CommentSeeder extends Seeder {
    public function run(): void {
        Schema::disableForeignKeyConstraints();
        DB::table('comments')->truncate();
        Comment::factory(10)->create();
        Schema::enableForeignKeyConstraints();
    }
}

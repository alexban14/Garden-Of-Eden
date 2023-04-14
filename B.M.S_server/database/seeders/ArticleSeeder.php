<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('articles');
        Article::factory(5)
            // generate Comments related to each Article
            // ->has(Comment::factory(3))
            ->create();
        $this->enableForeignKeys();
    }
}

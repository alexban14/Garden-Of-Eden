<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('comments');
        Comment::factory(5)
            // create Articles for comments
            // ->for(Article::factory(1), 'article')
            ->create();
        $this->enableForeignKeys();
    }
}

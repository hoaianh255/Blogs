<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=>'Fashion',
                'slug'=>'fashion',
                'is_published'=> '1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Technology',
                'slug'=>'technology',
                'is_published'=> '1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Travel',
                'slug'=>'travel',
                'is_published'=> '1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Food',
                'slug'=>'food',
                'is_published'=> '1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Photography',
                'slug'=>'photography',
                'is_published'=> '1',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
         \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(30)->create();
        \App\Models\PostCategory::factory(60)->create();

    }
}

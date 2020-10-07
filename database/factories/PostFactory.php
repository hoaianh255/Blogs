<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $ispublished = ['0','1'];
        return [
            'title'=>$title,
            'slug'=>str_slug($title),
            'thumbnail'=>$this->faker->imageUrl(),
            'description'=>$this->faker->text($maxNbChars = 200),
            'content'=>$this->faker->paragraph(),
            'view'=>0,
            'is_published'=>$ispublished[rand(0,1)],
            'especially'=>$ispublished[rand(0,1)],
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                            'admin_id' => 1,
                            'post_title' => "first post",
                            'post_detail' => "whoops",
                            'sub_catagory_id' => 1,
                            'visitors' => 0,
                            'is_sharable' => 1,
                            'is_commentable' => 1
        ];
    }
}

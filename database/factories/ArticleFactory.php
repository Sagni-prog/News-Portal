<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catagory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
     
  
    public function definition()
    {
        $num = random_int(1, 9);
        $id = random_int(1, 10);
        return [
            'user_id' => $id,
            'title' => $this->faker->sentence,
            'body' => $this->faker->text(600),
            'catagory_id' => $num
        ];
    }
}

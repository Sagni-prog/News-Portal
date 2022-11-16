<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catagory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catagory>
 */
class CatagoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'catagory_name' => $this->faker->text(10),
            'show_on_menu' => 'show',
            'catagory_order' => 1
        ];
    }
}

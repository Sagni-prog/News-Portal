<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subcatagory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcatagory>
 */
class SubcatagoryFactory extends Factory
{
    
    public function definition()
    {
        $id = random_int(1, 10);
        $order = random_int(1, 10);
        return [
            'catagory_id' => $id,
            'sub_catagory_name' => $this->faker->sentence(10),
            'show_on_menu' => 'show',
            'sub_catagory_order' => $order 
        ];
    }
}

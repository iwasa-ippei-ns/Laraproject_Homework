<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use FakerGenerator as Faker;
use App\Models\testMember;

class testMemberFactory extends Factory
{
    protected $model = testMember::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'mail' => $this->faker->unique()->safeEmail(),
            'age' => $this->faker->numberBetween(0, 100),
            'department_id' => $this->faker->numberBetween($min = 1, $max = 5)
        ];
    }
}

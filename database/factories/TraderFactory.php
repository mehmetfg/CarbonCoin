<?php

namespace Database\Factories;

use App\Models\Trader;
use Illuminate\Database\Eloquent\Factories\Factory;

class TraderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trader::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dealer_id' => $this->faker->word,
        'exchange_id' => $this->faker->randomDigitNotNull,
        'type' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'secret_key' => $this->faker->word,
        'public_key' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Token;
use Illuminate\Database\Eloquent\Factories\Factory;

class TokenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Token::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dealer_id' => 2,
        'name' => $this->faker->word,
        'symbol' => $this->faker->word,
        'total_supply' => $this->faker->randomDigitNotNull,
        'decimal' => $this->faker->randomDigitNotNull,
        'definition' => $this->faker->word,
        'description' => $this->faker->word,
        'owner_address' => $this->faker->word,
        'contract_address' => $this->faker->word,
        'status' => $this->faker->word,
        'is_active' => $this->faker->boolean,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),

        ];
    }
}

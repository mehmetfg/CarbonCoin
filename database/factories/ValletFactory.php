<?php

namespace Database\Factories;

use App\Models\Vallet;
use Illuminate\Database\Eloquent\Factories\Factory;

class ValletFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vallet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dealer_id' => $this->faker->word,
        'token_id' => $this->faker->word,
        'user_id' => $this->faker->word,
        'name' => $this->faker->word,
        'public_key' => $this->faker->word,
        'private_key' => $this->faker->word,
        'id_card_number' => $this->faker->word,
        'balance' => $this->faker->word,
        'progress_payment' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

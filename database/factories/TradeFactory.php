<?php

namespace Database\Factories;

use App\Models\Trade;
use Illuminate\Database\Eloquent\Factories\Factory;

class TradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trade::class;

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
        'asset_pair_name' => $this->faker->word,
        'price' => $this->faker->word,
        'amount' => $this->faker->word,
        'taker_side' => $this->faker->word,
        'maker_order_id' => $this->faker->word,
        'taker_order_id' => $this->faker->word,
        'maker_fee' => $this->faker->word,
        'taker_fee' => $this->faker->word,
        'side' => $this->faker->word,
        'inserted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

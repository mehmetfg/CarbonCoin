<?php

namespace Database\Factories;

use App\Models\TraderAsset;
use Illuminate\Database\Eloquent\Factories\Factory;

class TraderAssetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TraderAsset::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'trader_id' => $this->faker->word,
        'exchange_id' => $this->faker->randomDigitNotNull,
        'asset_symbol' => $this->faker->word,
        'balance' => $this->faker->word,
        'locked_balance' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

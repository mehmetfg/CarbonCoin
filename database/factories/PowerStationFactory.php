<?php

namespace Database\Factories;

use App\Models\PowerStation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PowerStationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PowerStation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dealer_id' => $this->faker->randomDigitNotNull,
        'vallet_id' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'email' => $this->faker->word,
        'phone' => $this->faker->word,
        'country' => $this->faker->word,
        'city' => $this->faker->word,
        'address' => $this->faker->word,
        'web' => $this->faker->word,
        'installed_power' => $this->faker->word,
        'tax_number' => $this->faker->word,
        'authorized' => $this->faker->word,
        'paid_date' => $this->faker->word,
        'description' => $this->faker->word,
        'status' => $this->faker->randomDigitNotNull,
        'is_active' => $this->faker->word,
        'doc1' => $this->faker->word,
        'doc2' => $this->faker->word,
        'doc3' => $this->faker->word,
        'doc4' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

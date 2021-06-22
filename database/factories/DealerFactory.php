<?php

namespace Database\Factories;

use App\Models\Dealer;
use Illuminate\Database\Eloquent\Factories\Factory;

class DealerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dealer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dealer_id' => $this->faker->randomDigitNotNull,
        'type' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'email' => $this->faker->word,
        'password' => $this->faker->word,
        'phone' => $this->faker->word,
        'address' => $this->faker->word,
        'tax_number' => $this->faker->word,
        'authorized' => $this->faker->word,
        'web' => $this->faker->word,
        'logo' => $this->faker->word,
        'width' => $this->faker->word,
        'favicon' => $this->faker->word,
        'status' => $this->faker->randomDigitNotNull,
        'language' => $this->faker->word,
        'is_active' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

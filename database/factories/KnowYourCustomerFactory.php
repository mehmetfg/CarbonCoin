<?php

namespace Database\Factories;

use App\Models\KnowYourCustomer;
use Illuminate\Database\Eloquent\Factories\Factory;

class KnowYourCustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KnowYourCustomer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dealer_id' => $this->faker->randomDigitNotNull,
        'user_id' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'surname' => $this->faker->word,
        'birthday' => $this->faker->word,
        'id_card_serial' => $this->faker->word,
        'id_card_number' => $this->faker->word,
        'status' => $this->faker->word,
        'is_active' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

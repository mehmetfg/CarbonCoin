<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dealer_id' => $this->faker->word,
        'vallet_id' => $this->faker->randomDigitNotNull,
        'type' => $this->faker->randomDigitNotNull,
        'definition' => $this->faker->word,
        'description' => $this->faker->word,
        'address' => $this->faker->word,
        'quentity' => $this->faker->word,
        'date' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

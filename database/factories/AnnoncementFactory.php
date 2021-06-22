<?php

namespace Database\Factories;

use App\Models\Annoncement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnoncementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Annoncement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dealer_id' => $this->faker->randomDigitNotNull,
        'definition' => $this->faker->word,
        'message' => $this->faker->word,
        'finish_date' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();
        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['男性', '女性']),
            'email' => $this->faker->unique()->safeEmail,
            'zip' => $this->faker->postcode,
            'postal_code' => $this->faker->address,
            'building' => $this->faker->text(8),
            'content' => $this->faker->realtext(20),
            'created_at' => $now,
            'updated_at' => $now,
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Status;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'    => User::factory(),
            'identifier' => strtolower(Str::random(32)),
            'body'       => $this->faker->sentence(),
        ];
    }
}

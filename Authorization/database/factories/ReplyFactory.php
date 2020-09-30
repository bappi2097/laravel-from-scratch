<?php

namespace Database\Factories;

use App\Models\Conversation;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 4),
            'conversation_id' => rand(1, 7),
            'body' => $this->faker->paragraph
        ];
    }
}

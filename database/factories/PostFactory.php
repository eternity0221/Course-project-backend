<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{

    protected array $images = ['storage/images/img/1.jpg', 'storage/images/img/2.jpg', 'storage/images/img/3.jpg'];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->realText(rand(10, 100));
        $descr = $this->faker->realText(rand(100, 500));
        $image = $this->images[rand(0, count($this->images)-1)];
        $time = $this->faker->dateTimeBetween("-30 days", "-1 days");
        return [
            'title' => $title,
            'short_title' => substr($descr, 0, 64),
            'user_id' =>rand(1,2),
            'descr' => $descr,
            'img' => $image,
            'created_at' => $time,
            'updated_at' => $time,
        ];
    }
}

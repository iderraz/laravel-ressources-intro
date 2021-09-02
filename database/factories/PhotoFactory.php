<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
          'url' => $this->faker->imageUrl(50,100),
          'name' => $this->faker->word,
          'description' => $this->faker->text(50)
      ];
    }
}

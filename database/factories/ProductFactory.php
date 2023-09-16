<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word, // Пример случайного слова для имени
            'description' => $this->faker->sentence, // Пример случайного абзаца для описания
            'price' => $this->faker->randomFloat(2, 10, 1000), // Пример случайной десятичной цены
            'count' => $this->faker->numberBetween(1, 100), // Пример случайного количества
            'color' => $this->faker->colorName, // Пример случайного цвета
            'brand' => $this->faker->company, // Пример случайной компании для бренда
            'model' => $this->faker->word, // Пример случайного слова для модели
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']), // Пример случайного размера из списка
            'markup' => $this->faker->numberBetween(1, 5),
            'created_at' => now(), // Текущее время создания
            'updated_at' => now(), // Текущее время обновления
        ];
    }
}

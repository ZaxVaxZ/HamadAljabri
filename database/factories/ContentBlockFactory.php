<?php

namespace Database\Factories;

use App\Models\ContentBlock;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ContentBlock>
 */
class ContentBlockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    	private function fakeArabicText(int $words = 10): string
	{
		$arabic = "ابتثجحخدذرزسشصضطظعغفقكلمنهوي";
		$charArray = mb_str_split($arabic);
    
		return collect(range(1, $words))
			->map(fn() => collect(range(1, rand(2, 6)))
				->map(fn() => $charArray[array_rand($charArray)])
				->implode('')
			)
			->implode(' ');
	}

    public function definition(): array
    {
        return [
			'type' => fake()->randomElement([
				'article',
				'book',
				'interview',
				'series',
				'episode'
			]),
			'locale' => 'en',
			'order' => random_int(0, 10),
			'thumbnail' => '/assets/images/market-01.jpg',
			'title' => 'Default Title',
			'description' => 'Default Description',
			'origin' => 'No where',
			'content' => 'Nothing',
			'link' => 'https://www.google.com',
			'featured' => fake()->boolean(),
			'active' => true,
        ];
    }

	public function arabic(): static
	{
		return $this->state(function () {
			return [
				'locale' => 'ar',
				'title' => $this->fakeArabicText(10),
				'description' => $this->fakeArabicText(30),
			];
		});
	}

	public function english(): static
	{
		return $this->state(function () {
			return [
				'locale' => 'en',
				'title' => fake()->sentence(10),
				'description' => fake()->paragraph(6),
			];
		});
	}
}

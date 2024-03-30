<?php

namespace Firefly\FilamentBlog\Database\Factories;

use Firefly\FilamentBlog\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'logo' => $this->faker->imageUrl(),
            'organization_name' => $this->faker->company,
            'google_analytic_code' => '<script></script>',
            'google_adsense_code' => '<script></script>',
            'quick_links' => [
                $this->faker->word => $this->faker->url(),

                $this->faker->word => $this->faker->url(),

                $this->faker->word => $this->faker->url()
            ],
        ];
    }
}
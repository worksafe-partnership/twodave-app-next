<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'contact_name' => fake()->name(),
            'review_timescale' => fake()->numberBetween(1, 12),
            'vtrams_name' => fake()->name(),
            'email' => fake()->companyEmail(),
            'phone' => fake()->phoneNumber(),
            'low_risk_character' => 'L',
            'med_risk_character' => 'M',
            'high_risk_character' => 'H',
            'primary_colour' => fake()->hexColor(),
            'secondary_colour' => fake()->hexColor(),
            'light_text' => fake()->randomElement([null, 1]),
            'accept_label' => 'Fake Accept Label',
            'amend_label' => 'Fake Amend Label',
            'reject_label' => 'Fake Reject Label',
            'main_description' => '<p>' . fake()->words(20, true) . '</p>',
            'post_risk_assessment_text' => '<p>' . fake()->words(20, true) . '</p>',
        ];
    }
}

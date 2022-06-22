<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomersBooking>
 */
class CustomersBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'surname' => $this->faker->name(),
            'middle_name' => $this->faker->name(),
            'id_number' => rand(1000000, 10000000000),
            'phone_number' => $this->faker->phoneNumber,
            'alternative_phone_number' => $this->faker->phoneNumber,
            'customer_email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address,
            'services' => $this->faker->randomElement([
                "plumbing",
                "carpentry/cabinet making",
                "gardening",
                "landscaping",
                "electrical works",
                "transportation",
                "masonry",
                "painting",
                "food/delivery services",
                "general delivery services",
            ]),
            'service_required' => $this->faker->text($maxNbChars = 175),
            'service_date' => Carbon::create('2022', '03', '06'),
            'service_time' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
    }
}




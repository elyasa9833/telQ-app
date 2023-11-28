<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = ['spam', 'ujaran kebencian', 'pelecehan/perundungan', 'aktivitas perundungan'];
        $index = rand(0, count($type) - 1);
        $rand_type = $type[$index];
        
        return [
            'answer_id' => mt_rand(1, 10),
            'user_id' => mt_rand(1, 10),
            'report_type' => $rand_type
        ];
    }
}

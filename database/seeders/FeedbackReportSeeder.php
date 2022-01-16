<?php

namespace Database\Seeders;

use App\Models\FeedbackReport;
use Illuminate\Database\Seeder;

class FeedbackReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeedbackReport::factory(10)->create();
    }
}

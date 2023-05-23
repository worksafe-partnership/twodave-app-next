<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()->create([
            'name' => 'Worksafe Partnership',
            'review_timescale' => 12,
            'vtrams_name' => 'TBC',
            'email' => 'contact@worksafe-partnership.co.uk',
            'phone' => 'TBC',
            'low_risk_character' => 'L',
            'med_risk_character' => 'M',
            'high_risk_character' => 'H',
            'primary_colour' => '#621738',
            'secondary_colour' => '#388331',
            'accept_label' => 'TBC',
            'amend_label' => 'TBC',
            'reject_label' => 'TBC',
            'contact_name' => 'Mark Carrington',
        ]);
    }
}

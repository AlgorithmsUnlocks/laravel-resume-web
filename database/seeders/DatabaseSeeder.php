<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Validation\Rules\In;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([HeroResumeSeeder::class]);
        $this->call([AchievementsResumeSeeder::class]);
        $this->call([BlogResumeSeeder::class]);
        $this->call([ClientsResumeSeeder::class]);
        $this->call([ContactFormsResumeSeeder::class]);
        $this->call([ContactInfoResumeSeeder::class]);
        $this->call([EducationResumeSeeder::class]);
        $this->call([ExperienceResumeSeeder::class]);
        $this->call([InterestResumeSeeder::class]);
        $this->call([LanguageResumeSeeder::class]);
        $this->call([LocationResumeSeeder::class]);
        $this->call([PortfolioResumeSeeder::class]);
        $this->call([ProfileResumeSeeder::class]);
        $this->call([ReviewsResumeSeeder::class]);
        $this->call([ServiceResumeSeeder::class]);
    }
}

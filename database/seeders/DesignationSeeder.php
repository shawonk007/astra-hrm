<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $designations = [
            [ 'title' => 'Chief Executive Officer (CEO)', 'slug' => Str::slug('Chief Executive Officer (CEO)'), 'status' => 1 ],
            [ 'title' => 'Chief Operating Officer (COO)', 'slug' => Str::slug('Chief Operating Officer (COO)'), 'status' => 1 ],
            [ 'title' => 'Chief Information Officer (CIO)', 'slug' => Str::slug('Chief Information Officer (CIO)'), 'status' => 1 ],
            [ 'title' => 'Vice President', 'slug' => Str::slug('Vice President'), 'status' => 1 ],
            [ 'title' => 'Director', 'slug' => Str::slug('Director'), 'status' => 1 ],
            [ 'title' => 'Senior Project Manager', 'slug' => Str::slug('Senior Project Manager'), 'status' => 1 ],
            [ 'title' => 'Senior Software Engineer', 'slug' => Str::slug('Senior Software Engineer'), 'status' => 1 ],
            [ 'title' => 'Senior Financial Analyst', 'slug' => Str::slug('Senior Financial Analyst'), 'status' => 1 ],
            [ 'title' => 'IT Support Specialist', 'slug' => Str::slug('IT Support Specialist'), 'status' => 1 ],
            [ 'title' => 'HR Generalist', 'slug' => Str::slug('HR Generalist'), 'status' => 1 ],
            [ 'title' => 'Operations Manager', 'slug' => Str::slug('Operations Manager'), 'status' => 1 ],
            [ 'title' => 'Product Manager', 'slug' => Str::slug('Product Manager'), 'status' => 1 ],
            [ 'title' => 'Software Engineer', 'slug' => Str::slug('Software Engineer'), 'status' => 1 ],
            [ 'title' => 'Financial Planner', 'slug' => Str::slug('Financial Planner'), 'status' => 1 ],
            [ 'title' => 'Data Analyst', 'slug' => Str::slug('Data Analyst'), 'status' => 1 ],
        ];

        foreach ($designations as $designation) {
            Designation::create($designation);
        }
    }
}

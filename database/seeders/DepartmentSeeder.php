<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [ 'title' => 'Finance and Accounting', 'slug' => Str::slug('Finance and Accounting'), 'status' => 1 ],
            [ 'title' => 'Human Resources (HR)', 'slug' => Str::slug('Human Resources (HR)'), 'status' => 1 ],
            [ 'title' => 'Marketing and Sales', 'slug' => Str::slug('Marketing and Sales'), 'status' => 1 ],
            [ 'title' => 'Research and Development (R&D)', 'slug' => Str::slug('Research and Development (R&D)'), 'status' => 1 ],
            [ 'title' => 'Operations and Supply Chain', 'slug' => Str::slug('Operations and Supply Chain'), 'status' => 1 ],
            [ 'title' => 'Information Technology (IT)', 'slug' => Str::slug('Information Technology (IT)'), 'status' => 1 ],
            [ 'title' => 'Legal and Compliance', 'slug' => Str::slug('Legal and Compliance'), 'status' => 1 ],
            [ 'title' => 'Corporate Communications', 'slug' => Str::slug('Corporate Communications'), 'status' => 1 ],
            [ 'title' => 'Strategy and Business Development', 'slug' => Str::slug('Strategy and Business Development'), 'status' => 1 ],
            [ 'title' => 'Customer Service', 'slug' => Str::slug('Customer Service'), 'status' => 1 ],
            [ 'title' => 'Environmental, Health, and Safety (EHS)', 'slug' => Str::slug('Environmental, Health, and Safety (EHS)'), 'status' => 1 ],
            [ 'title' => 'Quality Assurance', 'slug' => Str::slug('Quality Assurance'), 'status' => 1 ],
            [ 'title' => 'Corporate Social Responsibility (CSR)', 'slug' => Str::slug('Corporate Social Responsibility (CSR)'), 'status' => 1 ],
            [ 'title' => 'International Operations', 'slug' => Str::slug('International Operations'), 'status' => 1 ],
            [ 'title' => 'Risk Management', 'slug' => Str::slug('Risk Management'), 'status' => 1 ],
            [ 'title' => 'Strategic Partnerships and Alliances', 'slug' => Str::slug('Strategic Partnerships and Alliances'), 'status' => 1 ],
            [ 'title' => 'Learning and Development', 'slug' => Str::slug('Learning and Development'), 'status' => 1 ],
            [ 'title' => 'Diversity and Inclusion', 'slug' => Str::slug('Diversity and Inclusion'), 'status' => 1 ],
            [ 'title' => 'Internal Audit', 'slug' => Str::slug('Internal Audit'), 'status' => 1 ],
            [ 'title' => 'Data Analytics and Business Intelligence', 'slug' => Str::slug('Data Analytics and Business Intelligence'), 'status' => 1 ],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}

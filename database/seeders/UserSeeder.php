<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $users = [
            [ 'role_id' => 1, 'first_name' => 'Shawon', 'last_name' => 'Khan', 'username' => 'shawonkhan', 'email' => 'shawonk007@gmail.com', 'phone' => '+88 (016) 88-947741', 'status' => 1, 'password' => Hash::make('Dhaka1216') ],
            [ 'role_id' => 2, 'first_name' => 'Sumona', 'last_name' => 'Akter', 'username' => 'sapriya27', 'email' => 'sapriya27@gmail.com', 'phone' => '+88 (019) 96-021439', 'status' => 1, 'password' => Hash::make('Dhaka1216') ],
            [ 'role_id' => 2, 'first_name' => 'Mohona', 'last_name' => 'Akter', 'username' => 'mohona', 'email' => 'mohona@gmail.com', 'phone' => '+88 (014) 22-455656', 'status' => 1, 'password' => Hash::make('admin') ],
            [ 'role_id' => 2, 'first_name' => 'Shorifa Akter', 'last_name' => 'Akter', 'username' => 'shorifa', 'email' => 'shorifa@gmail.com', 'phone' => '+88 (015) 22-455656', 'status' => 1, 'password' => Hash::make('admin') ],
            // [ 'role_id' => 2, 'first_name' => 'Tony Stark', 'last_name' => 'Tony Stark', 'username' => '', 'email' => 'tony@stark.com', 'phone' => '+88 (012) 34-567890', 'status' => 1, 'password' => Hash::make('secret') ],
            // [ 'role_id' => 3, 'first_name' => 'John Doe', 'last_name' => 'John Doe', 'username' => '', 'email' => 'admin@email.com', 'phone' => '+88 (012) 34-567891', 'status' => 1, 'password' => Hash::make('secret') ],
            // [ 'role_id' => 3, 'first_name' => 'Jane Smith', 'last_name' => 'Jane Smith', 'username' => '', 'email' => 'jsmith@email.com', 'phone' => '+88 (012) 34-567892', 'status' => 1, 'password' => Hash::make('secret') ],
            // [ 'role_id' => 4, 'first_name' => 'John Smith', 'last_name' => 'John Smith', 'username' => '', 'email' => 'john@email.com', 'phone' => '+88 (012) 34-567893', 'status' => 1, 'password' => Hash::make('secret') ],
            // [ 'role_id' => 5, 'first_name' => 'James Brown', 'last_name' => 'James Brown', 'username' => '', 'email' => 'james@email.com', 'phone' => '+88 (012) 34-567894', 'status' => 1, 'password' => Hash::make('secret') ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}

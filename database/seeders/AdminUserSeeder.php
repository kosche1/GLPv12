<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin role if it doesn't exist
        $adminRole = Role::firstOrCreate(["name" => "admin"]);

        // Create admin user
        $admin = User::create([
            "name" => "Admin User",
            "email" => "admin@example.com",
            "password" => Hash::make("Admin@123!"),
            "email_verified_at" => now(),
        ]);

        // Assign admin role to user
        $admin->assignRole($adminRole);

        $this->command->info("Admin user created successfully!");
        $this->command->info("Email: admin@example.com");
        $this->command->info("Password: Admin@123!");
    }
}

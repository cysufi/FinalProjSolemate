<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin_trainer',
            'full_name' => 'Cyryl John Suficiencia',
            'email' => 'cyryl@example.com',
            'password' => 'password',
        ]);

        foreach ([
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567'],
            ['full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09181234567'],
            ['full_name' => 'Pedro Reyes', 'email' => 'pedro@example.com', 'phone' => '09191234567'],
            ['full_name' => 'Ana Garcia', 'email' => 'ana@example.com', 'phone' => '09201234567'],
            ['full_name' => 'Carlo Mendoza', 'email' => 'carlo@example.com', 'phone' => '09211234567'],
        ] as $customer) {
            Customer::create($customer);
        }

        foreach ([
            ['username' => 'cashier_one', 'full_name' => 'Cashier One', 'email' => 'cashier1@example.com'],
            ['username' => 'cashier_two', 'full_name' => 'Cashier Two', 'email' => 'cashier2@example.com'],
            ['username' => 'manager', 'full_name' => 'Manager User', 'email' => 'manager@example.com'],
            ['username' => 'staff', 'full_name' => 'Staff User', 'email' => 'staff@example.com'],
        ] as $user) {
            User::create($user + ['password' => 'password']);
        }

        foreach ([
            ['name' => 'Air Runner Neo', 'price' => 3499.00, 'stock_quantity' => 18],
            ['name' => 'StreetFlex Classic', 'price' => 2899.00, 'stock_quantity' => 12],
            ['name' => 'CloudStep Pro', 'price' => 4299.00, 'stock_quantity' => 9],
            ['name' => 'Court Vision Low', 'price' => 3199.00, 'stock_quantity' => 15],
            ['name' => 'TrailBlaze Hiker', 'price' => 4599.00, 'stock_quantity' => 7],
            ['name' => 'Metro Slip-On', 'price' => 2399.00, 'stock_quantity' => 20],
            ['name' => 'Velocity Knit', 'price' => 3899.00, 'stock_quantity' => 11],
            ['name' => 'Retro High 88', 'price' => 3699.00, 'stock_quantity' => 6],
        ] as $product) {
            Product::create($product);
        }
    }
}

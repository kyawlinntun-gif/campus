<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Hla Hla',
                'email' => 'hlahla@gmail.com',
                'password' => 'password',
                'phone' => '09796937456',
                'address' => 'Bahan',
                'image' => 'profile_default.jpg',
            ],
            [
                'name' => 'Aung Aung',
                'email' => 'aungaung@gmail.com',
                'password' => 'password',
                'phone' => '09451234567',
                'address' => 'Insein',
                'image' => 'profile_default.jpg',
            ],
            [
                'name' => 'Mya Mya',
                'email' => 'myamya@gmail.com',
                'password' => 'password',
                'phone' => '09123456789',
                'address' => 'Hlaing',
                'image' => 'profile_default.jpg',
            ],
            [
                'name' => 'Zaw Zaw',
                'email' => 'zawzaw@gmail.com',
                'password' => 'password',
                'phone' => '09776543210',
                'address' => 'Tamwe',
                'image' => 'profile_default.jpg',
            ],
            [
                'name' => 'Su Su',
                'email' => 'susu@gmail.com',
                'password' => 'password',
                'phone' => '09876543210',
                'address' => 'Sanchaung',
                'image' => 'profile_default.jpg',
            ],
        ];
        
        foreach($teachers as $teacher)
        {
            $user = User::create($teacher);
            $user->assignRole('faculty');
        }
    }
}

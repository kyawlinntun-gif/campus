<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => 'Kyaw Kyaw',
                'email' => 'kyawkyaw@gmail.com',
                'password' => 'password',
                'phone' => '09612345678',
                'address' => 'Mayangone',
                'image' => 'profile_default.jpg',
            ],
            [
                'name' => 'Tun Tun',
                'email' => 'tuntun@gmail.com',
                'password' => 'password',
                'phone' => '09234567890',
                'address' => 'South Okkalapa',
                'image' => 'profile_default.jpg',
            ],
            [
                'name' => 'Shwe Yee',
                'email' => 'shweyee@gmail.com',
                'password' => 'password',
                'phone' => '09432109876',
                'address' => 'Hledan',
                'image' => 'profile_default.jpg',
            ],
            [
                'name' => 'Thiri Thiri',
                'email' => 'thirithiri@gmail.com',
                'password' => 'password',
                'phone' => '09712398765',
                'address' => 'Thingangyun',
                'image' => 'profile_default.jpg',
            ],
            [
                'name' => 'Min Min',
                'email' => 'minmin@gmail.com',
                'password' => 'password',
                'phone' => '09567890123',
                'address' => 'Dagon',
                'image' => 'profile_default.jpg',
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => 'password',
                'phone' => '09712345678',
                'address' => '123 Main St, Springfield',
                'image' => 'john_doe.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'password' => 'password',
                'phone' => '09723456789',
                'address' => '456 Elm St, Springfield',
                'image' => 'jane_smith.jpg',
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alicejohnson@example.com',
                'password' => 'password',
                'phone' => '09734567890',
                'address' => '789 Oak St, Springfield',
                'image' => 'alice_johnson.jpg',
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bobbrown@example.com',
                'password' => 'password',
                'phone' => '09745678901',
                'address' => '321 Pine St, Springfield',
                'image' => 'bob_brown.jpg',
            ],
            [
                'name' => 'Charlie White',
                'email' => 'charliewhite@example.com',
                'password' => 'password',
                'phone' => '09756789012',
                'address' => '654 Cedar St, Springfield',
                'image' => 'charlie_white.jpg',
            ],
            [
                'name' => 'David Green',
                'email' => 'davidgreen@example.com',
                'password' => 'password',
                'phone' => '09767890123',
                'address' => '987 Birch St, Springfield',
                'image' => 'david_green.jpg',
            ],
            [
                'name' => 'Emma Blue',
                'email' => 'emmablue@example.com',
                'password' => 'password',
                'phone' => '09778901234',
                'address' => '234 Maple St, Springfield',
                'image' => 'emma_blue.jpg',
            ],
            [
                'name' => 'Frank Black',
                'email' => 'frankblack@example.com',
                'password' => 'password',
                'phone' => '09789012345',
                'address' => '876 Walnut St, Springfield',
                'image' => 'frank_black.jpg',
            ],
            [
                'name' => 'Grace Yellow',
                'email' => 'graceyellow@example.com',
                'password' => 'password',
                'phone' => '09790123456',
                'address' => '543 Spruce St, Springfield',
                'image' => 'grace_yellow.jpg',
            ],
            [
                'name' => 'Henry Orange',
                'email' => 'henryorange@example.com',
                'password' => 'password',
                'phone' => '09701234567',
                'address' => '678 Fir St, Springfield',
                'image' => 'henry_orange.jpg',
            ],
            [
                'name' => 'Ivy Purple',
                'email' => 'ivypurple@example.com',
                'password' => 'password',
                'phone' => '09712345012',
                'address' => '321 Chestnut St, Springfield',
                'image' => 'ivy_purple.jpg',
            ],
            [
                'name' => 'Jack Gray',
                'email' => 'jackgray@example.com',
                'password' => 'password',
                'phone' => '09723456123',
                'address' => '456 Maple Ave, Springfield',
                'image' => 'jack_gray.jpg',
            ],
            [
                'name' => 'Kathy Silver',
                'email' => 'kathysilver@example.com',
                'password' => 'password',
                'phone' => '09734567234',
                'address' => '789 Oak Blvd, Springfield',
                'image' => 'kathy_silver.jpg',
            ],
            [
                'name' => 'Liam Gold',
                'email' => 'liamgold@example.com',
                'password' => 'password',
                'phone' => '09745678345',
                'address' => '123 Pine Rd, Springfield',
                'image' => 'liam_gold.jpg',
            ],
            [
                'name' => 'Mia Bronze',
                'email' => 'miabronze@example.com',
                'password' => 'password',
                'phone' => '09756789456',
                'address' => '456 Cedar Ct, Springfield',
                'image' => 'mia_bronze.jpg',
            ],
            [
                'name' => 'Noah Steel',
                'email' => 'noahsteel@example.com',
                'password' => 'password',
                'phone' => '09767890567',
                'address' => '789 Birch Pl, Springfield',
                'image' => 'noah_steel.jpg',
            ],
            [
                'name' => 'Olivia Copper',
                'email' => 'oliviacopper@example.com',
                'password' => 'password',
                'phone' => '09778901678',
                'address' => '234 Maple Way, Springfield',
                'image' => 'olivia_copper.jpg',
            ],
            [
                'name' => 'Paul Tin',
                'email' => 'paultin@example.com',
                'password' => 'password',
                'phone' => '09789012789',
                'address' => '567 Spruce Dr, Springfield',
                'image' => 'paul_tin.jpg',
            ],
            [
                'name' => 'Quinn Zinc',
                'email' => 'quinnzinc@example.com',
                'password' => 'password',
                'phone' => '09790123890',
                'address' => '890 Fir St, Springfield',
                'image' => 'quinn_zinc.jpg',
            ],
        ];
        
        
        foreach($students as $student)
        {
            $user = User::create($student);
            $user->assignRole('student');
        }
    }
}

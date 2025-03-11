<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

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

        $role = [
            [
                'name' => 'admin',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'karyawan',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ]

        ];

        Role::insert($role);

        $data = [
            [
                'name' => 'John Doe',
                'email' => 'admin@gmail.com',
                'password' => Hash::make("admin"),
                'role_id' => 1
            ],
            [
                'name' => 'Wira',
                'email' => 'karyawan@gmail.com',
                'password' => Hash::make(value: "karyawan"),
                'role_id' => 2
            ],
            // Add more users as needed...
        ];

        User::insert($data);


        $categories = [
            [
                'name' => 'Hardware',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'Accessory',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'Display',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ]
        ];

        \App\Models\Category::insert($categories);
    }

}

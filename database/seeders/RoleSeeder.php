<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrator',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Agent',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Engineer',
            'guard_name' => 'web'
        ]);
    }
}
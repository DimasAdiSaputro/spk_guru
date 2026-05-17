<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'siswa']);
        Role::create(['name' => 'tim_pkg']);
        Role::create(['name' => 'kepala_sekolah']);
        Role::create(['name' => 'wakil_kepala_sekolah']);
        Role::create(['name' => 'admin']);
    }
}

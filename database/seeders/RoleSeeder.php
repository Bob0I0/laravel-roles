<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $Operator = Role::create(['name' => 'Operator']);
        $Adminbaak = Role::create(['name' => 'Adminbaak']);
        $AdminKeuangan = Role::create(['name' => 'AdminKeuangan']);
        $Mahasiswa = Role::create(['name' => 'Mahasiswa']);
        
        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product'
        ]);
        $Operator->givePermissionTo([
            'create-product',
            'edit-product',
            'delete-product'
        ]);
        $Adminbaak->givePermissionTo([
            'create-mahasiswa',
            'edit-mahasiswa',
            'delete-mahasiswa',
            'show-mahasiswa'
        ]);
        $AdminKeuangan->givePermissionTo([
            'show-mahasiswa'
        ]);
        $Mahasiswa->givePermissionTo([
            'edit-mahasiswa',
            'show-mahasiswa'
        ]);

    }
}

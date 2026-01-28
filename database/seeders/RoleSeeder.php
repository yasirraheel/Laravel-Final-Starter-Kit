<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Roles
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $customerRole = Role::create(['name' => 'customer']);

        // Create Permissions (Example)
        Permission::create(['name' => 'manage settings']);
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'view dashboard']);

        // Assign Permissions to Roles
        $superAdminRole->givePermissionTo(Permission::all());
        $customerRole->givePermissionTo('view dashboard');

        // Create a Super Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Assign Role to Admin
        $admin->assignRole($superAdminRole);

        // Create a Personal Team for Admin (Jetstream requirement)
        $admin->ownedTeams()->save(\App\Models\Team::forceCreate([
            'user_id' => $admin->id,
            'name' => explode(' ', $admin->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}

<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'student',
            'faculty',

            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'schoolyear-list',
            'schoolyear-create',
            'schoolyear-edit',
            'schoolyear-delete',
            'gradelevel-list',
            'gradelevel-create',
            'gradelevel-edit',
            'gradelevel-delete',
            'section-list',
            'section-create',
            'section-edit',
            'section-delete',
            'subject-list',
            'subject-create',
            'subject-edit',
            'subject-delete',
            'requirement-list',
            'requirement-create',
            'requirement-edit',
            'requirement-delete',
            'enrollment-list',
            'enrollment-create',
            'enrollment-edit',
            // 'enrollment-delete',
            'class-list',
            'class-create',
            'class-edit',
            'class-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}

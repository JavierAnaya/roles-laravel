<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Users
        Permission::create([
        	'name' => 'Navegar usuarios',
        	'slug' => 'users.index',
        	'description' =>'Lista u navega todos los usuarios de l sistema'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de usuario',
        	'slug' => 'users.show',
        	'description' =>'Ver detalle de cada  usuario del sistema'
        ]);
        Permission::create([
        	'name' => 'Edición  de Usuarios',
        	'slug' => 'users.edit',
        	'description' =>'Editar cualquier dato de un usuario del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar usuario',
        	'slug' => 'users.destroy',
        	'description' =>'Eliminar cualquier usuario del sistema'
        ]);

        //Roles

         Permission::create([
        	'name' => 'Navegar roles',
        	'slug' => 'roles.index',
        	'description' =>'Lista u navega todos los roles de l sistema'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de rol',
        	'slug' => 'roles.show',
        	'description' =>'Ver detalle de cada rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Creación de roles',
        	'slug' => 'roles.create',
        	'description' =>'CReación de roles para el sistema'
        ]);
        Permission::create([
        	'name' => 'Edición  de rol',
        	'slug' => 'roles.edit',
        	'description' =>'Editar cualquier dato de un rol del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar rol',
        	'slug' => 'roles.destroy',
        	'description' =>'Eliminar cualquier rol del sistema'
        ]);

        //Products

         Permission::create([
        	'name' => 'Navegar productos',
        	'slug' => 'products.index',
        	'description' =>'Lista u navega todos los productos de l sistema'
        ]);
        Permission::create([
        	'name' => 'Ver detalle de producto',
        	'slug' => 'products.show',
        	'description' =>'Ver detalle de cada producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Creación de productos',
        	'slug' => 'products.create',
        	'description' =>'Creación de productos para el sistema'
        ]);
        Permission::create([
        	'name' => 'Edición  de producto',
        	'slug' => 'products.edit',
        	'description' =>'Editar cualquier dato de un producto del sistema'
        ]);
        Permission::create([
        	'name' => 'Eliminar producto',
        	'slug' => 'products.destroy',
        	'description' =>'Eliminar cualquier producto del sistema'
        ]);

    }
}

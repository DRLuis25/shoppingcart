<?php

use App\Models\Productos;
use App\User;
use App\Models\Categorias;
use App\Models\Usuarios;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create(['name' => 'user']);
        Role::create(['name' => 'admin']);
        $admin=User::create([
            'name'=>'Admin',
            'last_name'=>'admin',
            'email'=>'admin@gmail.com',
            'direccion'=>'Sucre',
            'password'=>'$2y$10$lDFpg1.X4h8o6p6J0hj/fueqodK7VsAPBqlaKDugwJUEZsKRUSSxe' //123
        ]);
        $admin->assignRole('admin');
        $user=User::create([
            'name'=>'Robert',
            'last_name'=>'Sanchez Ticona',
            'email'=>'robert@gmail.com',
            'direccion'=>'4514  Sunny Glen Lane',
            'password'=>'$2y$10$cuf37o9lN0IkRFv73Q7IB.c5bDqCvog845XuTKHxSbMep/D04mknG' //password
        ]);
        $user->assignRole('user');
        
        //categorias
        $categoria1=Categorias::create([
            'descripcion'=>'camisas',
        ]);
        $categoria2=Categorias::create([
            'descripcion'=>'zapatillas',
        ]);
        $categoria3=Categorias::create([
            'descripcion'=>'gorros',
        ]);
        $categoria4=Categorias::create([
            'descripcion'=>'polos',
        ]);
        $categoria5=Categorias::create([
            'descripcion'=>'zapatos',
        ]);

        //productos
        $producto=Productos::create([
            'descripcion'=>'Camisa blanca manga larga',
            'foto'=>'http://127.0.0.1:8000/photos/OUyGZv7P57MpJwnWaWejMkURG9b9wjrdITn7f9nW.jpg',
            'stock'=>'50',
            'precio'=>'10',
            'categoria_id'=>$categoria1->id,
        ]);
        $producto=Productos::create([
            'descripcion'=>'Camisa blanca',
            'foto'=>'http://127.0.0.1:8000/photos/OUyGZv7P57MpJwnWaWejMkURG9b9wjrdITn7f9nW.jpg',
            'stock'=>'50',
            'precio'=>'10',
            'categoria_id'=>$categoria1->id,
        ]);
        $producto=Productos::create([
            'descripcion'=>'Zapatillas nike',
            'foto'=>'http://127.0.0.1:8000/photos/TvcW5qUjhJ1j43naEJqQDYTdAqPwb4tngw3eT2KO.png',
            'stock'=>'50',
            'precio'=>'10',
            'categoria_id'=>$categoria2->id,
        ]);
    }
}

<?php

use App\Models\Productos;
use App\User;
use App\Models\Categorias;
use Illuminate\Database\Seeder;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::create([
            'name'=>'admin',
            'last_name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>'$2y$10$cuf37o9lN0IkRFv73Q7IB.c5bDqCvog845XuTKHxSbMep/D04mknG' //password
        ]);
        //categorias
        $categoria1=Categorias::create([
            'descripcion'=>'bebidas',
        ]);
        $categoria2=Categorias::create([
            'descripcion'=>'abarrotes',
        ]);
        $categoria3=Categorias::create([
            'descripcion'=>'ga',
        ]);
        $categoria4=Categorias::create([
            'descripcion'=>'gaes',
        ]);
        $categoria5=Categorias::create([
            'descripcion'=>'asdasdasd',
        ]);

        //productos
        $producto=Productos::create([
            'descripcion'=>'zapato',
            'foto'=>null,
            'stock'=>'50',
            'precio'=>'10',
            'categoria_id'=>$categoria1->id,
        ]);
    }
}

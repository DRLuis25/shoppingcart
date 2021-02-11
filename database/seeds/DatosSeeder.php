<?php

use App\Models\Productos;
use App\User;
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
        //Docentes
        factory(Productos::class,20)->create();
    }
}

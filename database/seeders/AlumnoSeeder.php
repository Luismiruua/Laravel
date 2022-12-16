<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alumno;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $alumno = new Alumno();
        $alumno->nombre = 'Luis';
        $alumno->telefono = 5446546;
        $alumno->edad = 23;
        $alumno->password = 'contraseña';
        $alumno->email = 'estoaesunaprueba@gmail.com';
        $alumno->sexo = 'M';
        
        $alumno->save();//Nos salva este registro, es decir nos "guarda los datos".
        
        $alumno2 = new Alumno();
        $alumno2->nombre = 'Alejandra';
        $alumno2->telefono = 13141;
        $alumno2->edad = 12;
        $alumno2->password = 'a bueno';
        $alumno2->email = 'otraprueba@gmail.com';
        $alumno2->sexo = 'F';

        $alumno2->save();

        $alumno3 = new Alumno();
        $alumno3->nombre = 'Lorena';
        $alumno3->telefono = 45235235;
        $alumno3->edad = 19;
        $alumno3->password = 'si';
        $alumno3->email = 'loreanramirez@gmail.com';
        $alumno3->sexo = 'F';

        $alumno3->save();
        
        $alumno4 = new Alumno();
        $alumno4->nombre = 'Brayan';
        $alumno4->telefono = 43254454235;
        $alumno4->edad = 31;
        $alumno4->password = 'haber estudiao';
        $alumno4->email = 'brayanmsmuawea@gmail.com';
        $alumno4->sexo = 'M';

        $alumno4->save();
        
        $alumno5 = new Alumno();
        $alumno5->nombre = 'Eduardo';
        $alumno5->telefono = 10;
        $alumno5->edad = 67;
        $alumno5->password = 'simplemente eduardo';
        $alumno5->email = 'eduardoeduardo@gmail.com';
        $alumno5->sexo = 'M';

        $alumno5->save();
    }
}

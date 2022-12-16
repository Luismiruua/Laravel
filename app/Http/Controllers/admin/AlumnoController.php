<?php

namespace App\Http\Controllers\admin;
use App\Models\Alumno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public function alumno(Request $request){

        $alumno = Alumno::all();

        return response()->json($alumno);

    }

    public function alumnoId(Request $request){

        $alumno = Alumno::where('id', $request->id)->get();

        return response()->json([
            "succes" => true,
            "message" => 'Este es tu alumno',
            "data" => $alumno,

        ]);


    }

    public function alumnoDelete(Request $request){

        $eliminar = Alumno::where('id', $request->id)->delete();

        return response()->json([
            "succes" => true,
            "message" => 'Se ha eliminado correctamente',
            "data" => $eliminar]);

    }
    

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alumnoCrear(Request $request)
    {

        $alumnoC = new Alumno();
        $alumnoC->nombre = $request->validate(post('nombre'));
        $alumnoC->telefono = $request->validate(post('telefono'));
        $alumnoC->edad = $request->validate(post('edad'));
        $alumnoC->password = $request->validate(post('password'));
        $alumnoC->email = $request->validate(post('email'));
        $alumnoC->sexo = $request->validate(post('sexo'));
        $alumnoC->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function alumnoEdit(Request $request, $id)
    {
        $alumnoE = Alumno::find($id);
        $alumnoE->nombre=$request->nombre;
        $alumnoE->telefono=$request->telefono;
        $alumnoE->edad=$request->edad;
        $alumnoE->password=$request->password;
        $alumnoE->email=$request->email;
        $alumnoE->sexo=$request->sexo;
        $alumnoE->save();
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

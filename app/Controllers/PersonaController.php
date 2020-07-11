<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{
		return view('welcome_message');
    }

    public function datosAction($nombre, $edad)
    {  // $data=
       // $data=
        return view('persona/datos_view');

    }   
    public function listarAction()
    {  $lista=array(
        array('id'=>1,'nombre'=>'Mateo','edad'=>25),
        array('id'=>2,'nombre'=>'Mateo','edad'=>25),
        array('id'=>3,'nombre'=>'Mateo','edad'=>25),
        array('id'=>4,'nombre'=>'Mateo','edad'=>25)
    );      
    $data[]
        // $data=
       // $data=
        return view('persona/datos_view');

    }   

	//--------------------------------------------------------------------

}

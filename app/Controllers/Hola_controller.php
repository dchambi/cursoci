<?php namespace App\Controllers;

class Hola_controller extends BaseController
{
	public function index()
	{
		return view('welcome_message');
    }

    public function vistaAction()
	{
		return view('hola_view');
    }
    
    

}

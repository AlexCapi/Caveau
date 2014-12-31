<?php

class DiaporamaController extends Controller {

	public function index()
	{
        $images = Diaporama::all();
        return View::make('pages/diaporama', array('images' => $images));
	}

}

<?php

class VinController extends Controller {

	public function index()
	{
        $vinsCategories = [];

        $categories = Categorie::all();
        foreach($categories as $categorie){
            $vinsCategories[$categorie->libelle] = $categorie->vins()->get();
        }
        return View::make('pages/vins', array('vinsCategories' => $vinsCategories));
	}

}

<?php

class ActualiteController extends Controller {

	public function index()
	{
        $recompenses = $this->getRecompenses();
        $documents = Document::all();
        return View::make('pages/actualites', array('recompenses' => $recompenses, 'documents' => $documents));
	}

    protected function getRecompenses()
    {
        return DB::table('recompenses')
            ->join('vins', 'recompenses.vin_id', '=', 'vins.id')
            ->join('categories', 'vins.categorie_id', '=', 'categories.id')
            ->select('recompenses.*', 'vins.libelle AS vin_libelle', 'vins.specificite', 'categories.libelle AS categorie_libelle')
            ->get();
    }

}

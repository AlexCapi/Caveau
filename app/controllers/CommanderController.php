<?php

class CommanderController extends Controller {

	public function index()
	{
        $commandeEnCours = false;
        $vins = Vin::all();
        if (Session::has('vins'))
        {
            $commandeEnCours = true;
        }
        return View::make('pages/commander', array('vins' => $vins, 'commandeEnCours' => $commandeEnCours, 'sessionVins' => Session::get('vins')));
	}

    public function commander()
    {
        if (Request::ajax())
        {
            $data = Input::get('vins');
            Session::put('vins', $data);
            return $data;
        } else {
            if(!Session::has('vins')){
                return Redirect::back();
            }

            $retour = $this->getVinsPrices(Session::get('vins'));
            $vins = $retour['vins'];
            $total = $retour['total'];


            $validator = $this->getCommandeValidator();

            if ($validator->passes()) {
                $fields = array(
                    'civilite' => Input::get('civilite'),
                    'nom' => Input::get('nom'),
                    'prenom' => Input::get('prenom'),
                    'email' => Input::get('email'),
                    'adresse' => Input::get('adresse'),
                    'cp' => Input::get('cp'),
                    'ville' => Input::get('ville'),
                    'pays' => Input::get('pays'),
                    'text' => Input::get('message'),
                    'total' => $total,
                    'vins' => $vins,
                );
                Session::forget('vins');
                return Redirect::back()->with(array('success'=> serialize($fields), 'commandeEnCours' => false));
                Mail::send('emails.order.commande', $fields, function($message)
                {
                    $message->to(Config::get('emails.email_to'), Config::get('emails.name_to'))->subject('Commande de vins');
                });
                Session::forget('vins');
                return Redirect::back()->with(array('success'=> 'Votre commande a bien été prise en compte.', 'commandeEnCours' => false));
            } else {
                return Redirect::back()->withInput()->withErrors($validator);
            }
        }
    }

    protected function getCommandeValidator()
    {
        return Validator::make(Input::all(), [
            "civilite" => "required",
            "nom" => "required",
            "prenom" => "required",
            "email" => "required|email",
            "adresse" => "required",
            "ville" => "required",
            "cp" => "required",
            "pays" => "required",
            "g-recaptcha-response" => "required|recaptcha",
        ]);
    }

    protected function getVinsPrices($sessionVins)
    {
        $total = 0;

        foreach($sessionVins as $index => $sessionVin){
            $vin = Vin::find($sessionVin['id']);
            $sessionVins[$index]['prix'] = $vin->prix;
            $total += $vin->prix * $sessionVins[$index]['qt'];
        }
        return array('vins' => $sessionVins, 'total' => $total);
    }

}

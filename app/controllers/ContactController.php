<?php

class ContactController extends Controller {

	public function index()
	{
        return View::make('pages/contact');
	}

    public function sendForm()
    {
        $validator = $this->getFormValidator();

        if ($validator->passes()) {
            Mail::queue('emails.contact.contact', array('nom' => Input::get('nom'), 'email' => Input::get('email'), 'text' => Input::get('message')), function($message)
            {
                $message->to(Config::get('emails.email_to'), Config::get('emails.name_to'))->subject(Input::get('objet'));
            });
            return Redirect::back()->with('success','Votre email a bien été envoyé.');
        } else {
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    protected function getFormValidator()
    {
        return Validator::make(Input::all(), [
            "nom" => "required",
            "email" => "required|email",
            "objet" => "required",
            "message" => "required",
            "g-recaptcha-response" => "required|recaptcha",
        ]);
    }

}

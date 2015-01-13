<?php

class UserController extends Controller
{
    public function login()
    {
        return View::make("user/login");
    }

    public function connect()
    {
        $validator = $this->getLoginValidator();

        if ($validator->passes()) {
            $credentials = $this->getLoginCredentials();

            if (Auth::attempt($credentials)) {
                return Redirect::intended('/admin');
            }

            return Redirect::back()->withErrors([
                "password" => ["Les informations renseignées sont incorrectes."]
            ]);
        } else {
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route("/");
    }

    public function showRequest()
    {
        return View::make("user/request");
    }

    public function request()
    {
        $response = $this->getPasswordRemindResponse();

        if ($this->isInvalidUser($response)) {
            return Redirect::back()->withInput()->with("error", Lang::get($response));
        }

        return Redirect::back()->with("status", Lang::get($response));
    }

    public function showReset($token)
    {
        return View::make('user/reset')->with('token', $token);
    }

    public function reset($token)
    {
        $credentials = Input::only(
                "email",
                "password",
                "password_confirmation" 
            ) + compact("token");

        $response = $this->resetPassword($credentials);

        if ($response === Password::PASSWORD_RESET) {
            return Redirect::to("user/login")->with(array('success'=> 'Mot de passe mis à jour avec succès.'));
        }

        return Redirect::back()->withInput()->with("error", Lang::get($response));
    }

    protected function resetPassword($credentials)
    {
        return Password::reset($credentials, function($user, $pass) {
            $user->password = Hash::make($pass);
            $user->save();
        });
    }


    protected function getLoginValidator()
    {
        return Validator::make(Input::all(), [
            "username" => "required",
            "password" => "required"
        ]);
    }

    protected function getLoginCredentials()
    {
        return [
            "username" => Input::get("username"),
            "password" => Input::get("password")
        ];
    }

    protected function getPasswordRemindResponse()
    {
        return Password::remind(Input::only("email"));
    }

    protected function isInvalidUser($response)
    {
        return $response === Password::INVALID_USER;
    }
}
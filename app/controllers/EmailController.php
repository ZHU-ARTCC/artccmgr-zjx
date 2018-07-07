<?php

class EmailController extends \BaseController {

	public function index()
	{
        if(Auth::user()->hasRole('ATM') || Auth::user()->hasRole('DATM') || Auth::user()->hasRole('TA') || Auth::user()->hasRole('EC') || Auth::user()->hasRole('FE') || Auth::user()->hasRole('WM')) {
            if (Auth::user()->hasRole('ATM')) {
                $email = 'atm@zjxartcc.org';
            } else if (Auth::user()->hasRole('DATM')) {
                $email = 'datm@zjxartcc.org';
            } else if (Auth::user()->hasRole('TA')) {
                $email = 'ta@zjxartcc.org';
            } else if (Auth::user()->hasRole('EC')) {
                $email = 'ec@zjxartcc.org';
            } else if (Auth::user()->hasRole('FE')) {
                $email = 'fe@zjxartcc.org';
            } else if (Auth::user()->hasRole('WM')) {
                $email = 'webmaster@zjxartcc.org';
            }
        } else {
            return Redirect::action('FrontController@showWelcome')->withMessage('Unauthorized!');
        }
		return View::make('admin.email')->with('email', $email);
	}

	public function setPassword()
	{
        if(Input::get('password') == Input::get('repeat_password'))
        {
            $password = file_get_contents("https://mail.zjxartcc.org/mail/password.php?password=".Input::get('password'));

            $mail = Mailbox::find(Input::get('email'));
            $mail->password = $password;
            $mail->save();

            return Redirect::action('EmailController@index')->with('message', 'Email Password Successfully Updated!');
        } 
        else 
        {
            return Redirect::action('EmailController@index')->with('message', 'Passwords do not match!');
        }
	}
}

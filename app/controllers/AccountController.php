<?php

class AccountController extends BaseController {

	public function __construct()
	{
		//get the fucking throttle provider
		$throttle = Sentry::getThrottleProvider();

		//enable the throttling feature
		$throttle->enable();
	}
	
	/**
	 * show the login form
	 * @return  Response 
	 */
	
	public function getLogin()
	{
		return View::make('login.index');
	}

	/**
	 * process the login credentials
	 * @return  Response  
	 */

	public function postLogin()
	{
		//gather sanitize input 
		$input = array(
			'email' => Binput::get('email'),
			'password' => Binput::get('password'),
			'rememberMe' => Binput::get('rememberMe')
			);

		//set validation rules
		$rules = array(
			'email' => 'required|min:4|max:64|email',
			'password' => 'required|min:6'
			);

		//run the validator mofo!!! :P 
		$validator = Validator::make($input,$rules);

		if($validator->passes())
		{
			try
			{
				//check if the user is lock or suspended
				$user = Sentry::getUserProvider()->findByLogin($input['email']);
				$throttle = Sentry::getThrottleProvider()->findByUserId($user->id);
				$throttle->check();

				//set the login credentials
				$credentials = array(
					'email' => $input['email'],
					'password' => $input['password']
					);

				Sentry::authenticate($credentials,$input['rememberMe']);
			
			}
			/**
			 * FOR MORE INFO ABOUT THE EXCEPTION LIST PLEASE VISIT ITS DOCUMENTATION
			 * http://docs.cartalyst.com/sentry-2/overview
			 */
			
			catch(Cartalyst\Sentry\Users\UserNotFoundException $error)
			{
				//make sure that the fucking password is properly hash you faggot
				Session::flash('error', 'Invalid username or password.');
				return Redirect::to('account/login')->withErrors($validator)->withInput();
			}

			catch(Cartalyst\Sentry\Users\UserNotActivatedException $error)
			{
				//you poor little prick. Admin forgot to activate your account HAHA!
				Session::flash('error', 'Account has not been activated. Please contact the administrator immediately');
				return Redirect::to('account/login')->withErrors($validator)->withInput();
			}
			/**
			 * MAKE SURE THAT THROTTLING IS ENABLED OR ELSE IT WONT WORK
			 */
			
			catch(Cartalyst\Sentry\Throttling\UserSuspendedException $error)
			{
				//admind suspends your account?!?!?! wtf bro|sis?!
				$suspensionTime = $throttle->getSuspensionTime();
				Session::flash('error', "Your account has been suspended for $suspensionTime minutes");
				return Redirect::to('account/login')->withErrors($validator)->withInput();
			}

			catch(Cartalyst\Sentry\Throttling\UserBannedException $error)
			{
				//admin banned your account. shame on you!
				Session::flash('error', 'Account has been banned. Please contact the administrator immediately');
			}

			//you're a lucky b*tch. You passed all the exception
			//i'll bring you to the sacred world of Citylight!. Enjoy :")
			return Redirect::to('dashboard');
		}
		else //if form validation fails!
		{
			return Redirect::to('account/login')->withErrors($validator)->withInput();
		}
	}

	/**
	 * log out the user
	 * @return Response
	 */
	public function getLogout()
	{
		Sentry::logout();
		return Redirect::to('account/login');
	}
}

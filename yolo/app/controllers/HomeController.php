<?php


class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello')->with('redirectUrl', '/login');
	}

	public function login()
	{
		$e = App::make('etalio');
		$scopes = ['profile.basic.r', 'profile.grant.rw'];
		// 'acr_values' => 3 means LOA3 aka 2 factor authorization
		// 'acr_values' => 2 means LOA2
		$url =  $e->getLoginUrl(['scope' => $scopes, 'acr_values' => 2, 'prompt' => 'login']);

		return Redirect::to($url);
	}

	public function authenticate()
	{
		$e = App::make('etalio');
		$token = $e->authenticateUser();
		if (!$token) {
			return View::make('info')->with('input', "Did not get token - Try again.");
		}
		return Redirect::away("dashboard");
	}

	public function showDashboard()
	{
		$e = App::make('etalio');
		$profile = $e->getCurrentProfile();
		if ($profile) {
			$username = $profile['name'];
			$avatar= $profile['image']['60x60'];
		} else {
			$username = "omg, nooo";
		}

		return View::make('dashboard', ['username'=>$username,'avatar'=> $avatar]);
		//return Redirect::to("/");
	}
	public function logout() {
		$e = App::make('etalio');
		$config = Config::get('etalio');
		$token = $e->authenticateUser();
		$profile = $e->getCurrentProfile();
        $mcId = $profile['id'];
        $e->revokeGrantByProfile($mcId, $config['appId']);
        $e->revokeToken();
		return Redirect::away("/");
	}
}

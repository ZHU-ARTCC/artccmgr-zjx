<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
    if( ! Request::secure())
    {
        return Redirect::secure(Request::path());
    }
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

Route::filter('roster_edit', function()
{
    if (! Entrust::can('roster_edit') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('roster_add', function()
{
    if (! Entrust::can('roster_add') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('roster_del', function()
{
    if (! Entrust::can('roster_del') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('events', function()
{
    if (! Entrust::can('events') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('docs', function()
{
    if (! Entrust::can('docs') && Auth::id() !== 1146612) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('scenery', function()
{
    if (! Entrust::can('scenery') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('visiting', function()
{
    if (! Entrust::can('visiting') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('feedback', function()
{
    if (! Entrust::can('feedback') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('profile', function()
{
    if (! Entrust::can('profile') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('loa', function()
{
    if (! Entrust::can('loa') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('mentor', function()
{
    if (! Entrust::can('mentor') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('instruct', function()
{
    if (! Entrust::can('instruct') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

Route::filter('snrstaff', function()
{
    if (! Entrust::can('snrstaff') ) // Checks the current user
    {
        return Redirect::to('/')->with('message', 'You Don\'t Have Permission');
    }
});

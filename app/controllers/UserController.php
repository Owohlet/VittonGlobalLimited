<?php

/**
* 
*/
// use Laracasts\Utilities\JavaScript\JavaScriptFacade as JavaScript;

class UserController extends BaseController
{
	
	public function portfolio()
	{
		$photos = Photo::all();
		return View::make('portfolio', compact('photos'));
	}

	public function show(Photo $photo){
		// $photo = Photo::findOrFail(Input::get('id'));
		$photos = Photo::all();
		$related = array();
		foreach ($photos as $dbphoto) {
			if ($dbphoto->category == $photo['category']) {
				array_push($related, $dbphoto);
			}
		}

		return View::make('show', compact('photo'))->with('related',$related);
	}

	public function index(){


		$recentseven = DB::table('photo')->orderBy('updated_at', 'desc')->take(7)->get();

		JavaScript::put([
			'foo' => 'bar',
			'user' => 'me',
			'age' => 29
			]);
		
		return View::make('index')->with('recentseven',$recentseven);
	}
}
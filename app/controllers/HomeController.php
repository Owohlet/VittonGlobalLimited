<?php

use Intervention\Image\ImageServiceProvider;

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
		return View::make('hello');
	}

	public function fileupload(){

		$input = Input::all();
		$rules = array('title' => 'required');
		$validation = Validator::make($input, $rules);

		if ($validation->passes()) {
			$photo = new Photo();
			$photo->title = $input['title']; 
			$photo->description = $input['description'];
			$photo->path = base_path() . '/public/uploads' . Input::file('file')->getClientOriginalName();
			$photo->save();


			return View::make('/');
		}


	}
	public function home(){
		$photos = Photo::all();
		return View::make('vtadmin', compact('photos'));
		
	}

	public function saveCreate(){
		$input = Input::all();
		$task = new Photo;
		$task->title = $input['title'];
		$task->description = $input['description'];
		$task->category = $input['category'];
		// $task->path = base_path() . '/public/uploads/' . $input['image']->getClientOriginalName();

		// getting the name of the image
		$filename = time().$input['image']->getClientOriginalName();

		//attaching the image name with the src path and save to path
		$task->path = 'uploads/'.$filename;

		//before the image is moved to the uploads folder we resize with intervention
		$background = Image::canvas(650, 650);
		$image = Input::file('image');
		$newimage = Image::make($image)->resize(650, 650, function ($c) {
			$c->aspectRatio();
			$c->upsize();
		});
		$background->insert($newimage, 'center');

		//moving the image to the uploads folder
		$savepath= 'public/uploads';
		$background->save(base_path().'/public/uploads/'.$filename);
		$task->save();

		return Redirect::action('HomeController@home');
	}

	public function create(){
		return View::make('create');

	}

	public function edit(Photo $photo){
		return View::make('edit', compact('photo'));

	}
	public function doEdit()
	{
		$task = Photo::findOrFail(Input::get('id'));
		$task->title = Input::get('title');
		$task->description = Input::get('description');
		$task->category = Input::get('category');

		$filename = time().Input::get('image'); //->getClientOriginalName();

		//attaching the image name with the src path and save to path
		$task->path = 'uploads/'.$filename;

		//before the image is moved to the uploads folder we resize with intervention
		$background = Image::canvas(650, 650);
		$image = Input::file('image');
		$newimage = Image::make($image)->resize(650, 650, function ($c) {
			$c->aspectRatio();
			$c->upsize();
		});
		$background->insert($newimage, 'center');

		//moving the image to the uploads folder
		$savepath= 'public/uploads';
		$background->save(base_path().'/public/uploads/'.$filename);

		$task->save();
		return Redirect::action('HomeController@home');
	}

	public function delete(Photo $photo){
		return View::make('delete', compact('photo'));

	}
	public function doDelete()
	{
		$task = Photo::findOrFail(Input::get('id'));
		$task->delete();
		return Redirect::action('HomeController@home');
	}

}

<?php 


/**
* 
*/
class MailController extends BaseController
{
	
	public function order()
	{
		return View::make('order');
	}

	public function makeorder()
	{

		 //Get all the data and store it inside Store Variable
		$data = Input::all();

            //Validation rules
		$rules = array (
			'inputFullname' => 'required',
			'inputEmail' => 'required|email',
			'inputPhone'=>'numeric|min:8',
			'inputProductName' => 'required',
			'inputProductQty' => 'required',
			'inputMessage' => 'required|min:20'
			);

            //Validate data
		$validator  = Validator::make ($data, $rules);

            //If everything is correct than run passes.
		if ($validator -> passes()){

                //Send email using Laravel send function
			Mail::send('emails.ordermail', $data, function($message) use ($data)
			{
		//email 'From' field: Get users email add and name
				$message->from($data['inputEmail'] , $data['inputFullname']);
		//email 'To' field: cahnge this to emails that you want to be notified.                    
				$message->to('ikeowohlet@gmail.com', 'Iyke')->cc('ike.owoh@meltwater.org')->subject('contact request');

			});

			return Redirect::action('UserController@portfolio');    
		}else{
		//return contact form with errors
			return Redirect::to('/order')->withErrors($validator);
			// Redirect::back()->withInput()->withErrors($validator->messages());
		}
	}

	public function contact()
	{
		return View::make('contact');
	}

	public function getContactUsForm(){

		 //Get all the data and store it inside Store Variable
		$data = Input::all();

            //Validation rules
		$rules = array (
			'inputFullname' => 'required',
			// 'inputEmail' => 'required|alpha',
			'inputPhone'=>'numeric|min:8',
			'inputEmail' => 'required|email',
			'inputMessage' => 'required|min:20'
			);

            //Validate data
		$validator  = Validator::make ($data, $rules);

            //If everything is correct than run passes.
		if ($validator -> passes()){

                //Send email using Laravel send function
			Mail::send('emails.hello', $data, function($message) use ($data)
			{
		//email 'From' field: Get users email add and name
				$message->from($data['inputEmail'] , $data['inputFullname']);
		//email 'To' field: cahnge this to emails that you want to be notified.                    
				$message->to('ikeowohlet@gmail.com', 'Iyke')->cc('ike.owoh@meltwater.org')->subject('contact request');

			});

			return Redirect::action('UserController@portfolio');  
		}else{
		//return contact form with errors
			return Redirect::to('/contact')->withErrors($validator);
			// Redirect::back()->withInput()->withErrors($validator->messages());
		}
	}
}

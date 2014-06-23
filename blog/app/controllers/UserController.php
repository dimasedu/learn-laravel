<?php

class UserController  extends BaseController{


	public function index(){
		$users = Users::all();
		return View::make('users.index',compact('users'));
	}

	public function create(){
		return View::make('users.create');
	}

	public function store(){
		$input = Input::all();
		$validation = Validator::make($input, Users::$rules);
		if($validation->passes()){
			Users::create($input);
			return Redirect::route('users.index');
		}

		return Redirect::route('users.create')->withInput()->withErrors($validation)->withMessage('message','Errors :');
	}

	public function edit($id){

		$user = Users::find($id);
		if(is_null($user)){
			return Redirect::route('users.index');
		}

		return View::make('users.edit',compact('user'));

	}	

}
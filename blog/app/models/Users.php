<?php

class Users extends Eloquent{

	protected $guarded = array('id');
	protected $fillable = array('name', 'email');


	public static $rules = array(
		'name' => 'required|min:5',
		'email' => 'required|email'
		);

	
}
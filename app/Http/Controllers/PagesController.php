<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex(){
		return view('pages.welcome');
	}

	public function getEmail(){
		return view('pages.email');
	}

	public function getContactgrp(){
		return view('pages.contactgrp');
	}

	public function getContacts(){
		return view('pages.contacts');
	}

}
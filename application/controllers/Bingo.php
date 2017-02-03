<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		

		// build the list of authors, to pass on to our view
		$source = $this->quotes->get(5);

		$this->data = array_merge($this->data, $source);
		$this->data['pagebody'] = 'justone';
		$this->render();
		
	}
	

}

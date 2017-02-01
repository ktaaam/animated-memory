<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class First extends Application
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/genera/urls.html
	 */
	public function index()
	{
		$record = $this->quotes->get(1);
		$this->data = array_merge($this->data, $record);
		$this->data['pagebody'] ='justone';
		$this->render();
	}
}
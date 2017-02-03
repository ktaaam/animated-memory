<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hogwarts extends Application
{
	
	public function index()
	{
		$this->data['pagebody'] = 'homepage';
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;
		$this->render();
	}
	public function shucks() 
	{
		$record = $this->quotes->get(2);
		$this->data = array_merge($this->data, $record);
		$this->data['pagebody'] ='justone';
		$this->render();		
	}
	public function random() {
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';
		// Generate random index
		$randomIndex = mt_rand(1,7);
		$source = array();
		// Add random author to array
		array_push($source, $this->quotes->get($randomIndex));
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;
		$this->render();
	}
}
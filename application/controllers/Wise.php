<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 
 /*
  * To change this license header, choose License Headers in Project Properties.
  * To change this template file, choose Tools | Templates
  * and open the template in the editor.
  */
 
 /**
  * Description of Wise
  *
  * @author Kevin
  */
 class Wise extends Application {
     //put your code here
     
     public function bingo()
 	{      
             $record = $this->quotes->get('6');
             $this->data = array_merge($this->data, $record);
             $this->data['pagebody'] = 'justone';
             $this->render();
 	}
	
	
 }
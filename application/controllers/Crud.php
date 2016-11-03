<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends Application {

    	function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
            if (!strcmp($this->session->userdata('userrole'), 'admin')) { 
		$result = 'You are a restful poser.';
            } else {
                $result = 'Get out you hipster.';
            }
		$this->data['content'] = $result;
		$this->render();
	}

}

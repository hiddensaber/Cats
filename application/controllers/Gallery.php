<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
                    $this->data['pagebody'] = 'Gallery';
                    $this-> render();
	}
}

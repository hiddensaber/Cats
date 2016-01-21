<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->data['pagebody'] = 'welcome';
        $this-> render();
        $autoload['helper'] =array('common', 'url');
    }

}

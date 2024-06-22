<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('pages/index');
    }
}

/* End of file Index_controller.php and path \application\controllers\Index_controller.php */

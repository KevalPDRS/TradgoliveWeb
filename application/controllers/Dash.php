<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dash extends CI_Controller
{
    public function index()
    {
        $this->load->view('Dash_view');  
    }
    
}

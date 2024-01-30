<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dash extends CI_Controller
{
    public function index()
    {
        $this->template->load('master_files/tamplate_master', 'templates/Dash_view');  
    }
    
}

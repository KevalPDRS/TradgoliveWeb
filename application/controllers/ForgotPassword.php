<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ForgotPassword extends CI_Controller
{
    public function index()
    {
        $this->template->load('master_files/tamplate_master', 'templates/ForgotPassword_view');  
    }
    
}

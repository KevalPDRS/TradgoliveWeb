<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template
{
    var $template_data = array();
    function set($name,$value)
    {
        $this->template_data[$name] = $value;
    }

    function load($template = '',$view ='',$view_data = array(),$extrafiles_header_view = false,$extrafiles_footer = false,$return = false)
    {
        $this->CI =& get_instance();
        $this->set('contents_header',"");
        if($extrafiles_header_view !=false)
        {
            $this->set('contents_header',$this->CI->load->view('extrafiles/'.$extrafiles_header_view,$view_data,TRUE));

        }
        $this->set('contents_footer',"");
        if($extrafiles_footer !=false)
        {
            $this->set('contents_footer',$this->CI->load->view('extrafiles/'.$extrafiles_footer,$view_data,TRUE));
            
        }

        $this->set('contents',$this->CI->load->view($view,$view_data,TRUE));
        return $this->CI->load->view($template,$this->template_data,$return);
    }
}





